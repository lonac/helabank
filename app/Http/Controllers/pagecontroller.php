<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagecontroller extends Controller
{
    //welcome
    public function welcome()
    {
    	return view('welcome');
    }

    //about
    public function about()
    {
        return view('about');
    }

    //contacts
    public function contacts()
    {
    	return view('contacts');
    }

    //companies
    public function companies()
    {
        return view('companies');
    }
}
