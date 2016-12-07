<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerAddressController extends Controller
{
    //
    public function address()
    {
    	return view('loanform.address');
    }
}
