<div class="form-group">
		<div class="col-sm-3 col-md-12">
			<h3>Company Address</h3>
				<form action="{{url('company/company_address')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="compaddress">Company Name</label>
				  		<input type="text" class="form-control" placeholder="Organization/company " name="complocation" value="" required="">
				  	</div>
				</form>
		</div>
</div>	