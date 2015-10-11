<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;
use App\House;
use App\Let;
use App\Occupant;


class LetController extends Controller {
public function getHome(Request $request) 
    {
        $user = $request->session()->get('user'); 
	
	$houses = DB::select("SELECT * FROM house WHERE id = ?",
			[$request->id]);
			
			return view('let_register', ['user' => $user], compact('houses'));
    }
public function createLet(Request $request)
{
	$let = new Let;
	
	$let->houseId = $request->id;
	$let->startDate = $request->startDate;
	$let->endDate = $request->endDate;
	$let->minRate = $request->minRate;
	$let->available = 'available';
	
	if ( $let->save() ) {     
                   
            return Redirect::to('let/let_success');       
               
        } else {       
                   
            return "Failed";           
        }      
}

public function getSuccess(Request $request)       
    {          
       
        $user = $request->session()->get('user');      
               
       
        return view('/let_success', ['user' => $user]);        
    }      
	
public function createOccupancy(Request $request)
{
    	$user = $request->session()->get('user'); 
    	
	$occupant = new Occupant;
	$occupant->userId = $user->id;
	$occupant->letId = $request->id;
	
	

	$let = Let::where('id', '=', [$request->id])->update(['available' => 'pending']);
	
	
	
	if ( $occupant->save()) {      
				 
            return Redirect::to('occupant/occupant_success');       
               
        } else {       
                   
            return "Failed";           
        }      
		
}


public function getOccupantSuccess(Request $request)       
    {          
       
        $user = $request->session()->get('user');      
        
			
			
			
					
				return view('/occupant_success', ['user' => $user]);     

			
	
    } 

public function createOccupancy(Request $request)
{
		$user = $request->session()->get('user'); 
		$lets =  DB::select("SELECT * FROM let WHERE id = ?",
			[$request->id]);
		
}
	
}
