<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Analysis;
use App\Models\Lab;
use App\Models\NewsLetter;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
class IndexController extends Controller
{
   /**
    * get Data in load page
    */
    public function index()
    {
        
        $labs = Lab::where('active', '=', 1)->get();
      
        return view('web.home.index', compact('labs'));
    }

     /**
    * get Analysis Data dependant on Lab
    */
    public function fetchAnalysis(Request $request)
    {
        $value = $request->get('value');
        $output = '';
        $data = Analysis::where('lab_id', $value)->get();

        foreach ($data as $row) {
            $output .= ' <option value="'.$row->id .'" data-tokens="' . $row->id . '">' . $row->en_name . '</option>';
        }

        echo $output;
    }
     /**
    * Add To session array analysis and lab ande check if exist return msg
    */
    public function addToCard(Request $request){
        \Log::info($request->all());
        $lab=Lab::where('id',$request->selectedLab)->first();
        $analysis=Analysis::whereIN('id',$request->analysis)->get();
 
        $value = \Session::get('analysisSession');
       $count=0;
       if($value){
        foreach($value as  $vvv){
            foreach($vvv->analysis as $key => $vv){
           
             if($analysis->contains($vv->id)) {
                 \Log::info(["ifyees",$vv->id]);
            $count++;
             }else{
                 \Log::info(["ifNooo",$vv->id]);
             }
             }
            }
       }
       

        if($count>0){
            $value =$request->session()->get('analysisSession');
           
            \Session::flash('message', 'This Analysis Is Elready Added To Your Card!'); 
            \Session::flash('alert-class', 'alert-danger'); 
        }else{
           
            $obj = new Collection();
            // $obj->lab =$lab;
             $obj->analysis =$analysis;
               $obj->lab=$lab;
             
           $request->session()->push('analysisSession', $obj);
    
           $value =$request->session()->get('analysisSession');
         
        }

        return view('web.home.ajaxLab', ['value'=> $value] );
    }
 /**
    * Remove item from session array
    */
    public function removeItem($id){
     
        $value = \Session::get('analysisSession');
       
        foreach($value as  $vvv){
           foreach($vvv->analysis as $key => $vv){
            if($vv->id == $id){
                \Log::info(["if",$id,$vv->id]);
             unset($vvv->analysis[$key]);
                $newClass = array_values($value);
               \ Session::put('analysisSession', $value);

            }
           }
           
           
        } 
        $lab=Lab::where('id',1)->first();
      
        return view('web.home.ajaxLab', compact('lab','value'))->render();
    }

 /**
    * go To Cart Page
    */

   
    public function checkOutForm(Request $request)
    {

        $value = \Session::get('analysisSession');
        // return($data);
        return view('web.cart.index', compact('lab','value'));
    }

    /**
    *send news latter
    */
    public function sendNewsLetter(Request $request)
    {
        try{

            $letter= NewsLetter::create($request->except('_token'));
            // $emails = ['senior.steps.info@gmail.com','info@btsconsultant.com','nasser@btsconsultant.com'];
            // \Mail::to($emails)->send(new NewsLetterNotification($letter));
        
     
            //  return redirect()->back()->with('message', 'Thanks; your request has been submitted successfully !');
         }
            catch(QueryException $q){
          
            //  return redirect()->back()->with('message','ُEmpty Newsletter !!!');  
           
         }

         \Session::flash('flag', 'send email successful!'); 
         \Session::flash('alert-class', 'alert-success'); 
         return redirect()->back()->with(['flag'=> 1]);
    }

}
