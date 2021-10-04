<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, User $user)
    {
        if ($user->userType=="main") {
            return redirect('superAdmin');
        } elseif ($user->userType=="business") {
            return redirect('businessDashboard');
        } elseif ($user->userType=="personal") {
            //$redirect = '/manager/home';
            return redirect('dashboard');
        }else {
            $redirect = 'login';
        }
        return redirect('login');
        }
}
