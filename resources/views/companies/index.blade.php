@extends('layout.master')

@section('title', 'Companies')

@section('content')

<div class="container">
	<div class="row">
		<div class="jumbotron">
		<h3>Here are Companies and Organizations</h3>
	</div>
		@if($companies->count() > 0)

			@foreach($companies as $company)

				<div class="col-sm-3">
					<div class="well">
						<h2>{{ $company->name }}</h2>
						<p>{{ $company->description }}</p>
						<p><strong>CEO</strong>: {{ $company->ceo->firstname }}  {{ $company->ceo->lastname }}</p>
						<div class="row">
							<h3>Company Contacts:</h3>
							<p><strong>Address</strong>: {{ $company->line_one}}
							{{ $company->line_two}}</p>
							<p><strong>Phone</strong>: {{ $company->phone1}}
								or
								{{ $company->phone2}}</p>
							<p><strong>E-mail</strong>: {{ $company->email}}</p>
						</div>
						<a href="{{ url('companies/' . $company->id) }}">Read more &raquo;</a>
					</div>
				</div>

			@endforeach

		@else

			Nothing here

		@endif

	</div>
</div>

@endsection