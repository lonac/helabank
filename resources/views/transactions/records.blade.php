@extends('layout.master')

@section('title', 'Transactions')

@section('content')

<div class="container">
	<div class="row">
		<h2>Transactions Records at {{ $company->name}}</h2>

		@if($transactions->count() > 0)

			@include('transactions.table')

		@else

			No transactions records so far!

		@endif		

	</div>
</div>

@endsection