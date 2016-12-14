<div class="form-group">
		<div class="col-sm-3 col-md-12">
			<h3>Company location or head-quarter</h3>
				<form action="{{url('company/company_location')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="complocation">Company Location</label>
				  		<input type="text" class="form-control" placeholder="Organization/company location" name="complocation" value="" required="">
				  	</div>
				</form>
		</div>
</div>	
