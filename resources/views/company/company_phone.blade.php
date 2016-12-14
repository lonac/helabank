	<div class="form-group">
		<div class="col-sm-3 col-md-12">
			<h3>Company Address</h3>
				<form action="{{url('company/company_phone')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="compphone">Company Phone-Number</label>
				  		<input type="number" class="form-control" placeholder="Organization/company  Phone-number" name="compNo" value="" required="">
				  	</div>

				</form>
		</div>
	</div>
