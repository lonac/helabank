<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Transaction;

use App\Company;

use Auth;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {     
       $company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
        $transactions = $company->transactions;
        return view('transactions.index', compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('transactions.form_records');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $company = Company::findOrFail($id);
        
        $transactions = new Transaction();
        $transactions->user_id = Auth::user()->id;
        $transactions->company_id = Auth::$company->id;
        $transactions->firstname = $request->input('firstname');
        $transactions->lastname = $request->input('lastname');
        $transactions->capital = $request->input('capital');
        $transactions->takeDate = $request->input('takeDate');
        $transactions->returnDate = $request->input('returnDate');
        $transactions->takeAmount = $request->input('takeAmount');
        $transactions->retAmount = $request->input('RetAmount');
        $transactions->totalAmount = $request->input('totalAmount');
        $transactions->transactionId = $request->input('transactionId');
        $transactions->descriptions = $request->input('descriptions');
        $transactions->user_id = Auth::user()->id;

        $transactions->save();

        return redirect('transactions/records');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $transactions = Transaction::whereUserId(Auth::user()->id)->whereId($id)->first();
        
        $transactions->delete();

        return redirect('transactions');
    }
}
