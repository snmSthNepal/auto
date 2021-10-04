<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
     //Function right after registration

    public function loginPage(){
        if(Auth::check()){
            if(Auth::User()->userType=="main"){
                return view('auth/login');
            }elseif(Auth::User()->userType=="business"){
                return redirect('businessDashboard');
            }elseif(Auth::User()->userType=="personal"){
                return redirect('dashboard');
            }
        }else{
            return view('auth/login');
        }

        
    }

    public function index(Request $request)
    {
        if(Auth::User()->userType=="main"){
            return view('index');
        }
        else{
            return redirect()->route('dashboard');
        } 
    }


}
