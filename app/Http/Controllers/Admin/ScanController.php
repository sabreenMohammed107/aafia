<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lab;
use App\Models\Scan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class ScanController extends Controller
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
        $scans = Scan::where('lab_id', '=', $id)->get();
        $lab_id=$id;
        return view('admin.labs.scan', compact('scans','lab_id'));
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
        Scan::create($request->except('_token'));

        return redirect('/lab-scan/'.$request->input('lab_id'))->with('flash_success', 'saved Succsessfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row=Scan::where('id',$id)->first();

        return view('admin.labs.show-scan', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=Scan::where('id',$id)->first();

        return view('admin.labs.edit-scan', compact('row'));
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
        $row=Scan::where('id',$id)->first();
        $row->update($request->except('_token'));

        return redirect('/lab-scan/'.$row->lab_id)->with('flash_success', 'saved Succsessfuly');
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
            Scan::findOrFail($id)->delete();

        } catch (QueryException $q) {

            return redirect()->back()->with('flash_danger', 'You cannot delete related with another...');

        }
        return redirect()->back()->with('flash_success', 'Data Has Been Deleted Successfully !');
    }
    }

