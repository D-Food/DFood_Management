<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\Restaurant;
use Image;
=======
>>>>>>> 70af7e244e68a61e88e2c15fa9cda150a86acb6d

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD

=======
        $this->middleware('auth');
>>>>>>> 70af7e244e68a61e88e2c15fa9cda150a86acb6d
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        
        $restaurants = Restaurant::all();
        // dd($restaurants);
        return view('home',compact(['restaurants']));
=======
        return view('home');
>>>>>>> 70af7e244e68a61e88e2c15fa9cda150a86acb6d
    }
}
