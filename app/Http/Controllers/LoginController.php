<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
		
            $result = DB::select(
                "SELECT email, password FROM user WHERE email = ? AND password = ?",
                [$email, $password]);

	    if($result == [])
            {   
        	return view("login_fail");
            }
            
            else
            {
                $request->session()->put('user', $result[0]);
                
                return Redirect::to('/');
            }   
        }

        public function logoutUser(Request $request)
        {
            $request->session()->flush();

            return Redirect::to('./');
        }
}
