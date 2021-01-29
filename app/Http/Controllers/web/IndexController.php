<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\Analysis;
use App\Models\Lab;
use App\Models\NewsLetter;
use App\Models\Patient;
use App\Models\Order;
use App\Models\Order_item;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Database\QueryException;

class IndexController extends Controller
{
    /**
     * get Data in load page
     */
    public function index()
    {

        $labs = Lab::where('active', '=', 1)->get();
        $analysisCart = null;
        if (Auth::user()) {
            $patient = Patient::where('user_id', Auth::user()->id)->first();
            $order = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->first();
            if ($order) {
                $analysisCart = Order_item::with('analysis')->where('order_id', $order->id)->get();
            } else {
                $analysisCart = null;
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
                'analysis_lab_id' => $request->selectedLab,
            ];

            $saveOrder = Order::where('order_status_id', 100)->where('patient_id', '=', $patient->id)->firstOrNew($xx);

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
                    $analysisCart = Order_item::with('analysis')->where('order_id', $order->id)->get();
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
                    $analysisCart = Order_item::with('analysis')->where('order_id', $order->id)->get();
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
        return view('web.cart.index', ['analysisCart' => $analysisCart]);
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
}
