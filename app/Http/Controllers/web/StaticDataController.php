<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticDataController extends Controller
{
    public function index(){
        return view('web.about.index');
    }
     public function contact(){
        return view('web.about.contact');
     }
}
