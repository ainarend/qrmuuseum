<?php

namespace App\Http\Controllers;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['name' => \Auth::user()->name]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function user(\App\User $user)
    {
        return view('user')->withUser($user);
    }

    public function visits() {
        $visits = \DB::table('visited_expos')->get();
        return view('visits', ['visits' => $visits]);

    }

}
