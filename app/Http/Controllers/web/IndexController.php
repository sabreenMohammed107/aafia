<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Analysis;
use App\Models\Lab;
use App\Models\NewsLetter;
use App\Models\Patient;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Scan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Database\QueryException;
use Carbon\Carbon;

class IndexController extends Controller
{
    /**
     * get Data in load page
     */
    public function index()
    {

        $labs = Lab::where('active', '=', 1)->get();
        $analysisCart = [];
        if (Auth::user()) {
            $patient = Patient::where('user_id', Auth::user()->id)->first();
            $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
            if ($order) {
                $analysisCart = Order_item::with('analysis')->with('scan')->where('order_id', $order->id)->get();
            } else {
                $analysisCart = [];
            }
        }
        return view('web.home.index', compact('labs', 'analysisCart'));
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
            $output .= ' <option value="' . $row->id . '" data-tokens="' . $row->id . '">' . $row->en_name . '</option>';
        }

        echo $output;
    }


    /**
     * get Scan Data dependant on Lab
     */
    public function fetchScan(Request $request)
    {
        $value = $request->get('value');
        $output = '';
        $data = Scan::where('lab_id', $value)->get();

        foreach ($data as $row) {
            $output .= ' <option value="' . $row->id . '" data-tokens="' . $row->id . '">' . $row->en_name . '</option>';
        }

        echo $output;
    }
    /**
     * Add To session array analysis and lab ande check if exist return msg
     */
    public function addToCard(Request $request)
    {
        \Log::info($request->all());
        $lab = Lab::where('id', $request->selectedLab)->first();
        $analysis = Analysis::whereIN('id', $request->analysis)->get();

        $patient = Patient::where('user_id', Auth::user()->id)->first();
        DB::beginTransaction();
        try {
            // Disable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');


            $xx = [
                'patient_id' => $patient->id,
                'order_status_id' => 100,
              
            ];

            $saveOrder = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->firstOrCreate($xx);
            $saveOrder->update(['analysis_lab_id' => $request->selectedLab]);

            foreach ($analysis as $Item) {
                $orderItem = Order_item::firstOrNew(['analysis_id' => $Item->id, 'order_id' => $saveOrder->id]); // your data
                $orderItem->order_id = $saveOrder->id;
                $orderItem->analysis_id = $Item->id;
                $orderItem->original_cost = $Item->original_cost;
                $orderItem->discount_pct = $Item->discount_pct;
                $orderItem->save();
            }


            DB::commit();
            // Enable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
            if ($order) {
                $analysisCart = Order_item::where('order_id', $order->id)->get();
            } else {
                $analysisCart = null;
            }
            return view('web.home.ajaxLab', ['analysisCart' => $analysisCart]);
        } catch (\Throwable $e) {
            // throw $th;
            DB::rollback();
            $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
            if ($order) {
                $analysisCart = Order_item::where('order_id', $order->id)->get();
            } else {
                $analysisCart = null;
            }
            return view('web.home.ajaxLab', ['analysisCart' => $analysisCart]);
        }
    }


    /**
     * Add To session array analysis and lab ande check if exist return msg
     */
    public function addScanCard(Request $request)
    {
        \Log::info(['scan', $request->all()]);
        $lab = Lab::where('id', $request->selectedScan)->first();
        $scans = Analysis::whereIN('id', $request->scans)->get();

        $patient = Patient::where('user_id', Auth::user()->id)->first();
        DB::beginTransaction();
        try {
            // Disable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');


            $xx = [
                'patient_id' => $patient->id,
                'order_status_id' => 100,

            ];

            $saveOrder = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->firstOrCreate($xx);
            \Log::info(['scan', $saveOrder->id]);
            $saveOrder->update(['scan_lab_id' => $request->selectedScan]);

            foreach ($scans as $Item) {
                $orderItem = Order_item::firstOrNew(['scan_id' => $Item->id, 'order_id' => $saveOrder->id]); // your data
                $orderItem->order_id = $saveOrder->id;
                $orderItem->scan_id = $Item->id;
                $orderItem->original_cost = $Item->original_cost;
                $orderItem->discount_pct = $Item->discount_pct;
                $orderItem->save();
            }


            DB::commit();
            // Enable foreign key checks!
            DB::statement('SET FOREIGN_KEY_CHECKS=1;');
            $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
            if ($order) {
                $analysisCart = Order_item::where('order_id', $order->id)->get();
            } else {
                $analysisCart = null;
            }
            return view('web.home.ajaxScan', ['analysisCart' => $analysisCart]);
        } catch (\Throwable $e) {
            // throw $th;
            DB::rollback();
            $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
            if ($order) {
                $analysisCart = Order_item::where('order_id', $order->id)->get();
            } else {
                $analysisCart = null;
            }
            return view('web.home.ajaxScan', ['analysisCart' => $analysisCart]);
        }
    }
    /**
     * Remove item from session array
     */
    public function removeItem($id)
    {

        $row = Order_item::where('id', $id)->first();
        // Delete File ..
        try {
            // $row->item()->delete();
            $row->delete();
            if (Auth::user()) {
                $patient = Patient::where('user_id', Auth::user()->id)->first();
                $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
                if ($order) {
                    $analysisCart = Order_item::with('analysis')->with('scan')->where('order_id', $order->id)->get();
                } else {
                    $analysisCart = null;
                }
            }
        } catch (QueryException $q) {

            return redirect()->back()->with('flash_danger', $q->getMessage());
        }

        \Session::flash('message', 'Deleted Complete !');
        \Session::flash('alert-class', 'alert-danger');
        return view('web.home.ajaxLab', ['analysisCart' => $analysisCart])->render();
    }


    /**
     * Remove item from session array
     */
    public function removeScanItem($id)
    {

        $row = Order_item::where('id', $id)->first();
        // Delete File ..
        try {
            // $row->item()->delete();
            $row->delete();
            if (Auth::user()) {
                $patient = Patient::where('user_id', Auth::user()->id)->first();
                $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
                if ($order) {
                    $analysisCart = Order_item::with('analysis')->with('scan')->where('order_id', $order->id)->get();
                } else {
                    $analysisCart = null;
                }
            }
        } catch (QueryException $q) {

            return redirect()->back()->with('flash_danger', $q->getMessage());
        }

        \Session::flash('message', 'Deleted Complete !');
        \Session::flash('alert-class', 'alert-danger');
        return view('web.home.ajaxScan', ['analysisCart' => $analysisCart])->render();
    }


    public function removeCartItem($id)
    {

        $row = Order_item::where('id', $id)->first();
        // Delete File ..
        try {
            // $row->item()->delete();
            $row->delete();
            if (Auth::user()) {
                $patient = Patient::where('user_id', Auth::user()->id)->first();
                $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
                if ($order) {
                    $analysisCart = Order_item::with('analysis')->with('scan')->where('order_id', $order->id)->get();
                } else {
                    $analysisCart = null;
                }
            }
        } catch (QueryException $q) {

            return redirect()->back()->with('flash_danger', $q->getMessage());
        }

        \Session::flash('message', 'Deleted Complete !');
        \Session::flash('alert-class', 'alert-danger');
        return view('web.cart.ajaxCart', ['analysisCart' => $analysisCart])->render();
    }

    /**
     * go To Cart Page
     */


    public function checkOutForm(Request $request)
    {

        if (Auth::user()) {
            $patient = Patient::where('user_id', Auth::user()->id)->first();
            $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
            if ($order) {
                $analysisCart = Order_item::with('analysis')->where('order_id', $order->id)->orderBy('analysis_id', 'DESC')->get();
            } else {
                $analysisCart = null;
            }
        }
        return view('web.cart.index', ['analysisCart' => $analysisCart, 'order' => $order]);
    }

    /**
     *send news latter
     */
    public function sendNewsLetter(Request $request)
    {
        try {

            $letter = NewsLetter::create($request->except('_token'));
            // $emails = ['senior.steps.info@gmail.com','info@btsconsultant.com','nasser@btsconsultant.com'];
            // \Mail::to($emails)->send(new NewsLetterNotification($letter));


            //  return redirect()->back()->with('message', 'Thanks; your request has been submitted successfully !');
        } catch (QueryException $q) {

            //  return redirect()->back()->with('message','ُEmpty Newsletter !!!');  

        }

        \Session::flash('flag', 'send email successful!');
        \Session::flash('alert-class', 'alert-success');
        return redirect()->back()->with(['flag' => 1]);
    }




    public function SavingCart(Request $request)
    {
        $order = Order::where('id', $request->order)->first();
        $max = Order::latest('order_no')->first();

        $max = ($max != null) ? intval($max['order_no']) : 0;
        $max++;
        $data = [

            'order_date' => Carbon::now(),
            'order_no' => $max,
            'order_status_id' => 101,
            'total_amount' => $request->total,
        ];
        $order->update($data);
    
        // try {
        //     $order->items()->delete();
        // } catch (QueryException $q) {

        //     if (Auth::user()) {
        //         $patient = Patient::where('user_id', Auth::user()->id)->first();
        //         $orders = Order::where('patient_id', '=', $patient->id)->where('order_status_id', '!=', 100)->get();
              
        //     }

            
        //     return view('web.cart.cartOrder', ['orders' => $orders]);
        // }
      
        \Session::flash('message', 'Cart Completely Saved!');
        \Session::flash('alert-class', 'alert-success');
        if (Auth::user()) {
            $patient = Patient::where('user_id', Auth::user()->id)->first();
            $orders = Order::where('patient_id', '=', $patient->id)->whereNotNull('order_status_id',)->where('order_status_id', '!=', 100)->get();
              
        }
        return view('web.cart.cartOrder', ['orders' => $orders]);    }


        public function orderDetails($id){
         $order=Order::where('id',$id)->first();
         if ($order) {
            $analysisCart = Order_item::with('analysis')->with('scan')->where('order_id', $order->id)->get();
        } else {
            $analysisCart = [];
        }
  return view('web.cart.orderDetails', ['order' => $order ,'analysisCart'=>$analysisCart]); 
        }


        public function patientData(Request $request){
            
            
        }
}
