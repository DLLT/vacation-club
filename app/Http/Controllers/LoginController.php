<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller {
	
	public function getHome()
	{
		return view("login");
	}

	public function loginUser(Request $request)
	{
		$email = $request->input('email');
		$password = $request->input('password');
		
		return "Email= $email and Password = $password";
	}

}
