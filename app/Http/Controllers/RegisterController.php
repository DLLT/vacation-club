<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class RegisterController extends Controller {

    public function getHome() 
    {

        return view('register'); 
    
    }
}

