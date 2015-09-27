<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;
use App\House;


class HouseController extends Controller {


    public function getHome(Request $request) 
    {
        $user = $request->session()->get('user');    

        return view('house', ['user' => $user]); 
    
    }


    public function getHouseRegister(Request $request)
    {   
        $user = $request->session()->get('user');

        return view('/house_register', ['user' => $user]);
        
    }
    
    
    public function getSuccess(Request $request)
    {
        $user = $request->session()->get('user');
		
        return view('/house_register_success', ['user' => $user]);
        
    }

    public function createHouse(Request $request)
    {
		$user = $request->session()->get('user');
        $house = new House;
	
		$house->userId = $user->id;
			
        $house->city = $request->city;
        $house->suburb = $request->suburb;
        $house->distcity = $request->distcity;
        $house->transport = $request->transport;
        $house->numrooms = $request->numrooms;
        $house->aircon = $request->aircon;
        $house->heating = $request->heating;
        $house->swimmingpool = $request->swimmingpool;
        $house->points = $request->points;
        $house->discount = $request->discount;
        $house->image = $request->image;

        if( $house->save() ) {
            
            return Redirect::to('house/house_register/house_register_success');
                
        } else {
            return "Failed";
        }
    }

}
