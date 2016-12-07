@extends('layout.master')
@section('title','working place')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Your current working place</h3>
				<form action="{{url('loanform/workingplace')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="workingplace">Company or Organization Name</label>
				  		<input type="text" class="form-control" placeholder="Your current working place" name="workingplace" value="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection