@extends('layout.master')
@section('title','First Name')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Stake Holders</h3>
				<form action="{{url('company/stake_holders/firstname')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="firstname">First Name of the stake holder</label>
				  		<input type="text" class="form-control" placeholder="First Name" name="firstname" value="" required="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection