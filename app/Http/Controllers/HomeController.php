<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\User;
class HomeController extends Controller {

    public function getHome(Request $request)
    {
        $user = $request->session()->get('user');

        return view('home', ['user' => $user]);

    }
}
