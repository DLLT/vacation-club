<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use app\User;
use app\House;


class HomeController extends Controller {

    public function getHome(Request $request)
    {
        $user = $request->session()->get('user');
		            
					
					$houses = DB::select(
                "SELECT * FROM house");
                
            if($houses == [])
            {   
				return view('home', ['user' => $user])
			}
			
			  
        return view('home', ['user' => $user], compact('houses'));
    }
}
