@extends('layout.master')
@section('title','Account')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                    <p><h2>Welcome {{ Auth::User()->firstname}} {{ Auth::User()->lastname}}</h2></p>
                    <p>
                        You can Always <a href="{{url('companies/create')}}">Register</a> your company here! or
                        <a href="{{url('companies')}}">Apply For Loan</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                   
                    @if($companies->count() >0)
                        This loans for a logged in person and the one who has created the company
                         <p>Here are <a href="{{url('loans')}}">Loan Customers:</a> at  </p>
                    
                    @else
                        <font color="red">Sorry You have no Company</font>
                    @endif

                    //check if the user has loans then display his or her loans

                    @if( $loans->count()>0)
                        <p>Here are <a href="{{url('account/my-loans')}}">My Loans:</a></p>
                    @else
                        <font color="red">Sorry You have no Loans</font>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
