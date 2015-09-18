<?php
    
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\request;
use Iluminate\Support\Facads\Redirect;
use DB;
use App\User;

class AboutController extends Controller {

    public function gethome(Request $request)
    {   
        $user = $request->session()->get('user');

        return view('about', ['user' => $user]);
    }
}
