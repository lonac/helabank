<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerNamesController extends Controller
{
    //
    public function firstname()
    {
    	return view('loanform.firstname');
    }

    public function lastname()
    {
    	return view('loanform.lastname');
    }
}
