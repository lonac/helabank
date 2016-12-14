<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyLocationController extends Controller
{
    public function company_location()
    {
    	return view('company.company_location');
    }
}
