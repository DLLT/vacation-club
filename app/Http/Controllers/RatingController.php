<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use App\House;
use App\Let;
use App\Rating;


class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function getRate(Request $request)
    {
	$user = $request->session()->get('user');
		
	$occupants = DB::table('house')
	    ->select('occupant.id',  'let.houseId','house.city', 'house.suburb', 'house.distcity', 'house.transport', 'house.numrooms', 'house.userId', 'house.aircon', 'house.heating', 'house.swimmingpool')
	    ->leftJoin('let', 'house.id', '=', 'let.houseId')
		->leftJoin('occupant', 'let.id', '=', 'occupant.letId')
		->where('house.id', '=', [$request->houseId], 'AND')
		->where('let.available', '=', 'renting')
	    ->get();
	    
        return view('rate_house',['user' => $user], compact('occupants'));
		
	}


    public function getUserRate(Request $request)
    {
	$user = $request->session()->get('user');
		
	$occupants = DB::table('user')
	   ->select('occupant.id', 'occupant.userId', 'user.email', 'user.firstname', 'user.lastname')
			->leftJoin('occupant', 'user.id', '=', 'occupant.userId')
			->where('occupant.id', '=', [$request->id])
			->get();;
		
	return view('rate_user',['user' => $user], compact('occupants'));
		
	}


    public function createRate(Request $request)
    {
	$user = $request->session()->get('user');
		
	$rating = new Rating;
	$rating->houseId = $request->houseId;
	$rating->occupantId = $request->id;
	$rating->numRate = $request->houseRating;
        
        if( $rating->save() ) {
            
            return Redirect::to('rating/rating_success');
                
        } else {
            return "Failed";
        }

    }
	
	public function createUserRate(Request $request)
	{
		$user = $request->session()->get('user');
		
		$rating = new Rating;
		$rating->userId = $request->userId;
		$rating->occupantId = $request->id;
		$rating->numRate = $request->houseRating;
		if( $rating->save() ) {
            
            return Redirect::to('rating/rating_success');
                
        } else {
            return "Failed";
        }
	}
	
	 public function getSuccess(Request $request)
    {   
        $user = $request->session()->get('user');

        return view('/rating_success', ['user' => $user]);
	}
        
    public function getHome(Request $request)
    {
        $user = $request->session()->get('user');
		
		$occupants = DB::table('occupant')
	    ->select('occupant.id', 'house.city', 'house.suburb', 'house.distcity', 'house.transport', 'house.numrooms', 'let.houseId', 'house.userId')
	    ->leftJoin('let', 'occupant.letId', '=', 'let.id')
	    ->leftJoin('house', 'let.houseId', '=', 'house.id')
	    ->where('occupant.userId', '=', [$user->id], 'AND')
	    ->where('let.available', '=', 'renting', 'AND')
	    ->get();
		
		$renters = DB::table('occupant')
	    ->select('occupant.id', 'occupant.userId', 'user.email', 'user.firstname', 'user.lastname')
	    ->leftJoin('let', 'occupant.letId', '=','let.id')
	    ->leftJoin('house', 'let.houseId', '=', 'house.id')
	    ->leftJoin('user', 'occupant.userId', '=', 'user.id')
	    ->where('house.userId', '=', [$user->id], 'AND')
	    ->where('let.available', '=', 'renting', 'AND')
	    ->get();
		
		return view('view_rating', ['user' => $user],  compact('occupants', 'renters'));
    }

}
