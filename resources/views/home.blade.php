@extends('layout.master')

@section('title','Account')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-success">
                <div class="panel-body">
                    <p><h2>Welcome {{ Auth::User()->firstname}} {{ Auth::User()->lastname}}</h2></p>
                    <p>
                        You can Always <a href="{{url('companies/create')}}">Register</a> your company here! or
                        <a href="{{url('companies')}}">Apply For Loan</a>
                    </p>
                </div>
            </div>
        </div>

        {{-- VIEW MY COMPANY --}}

        @if($comp!==null)
            <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company:</h3>
                    </div>
                    <div class="panel-body">
                        <h4> {{ $comp->name }}</h4>
                    </div>
                </div>
            </div>

            {{-- VIEW COMPANY LOANS --}}
            <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company's Loans:</h3>
                    </div>
                    <div class="panel-body">
                        {{-- The company should show the list all loans app-forms and other requests --}}
                        <a href="/companies/{{ $comp->id }}/loans/show">View</a>
                    </div>
                </div>
            </div>

            {{-- COMPANY TRANSACTIONS --}}
             <div class="col-md-6 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company's Transactions:</h3>
                    </div>
                    <div class="panel-body">
                        <a href="/companies/{{ $comp->id }}/transactions/show">View Company Transactions</a>    
                    </div>
                </div>
            </div>
        @endif


        {{-- VIEW MY LOANS --}}
        @if($loans->count()>0)
         <div class="col-md-6 col-md-offset-1">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">My Own Loans:</h3>
                </div>
                <div class="panel-body">
                    <a href="{{url('/account/my-loans')}}">View My Loans</a>    
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
