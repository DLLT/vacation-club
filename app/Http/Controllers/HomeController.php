<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller {

    public function getHome(Request $request)
    {
        $user = $request->session()->get('user');
        $name = DB::table('user')->lists('email');
         
            
        return view('home', ['user' => $user, 'name'=> $name]);
    }
}
