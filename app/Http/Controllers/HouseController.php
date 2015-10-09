<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;
use App\House;
use App\Let;
use Carbon\Carbon;


class HouseController extends Controller {


    public function getHome(Request $request) 
    {
        $user = $request->session()->get('user');    
        
		if($user)
		{
		$houses = DB::select(
			"SELECT * FROM house WHERE points < ? AND userId != ?",
			[$user->points, $user->id]);
		}
		else
		{
			$houses = DB::select(
			"SELECT * FROM house");
		}
      
		return view('house', ['user' => $user], compact('houses'));
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
	
	public function displayDetails(Request $request)
	{
		$user = $request->session()->get('user');
		
		$houses = DB::select("SELECT * FROM house WHERE id = ?",
			[$request->id]);
		return view('house_details', ['user' => $user], compact('houses'));
		
	}
	
	public function getUserHouse(Request $request)
	{
		        $user = $request->session()->get('user');
			$houses = DB::select("SELECT * FROM house WHERE userId = ?",
			[$user->id]);
		return view('user_houses', ['user' => $user], compact('houses'));
	}
	
	public function displayHouses(Request $request)
	{
		        $user = $request->session()->get('user');
			$houses = DB::select("SELECT * FROM house WHERE userId = ?",
			[$user->id]);
		return view('user_houses', ['user' => $user], compact('houses'));
	}
	
	public function displayLetHouses(Request $request)
	{
		
		$user = $request->session()->get('user');
			
		
		$mytime = Carbon::now();
		$let = Let::where('updated_at', '=<', $mytime->toDateTimeString())->update(['available' => 'available']);
	
			$houses = DB::table('let')
			->select('let.id', 'let.houseId', 'let.startdate', 'let.enddate', 'house.city', 'house.suburb', 'let.minrate')
			->leftJoin('house', 'let.houseId', '=', 'house.id')
			->where('house.userId', '!=', [$user->id], 'AND')
			->where('let.available', '!=', 'pending')
			->get();
		
		return view('view_houses', ['user' => $user], compact('houses'));	
			
		}
}
