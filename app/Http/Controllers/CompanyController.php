<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Company;

use Auth;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'min:10',
        ]);

        $company = new Company();
        $company->name = $request->input('name');
        $company->line_one= $request->input('line_one');
        $company->line_two = $request->input('line_two');
        $company->phone1 = $request->input('phone1');
        $company->phone2 = $request->input('phone2');
        $company->email = $request->input('email');
        $company->description = $request->input('description');
        $company->user_id = Auth::user()->id;

        $company->save();

        return redirect('companies');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
        if($company){
            return  view('companies.edit', compact('company'));
        }
        return redirect('companies');
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'description' => 'min:10',
        ]);

        $company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
        $company = new Company();
        $company->name = $request->input('name');
        $company->line_one= $request->input('line_one');
        $company->line_two = $request->input('line_two');
        $company->phone1 = $request->input('phone1');
        $company->phone2 = $request->input('phone2');
        $company->email = $request->input('email');
        $company->description = $request->input('description');
        $company->user_id = Auth::user()->id;       
        $company->save();

        return redirect('companies/' . $company->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::whereUserId(Auth::user()->id)->whereId($id)->first();
        
        $company->delete();

        return redirect('companies');
    }
}
