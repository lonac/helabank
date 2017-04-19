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
        //$company = Company::findOrFail($id);
        $user = Auth::user();
        $comp = $user->Company;
        $loans = $user->loans;
        //dd($comp);
        return view('home',compact('comp','loans','company','user'));
    }
}
