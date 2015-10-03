<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use app\User;
use app\House;


class HouseDetailsController extends Controller {

    public function getHome(Request $request)
    {
		$user = $request->session()->get('user');
		return $request[0];
			//if($request[0])
				//return "got house";
		
		//return view('house_details', ['user' => $user]);
    }
	
	public function displayDetails(Request $request)
	{
		$user = $request->session()->get('user');
		
	}
}
