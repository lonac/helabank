@extends('layout.master')
@section('title','business plan')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>If you intend to have money for Business Project please attach the business plan!</h3>
				<form action="{{url('loanform/business_plan')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="business plan">Business plan</label>
				  		<input type="file" name="business_plan">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection