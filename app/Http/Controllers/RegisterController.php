<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\User;

class RegisterController extends Controller {

    public function getHome() 
    {

        return view('register'); 
    
    }

    public function createUser(Request $request)
    {
        $user = new User;

        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();        

    
        return $user;
    }
}

