<div class="form-group">
		<div class="col-sm-3 col-md-12">
			<h3>Company, group or organization Name</h3>
				<form action="{{url('company/company_name')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="compname">Company Name</label>
				  		<input type="text" class="form-control" placeholder="Organization/company name" name="compname" value="" required="">
				  	</div>

				</form>
		</div>
</div>