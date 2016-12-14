@extends('layout.master')
@section('title','Last Name')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Stake Holders</h3>
				<form action="{{url('company/stake_holders/lastname')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="lastname">Last Name of the stake holder</label>
				  		<input type="text" class="form-control" placeholder="Last Name" name="lastname" value="" required="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection