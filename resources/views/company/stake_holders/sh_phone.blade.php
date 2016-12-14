@extends('layout.master')
@section('title','SH phone-number')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Stake Holders</h3>
				<form action="{{url('company/stake_holders/sh_phone')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="phone-number">First Name of the stake holder</label>
				  		<input type="number" class="form-control" placeholder="Phone Number" name="sh_phone" value="" required="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection