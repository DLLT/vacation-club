<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;
use App\House;

class HouseController extends Controller {

    public function getHouse(Request $request) 
    {
        $user = $request->session()->get('user');    

        return view('register_house', ['user' => $user]); 
    
    }
	
	public function createHouse(Request $request)
	{
		$house = new House;
		$house->city = $request->city;
		$house->suburb = $request->suburb;
		$house->distToCity = $request->distToCity;
		$house->availTrans = $request->availTrans;
		$house->noRooms = $request->noRooms;
		$house->airCon = $request->airCon;
		$house->swimming = $request->swimming;
		$house->points = $request->pointsNeeded;
		$house->discounts = $request->discounts;
		
		if($house->save())
		{
			return Redirect::to('registerHouse/success');
			
		}
		else
		{
			return "Failed";
		}
	}


   public function getSuccess()
    {
        return view('register_house_success', ['user' => $user]);
    }

   
}
