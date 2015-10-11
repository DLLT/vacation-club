<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;
use App\House;
use App\Let;
use App\Rating;

=======
use App\Http\Requests;
use App\Http\Controllers\Controller;

>>>>>>> origin/master
class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
    public function getHomeHouses(Request $request)
    {
        $user = $request->session()->get('user');
		
		$occupants = DB::table('occupant')
			->select('occupant.id', 'house.city', 'house.suburb', 'house.distcity', 'house.transport', 'house.numrooms', 'let.houseId', 'house.userId')
			->leftJoin('let', 'occupant.letId', '=', 'let.id')
			->leftJoin('house', 'let.houseId', '=', 'house.id')
			->where('occupant.userId', '=', [$user->id])
			->where('let.available', '=', 'renting', 'AND')
			->get();
		
			return view('view_house_rating', ['user' => $user],  compact('occupants'));
    }
	
	public function getHomeUsers(Request $request)
    {
        $user = $request->session()->get('user');
		
	
		
		$renters = DB::table('occupant')
		->select('occupant.id', 'occupant.userId', 'user.email', 'user.firstname', 'user.lastname')
		->leftJoin('let', 'occupant.letId', '=','let.id')
		->leftJoin('house', 'let.houseId', '=', 'house.id')
		->leftJoin('user', 'occupant.userId', '=', 'user.id')
		->where('house.userId', '=', [$user->id])
		//->where('let.available', '=', 'renting')
		->get();
			return view('view_user_rating', ['user' => $user], compact('renters'));
    }
	
	public function getRate(Request $request)
	{
		$user = $request->session()->get('user');
		
		$occupants = DB::table('house')
			->select('id', 'city', 'suburb', 'distcity', 'transport', 'numrooms', 'userId', 'aircon', 'heating', 'swimmingpool')
			->where('id', '=', [$request->houseId])
			->get();
		//return $request->houseId;
		return view('rate_house',['user' => $user], compact('occupants'));
		
	}
	
	public function getUserRate(Request $request)
	{
		$user = $request->session()->get('user');
		
		$occupants = DB::table('user')
			->select('id', 'email', 'firstname', 'lastname')
			->where('id', '=', [$request->userId])
			->get();
			
		return view('rate_user',['user' => $user], compact('occupants'));
		
	}
	
	public function createRate(Request $request)
	{
		$user = $request->session()->get('user');
		
		$rating = new Rating;
		$rating->houseId = $request->id;
		$rating->occupantId = $request->id;
		$rating->numRate = $request->houseRating;
		if( $rating->save() ) {
            
            return Redirect::to('rating/house_rating_success');
                
        } else {
            return "Failed";
        }
	}
	
	public function createUserRate(Request $request)
	{
		$user = $request->session()->get('user');
		
		$rating = new Rating;
		$rating->userId = $request->id;
		$rating->occupantId = $request->id;
		$rating->numRate = $request->houseRating;
		if( $rating->save() ) {
            
            return Redirect::to('rating/house_rating_success');
                
        } else {
            return "Failed";
        }
	}
	
	 public function getSuccess(Request $request)
    {   
        $user = $request->session()->get('user');

        return view('/house_rating_success', ['user' => $user]);
        
=======
    public function getHome(Request $request)
    {
        $user = $request->session()->get('user');
>>>>>>> origin/master
    }

}
