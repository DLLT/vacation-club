<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;

class ContactController extends Controller {

    public function getHome(Request $request)
    {
        $user = $request->session()->get('user');

        return view('contact', ['user' => $user]);    

    }
}

