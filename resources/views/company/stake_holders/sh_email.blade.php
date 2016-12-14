@extends('layout.master')
@section('title','SH E-mail')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Stake Holders</h3>
				<form action="{{url('company/stake_holders/sh_email')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="Email">First Name of the stake holder</label>
				  		<input type="email" class="form-control" placeholder="E-mail Address" name="sh_email" value="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection