@extends('layout.master')
@section('title','contacts')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Personal Details</h3>
				<form action="{{url('loanform/address')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="address">Home Address</label>
				  		<input type="text" class="form-control" placeholder="address" name="address" value="" required="">
				  	</div>

				  	<div class="form-group">
				  		<label for="region">Region</label>
				  		<input type="text"  class="form-control" placeholder="Region" name="region" value="" required="">
				  	</div>

				  	<div class="form-group">
				  		<label for="region">District</label>
				  		<input type="text"  class="form-control" placeholder="Discrict" name="disctrict" value="" required="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection