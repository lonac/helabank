<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Auth;

class LoanController extends Controller
{
    public function index($id)
    {
    	$company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
    	$loans = $company->loans;
    	return view('loans.index', compact('loans'));
    }
}
