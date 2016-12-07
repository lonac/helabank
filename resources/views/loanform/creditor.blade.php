@extends('layout.master')
@section('title','Creditor')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3 col-md-12">
			<h3>Is there any company or organization owns you money?</h3>
				<form action="{{url('loanform/creditor')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="creditor">Creditor</label>
				  		<input type="text" class="form-control" placeholder="Creditor name e.g. organization" name="creditor" value="">
				  	</div>

				  	<button type="submit" class="btn btn-primary">Next</button>

				</form>
		</div>
	</div>	

</div>
@endsection