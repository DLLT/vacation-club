<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;

class RegisterController extends Controller {

    public function getHome(Request $request) 
    {
        $user = $request->session()->get('user');
        
        return view('register', ['user' => $user]); 
    
    }

    public function getSuccess(Request $request)
    {   

        $user = $request->session()->get('user');
        

        return view('register_success', ['user' => $user]);
    }

    public function createUser(Request $request)
    {
        $user = new User;

        $user->email = $request->email;
        $user->password = $request->password;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->streetnum = $request->streetnum;
        $user->streetname = $request->streetname;
        $user->suburb = $request->suburb;
        $user->postcode = $request->postcode;
        $user->phone = $request->phone;    
         
        if ( $user->save() ) {
            
            return Redirect::to('register/success');
        
        } else {
            
            return "Failed";    
        }

    }
}

