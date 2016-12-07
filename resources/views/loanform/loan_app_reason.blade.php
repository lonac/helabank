@extends('layout.master')
@section('title','Loan app reason')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>What is the reason for loan application?</h3>
				<form action="{{url('loanform/loan_app_reason')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="firstname">Short description</label>
				  		<textarea placeholder="write short description in here!" class="form-control" rows="5"></textarea>
					  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection