<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Auth;

use App\Loan;

use App\StakeHolders;

class LoanController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}
	
    public function index($id)
    {
        $company = Company::findOrFail($id);
    	$loans = $company->loans;
    	return view('loans.show', compact('loans'));
    }

    public function create($id)
    {
    	$company = Company::findOrFail($id);
        $stakeholder = $company->stakeholders;

    	return view('loans.create', compact('company','stakeholder'));
    }

    public function store(Request $request, $id)
    {
    	
       /* $this->validate($request, [

       'terms' => 'required',
    ]);

        */

        $company = Company::findOrFail($id);
    	// TODO Validate amount

    	$loan = new Loan();
    	$loan->user_id = Auth::user()->id;
    	$loan->company_id = $company->id;
    	$loan->amount = $request->input('amount');
        $loan->loantime= $request->input('loantime');
        $loan->reason = $request->input('reason');
        $loan->phone = $request->input('phone');
        $loan->sponsor = $request->input('sponsor');
    	$loan->save();

    	return redirect('account/my-loans');
    }
}
