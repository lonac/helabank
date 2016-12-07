@extends('layout.master')
@section('title','total loan')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Amount of Money you want!</h3>
				<form action="{{url('loanform/total_loan')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="firstname">Amount in Number shillingi</label>
				  		<input type="number" class="form-control" placeholder="50,000/=" name="total_loan" value="" required="">
				  	</div>

				  	<div class="form-group">
				  		<label for="amount in word">Amount in words</label>
				  		<input type="text" class="form-control" placeholder="Fifty thousands only" name="amountWord" value="" required="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection