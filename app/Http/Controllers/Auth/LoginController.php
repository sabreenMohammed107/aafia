<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;




    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';


    public function showLoginForm()
    {
        return view('auth.customLogin');
    }

    protected function authenticated(Request $request, $user)
    {
        $roles = $user->roles;
      
       
        // if($user->hasRole( ['super_admin','main_admin'])){
        // return redirect('/admin');
        // }else{
        //     return redirect('/');
        // }
        
        if($roles[0]->id == 2){
           
            return redirect('/');
        }

        else{
           
            return redirect('/admin');    
        }


       
    }


  
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
