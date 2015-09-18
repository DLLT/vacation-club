<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
<<<<<<< HEAD
use DB;

=======
use app\User;
>>>>>>> 5dcb610979288d9b16795e9c8a34c76068aced41
class HomeController extends Controller {

    public function getHome(Request $request)
    {
        $user = $request->session()->get('user');
        $name = DB::table('user')->lists('email');
         
            
        return view('home', ['user' => $user, 'name'=> $name]);
    }
}
