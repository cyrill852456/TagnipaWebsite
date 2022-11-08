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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function junkshop()
    {
        return view('home',["msg"=>"I am Junkshop Role"]);
    }
    public function Agent()
    {
        return view('home',["msg"=>"I am Agent Role"]);
    }
}
