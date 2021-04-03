<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:main_admin|super_admin');
    }
    
    public function index()
    {
        return view('admin.adminLayout.main');
    }
}
