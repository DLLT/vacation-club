<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;

class RegisterController extends Controller {

    public function getHome() 
    {

        return view('register'); 
    
    }

    public function getSuccess()
    {
        return view('register_success');
    }

    public function createUser(Request $request)
    {
        $user = new User;

        $user->email = $request->email;
        $user->password = $request->password;

         
        if ( $user->save() ) {
            
            return Redirect::to('register/success');
        
        } else {

            return "Failed";    
        }

    }
}

