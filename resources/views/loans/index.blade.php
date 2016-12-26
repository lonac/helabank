@extends('layout.master')

@section('title', 'Companies')

@section('content')

<div class="container">
	<div class="row">
		<h2>All Loans</h2>

		@if($loans->count() > 0)

		@include('loans._table')

		@else

			There is no loan so far!

		@endif		

	</div>
</div>

@endsection