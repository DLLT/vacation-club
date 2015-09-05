<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class RegisterController extends Controller {

    public function getHome() 
    {

        return view('register'); 
    
    }

    public function createUser(Request $request)
    {
        $input = $request->all();
 

        return $input;
        
    }
}

