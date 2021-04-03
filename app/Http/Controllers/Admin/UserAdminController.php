<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAdminController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd ($this->user_info);
        $lab = Lab::where('id', '=', $this->user_info->lab_id)->first();

        return view('admin.labs.index', compact('lab'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lab = Lab::where('id', '=', $id)->first();
        return view('admin.labs.edit', compact('lab'));
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
        //
        $lab = Lab::where('id', '=', $id)->first();

        $input =$request->except(['_method', '_token','logo']);
      
     
        if($request->hasFile('logo'))
             {
                $logo=$request->file('logo');
       
                $input['logo'] = $this->UplaodImage($logo);

             }

             $lab->update($input);
             return redirect()->route($this->routeName.'index')->with('flash_success', 'Data Has Been Deleted Successfully !');
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function UplaodImage($file_request)
	{
		//  This is Image Info..
		$file = $file_request;
		$name = $file->getClientOriginalName();
		$ext  = $file->getClientOriginalExtension();
		$size = $file->getSize();
		$path = $file->getRealPath();
		$mime = $file->getMimeType();


		// Rename The Image ..
		$imageName =$name;
		$uploadPath = public_path('uploads');
		
		// Move The image..
		$file->move($uploadPath, $imageName);
       
		return $imageName;
    }
}
