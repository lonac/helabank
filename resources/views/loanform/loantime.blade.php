@extends('layout.master')
@section('title','Loan Time')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>For How long you want to take money??</h3>
				<form action="{{url('loanform/loantime')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="loantime">Loan Time</label>
				  		<input type="text" class="form-control" placeholder="For how long?" name="loantime" value="" required="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection