@extends('layout.master')

@section('title', $company->name)

@section('content')

<div class="jumbotron">
	<div class="container text-center">

		<h3>{{ $company->name }}</h3>
		@if( ! Auth::guest())
			@if($company->ceo->id === Auth::user()->id)
				<a href="{{ url('companies/' . $company->id . '/edit') }}">Edit</a>
				{{-- TODO Add confirmation dialog --}}
				<form method="POST" action="{{ url('companies/' . $company->id) }}">
					{{ method_field('delete') }}
					{{ csrf_field() }}
					<button type="submit">Delete</button>
				</form>
			@endif		
		@endif
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Contacts:</h3>
				</div>
				<div class="panel-body">
					<p><strong>Address</strong>: {{ $company->line_one}}
					{{ $company->line_two}}</p>
					<p><strong>Phone</strong>: {{ $company->phone1}}
							or
					{{ $company->phone2}}</p>
					<p><strong>E-mail</strong>: {{ $company->email}}</p>
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">About</h3>
				</div>
				<div class="panel-body">
					{!! $company->description !!}
				</div>
			</div>	
			<div class="panel panel-default">
				<div class="panel-heading">
				</div>
				<div class="panel-body">
					<a href="{{ url('companies/'.$company->id.'/loans/apply') }}" class="btn btn-success btn-lg btn-block">Apply Loan</a>
				</div>
			</div>						
		</div>
		<div class="col-sm-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Organization Structure</h3>
				</div>
				<div class="panel-body">
					CEO: {{ $company->ceo->firstname }}  {{ $company->ceo->lastname }}
					STAKE HOLDRES:
				</div>
			</div>	
		</div>
	</div>
</div>

@endsection