@extends('layout.master')
@section('title','Account')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                <p><h2>Welcome {{ Auth::User()->firstname}} {{ Auth::User()->lastname}}</h2></p>
                <p>
                    <h3>You can Always <a href="{{url('companies/create')}}">Register</a> your company here! or
                    <a href="{{url('companies')}}">Apply For Loan</a>
                </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
