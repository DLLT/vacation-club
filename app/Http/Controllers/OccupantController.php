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


class OccupantController extends Controller {
	 public function getHome(Request $request) 
    {
		$user = $request->session()->get('user'); 
		//$occupants = "SELECT * FROM occupant WHERE points < ? AND userId != ?"
		
		
		$occupants = DB::table('occupant')
			->select('occupant.id', 'occupant.created_at', 'occupant.letId', 'let.houseId', 'house.userId')
			->leftJoin('let', 'occupant.letId', '=', 'let.letId')
			->leftJoin('house', 'house.id', '=', 'let.houseId')
			->where('house.userId', '=', [$user->id])
			->get();
			
			
			$mytime = Carbon::now();
			$let = Let::where('updated_at', '=<', $mytime->toDateTimeString())->update(['available' => 'available']);
			
			//return "testing";
			return view('view_requests', ['user' => $user], compact('occupants'));
			
			
	}
	
	public function confirmOccupancy(Request $request)
	{
		$user = $request->session()->get('user');
		
		/**$occupants = DB::table('house')
		->leftJoin('let', 'house.id', '=', 'let.houseId')
		->leftJoin('occupant', 'let.Id)
		->where('house.userId', '=', [$user->id])
		->where('let.available', '=', 'pending');**/
		
		$let = Let::where('id', '=', $request->letId)->update(['available' => 'renting']);
		//return $request->letId;
		return view('confirm_occupancy', ['user' => $user]);
	}
	

}
