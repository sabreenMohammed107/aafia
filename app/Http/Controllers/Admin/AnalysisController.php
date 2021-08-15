<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Analysis;
use App\Models\Lab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
class AnalysisController extends Controller
{
    protected $user_info;

    protected $routeName;

    public function __construct()
    {

        //
        $this->middleware('role:main_admin|super_admin');


        // $this->labUser =Auth::user();
        $this->middleware(function ($request, $next) {
            $this->user_info = Auth::user(); // returns user


            return $next($request);
        });

        $this->routeName = 'admin.';
    }



    public function getData($id){
        $analysis = Analysis::where('lab_id', '=', $id)->get();
        $lab_id=$id;
        return view('admin.labs.analysis', compact('analysis','lab_id'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Analysis::create($request->except('_token'));

        return redirect('/lab-analysis/'.$request->input('lab_id'))->with('flash_success', 'saved Succsessfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row=Analysis::where('id',$id)->first();

        return view('admin.labs.show-analysis', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=Analysis::where('id',$id)->first();

        return view('admin.labs.edit-analysis', compact('row'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row=Analysis::where('id',$id)->first();
        $row->update($request->except('_token'));

        return redirect('/lab-analysis/'.$row->lab_id)->with('flash_success', 'saved Succsessfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Analysis::findOrFail($id)->delete();

        } catch (QueryException $q) {

            return redirect()->back()->with('flash_danger', 'You cannot delete related with another...');

        }
        return redirect()->back()->with('flash_success', 'Data Has Been Deleted Successfully !');
    }
}
