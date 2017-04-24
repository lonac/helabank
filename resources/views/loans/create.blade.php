@extends('layout.master')

@section('title', $company->name)

@section('content')

<div class="container">
	<div class="row">
	
		<h2>You are applying loan at : {{ $company->name }}</h2>

		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Loan Application Form:</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('companies/'.$company->id.'/loans/apply') }}" >

						{{ csrf_field() }}

						<div class="form-group">
							<label for="amount">Amount</label>
							<input type="number" name="amount" id="amount" class="form-control" placeholder="Amount" />
						</div>
						<div class="form-group">
							<label for="LoanTime">Select Loan Time:(1month=30days)</label>
								<select class="form-control" name="loantime">
									<option value="1">1 Month</option>
									<option value="2">2 Months</option>
									<option value="3">3 Months</option>
								</select>
						</div>
						<div class="form-group">
							<label for="phone">Phone Number</label>
							<input type="number" name="phone" id="phone" class="form-control" placeholder="Your Phone Number">
						</div>
						<div class="form-group">
							<label for="reason">Reason</label>
							<textarea name="reason" id="reason" class="form-control" rows="10" placeholder="Write something why you are applying"></textarea>
						</div>

						@if($stakeholder->count()>0)
							<div class="form-group">
								<label for="sponsor">Sponsor</label>
								<select class="form-control" name="sponsor">
									@foreach ($stakeholder as $stake)
										<option value="{{$stake->firstname}}">{{$stake->firstname}}  {{$stake->laststname}}</option>
									@endforeach

								</select>
							</div>
						@endif
						<div class="form-group">
   							 <input type="checkbox" class="form-control" name="terms" value="{{ old('terms') }}" /> Agree with the <a href="#">Terms&Conditions:</a>
						</div>
						<button type="submit" class="btn btn-success">Apply</button>	 
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection