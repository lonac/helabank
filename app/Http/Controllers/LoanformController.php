<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanformController extends Controller
{
    //
    public function loanform1()
    {
    	return view('loanform.loanform1');
    }

    public function loan_app_reason()
    {
    	return view('loanform.loan_app_reason');
    }

    public function total_loan()
    {
    	return view('loanform.total_loan');
    }

    public function creditor()
    {
    	return view('loanform.creditor');
    }

    public function edu_background()
    {
    	return view('loanform.edu_background');
    }

    public function working_company()
    {
    	return view('loanform.working_company');
    }

    public function business_plan()
    {
    	return view('loanform.business_plan');
    }

}
