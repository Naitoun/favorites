<?php

namespace App\Http\Controllers;

use App\Link;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Getting the user id from the authentification system
        $user_id = auth()->user('id');
        // Creating a new User instance using $user_id
        $user = User::find($user_id)->first();

//        $links = Link::orderBy('id', 'desc')->get();
        // Redirect to the home view with the links value
        return view('home', [
            'links' => $user->links,
        ]);
    }
}
