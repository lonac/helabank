@extends('layout.master')

@section('title', 'Companies')

@section('content')

<div class="container">
	<div class="row">
		<h2>Companies</h2>

		@if($companies->count() > 0)

			@foreach($companies as $company)

				<div class="col-sm-3">
					<div class="well">
						<h2>{{ $company->name }}</h2>
						<p>{{ $company->description }}</p>
						<p><strong>CEO</strong>: {{ $company->ceo->name }}</p>
						<a href="#">Read more &raquo;</a>
					</div>
				</div>

			@endforeach

		@else

			Nothing here

		@endif

	</div>
</div>

@endsection