@extends('layout.master')

@section('title', 'Companies')

@section('content')

<div class="container">
	<div class="row">
		<div class="jumbotron">
			{{-- Form to Search for Companies--}}
			{{-- <form action="{{url('/searchCompany')}}" method="POST" role="search">
			    {{ csrf_field() }}
			    <div class="input-group">
			        <input type="text" class="form-control" name="q"
			            placeholder="You can Search Companies Here"> <span class="input-group-btn">
			            <button type="submit" class="btn btn-default">
			                <span class="glyphicon glyphicon-search"></span>
			            </button>
			        </span>
			    </div>
				</form> --}}
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