<?php

namespace App\Http\Controllers;

use App\Company;

use Auth;

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
        //$company= Company::whereUserId(Auth::Company()->id)->whereId($id)->first();
        return view('home');
    }
}
