@extends('layout.master')
@section('title','Last name')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Personal Details</h3>
				<form action="{{url('loanform/lastname')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="firstname">Last Name</label>
				  		<input type="text" class="form-control" placeholder="Last name" name="lastname" value="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection