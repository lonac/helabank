@extends('layout.master')
@section('title','education')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>What's your education background?</h3>
				<form action="{{url('loanform/edu_background')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="edu_background">primary school, secondary schoolor university name?</label>
				  		<input type="text" class="form-control" placeholder="education institute name" name="edu_background" value="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection