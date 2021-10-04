<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class AuthController extends Controller
{
    public function create(Request $request){
        $user = new UserModel();
        $user->newUser($request);
        return redirect()->route('login');
    }

    public function login(Request $request){
        $message="Invalid Entry";
        if ($request->input('password')==null) {
	            return redirect()->route('login', [$message]);
            }
        else{ //check login
            $user = new UserModel();
            $result=$user->auth($request); //result has the id of the user
            if ($result) {
                return redirect()->route('homepage', [$result[0]->userID]);
                //return view('greetings', ['name' => 'Victoria']);
            }
        }
    }


}
