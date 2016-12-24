<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Auth;

use App\Loan;

class LoanController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	
    public function index($id)
    {
    	$company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
    	$loans = $company->loans;
    	return view('loans.index', compact('loans'));
    }

    public function create($id)
    {
    	$company = Company::findOrFail($id);
    	return view('loans.create', compact('company'));
    }

    public function store(Request $request, $id)
    {
    	$company = Company::findOrFail($id);

    	// TODO Validate amount

    	$loan = new Loan();
    	$loan->user_id = Auth::user()->id;
    	$loan->company_id = $company->id;
    	$loan->amount = $request->input('amount');
        $loan->loantime= $request->input('loantime');
        $loan->reason = $request->input('reason');
        $loan->phone = $request->input('phone');
    	$loan->save();

    	return redirect('account/my-loans');
    }
}
