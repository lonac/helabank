<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class UserController extends Controller
{
    public function myLoans()
    {
    	$user = Auth::user();
    	$loans = $user->loans;
    	return view('users.my-loans', compact('loans'));
    }
}
