@extends('layout.master')

@section('title','Search companies')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
       
                @if($comp->count() >0 )

                	@foreach($comp as $company)
                		{{ $company->name }}
                	@endforeach

                @else
                <h3>
                     <font color="red">Not Found!</font>
                    <a href="{{url('companies')}}">Go Back??</a>
                </h3>

                 @endif

            </div>
        </div>
    </div>
</div>
@endsection
