@extends('layout.master')

@section('title', $company->name)

@section('content')

<div class="container">
	<div class="row">
	
		<h2>You are applying loan in {{ $company->name }}</h2>

		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Loan Application Form</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('companies/'.$company->id.'/loans/apply') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="amount">Amount</label>
							<input type="number" name="amount" id="amount" class="form-control" placeholder="Amount" />
						</div>
						<div class="form-group">
							<label for="loantime">Loan Time</label>
							<input type="number" name="loantime" id="loantime" class="form-control" placeholder="write time in Days.eg. 30days">
						</div>
						<div class="form-group">
							<label for="phone">Phone Number</label>
							<input type="number" name="phone" id="phone" class="form-control" placeholder="Your Phone Number">
						</div>
						<div class="form-group">
							<label for="reason">Reason</label>
							<textarea name="reason" id="reason" class="form-control" rows="10" placeholder="Write something why you are applying"></textarea>
						</div>
						<div class="form-group">
							<label for="sponsor">Sponsor</label>
							<input type="text" name="sponsor" id="sponsor" class="form-control" rows="10" placeholder="Name of the Sponsor From this company">
						</div>
						<button type="submit" class="btn btn-success">Apply</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection