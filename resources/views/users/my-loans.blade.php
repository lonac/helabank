@extends('layout.master')

@section('title', 'Companies')

@section('content')

<div class="container">
	<div class="row">

	<div class="well">
		<h2>My Loans</h2>

		@if($loans->count() > 0)

			<table class="table table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Customer</th>
						<th>Amount</th>
						<th>Company</th>
						<th>Date of application</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($loans as $loan)
						<tr>
							<td>{{ $loan->id }}</td>
							<td>{{ $loan->user->name }}</td>
							<td>{{ $loan->amount }}</td>
							<td>{{ $loan->company->name }}</td>
							<td>{{ $loan->created_at }}</td>
							<td>Pending</td>
						</tr>
					@endforeach
				</tbody>
			</table>

		@else

			Nothing here

		@endif
	</div>		

	</div>
</div>

@endsection