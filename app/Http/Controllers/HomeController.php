<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

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
        $user_id = auth()->user()->id;

        // Check for correct User
        if(auth()->user()->id !== $user_id) {
            return redirect('/')->with('error','Unauthorized Access.');
        }

        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts);
    }
}
