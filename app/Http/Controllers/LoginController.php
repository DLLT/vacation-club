<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class LoginController extends Controller {
	
	public function getHome()
	{
		return view("login");
	}

	public function loginUser(Request $request)
	{
		$email = $request->input('email');
		$password = $request->input('password');
		
		$result = DB::select("SELECT email, password FROM user WHERE email = ? AND password = ?", [$email, $password]);
		return $result;
	}

}
