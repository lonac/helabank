<div class="group">
		<div class="col-sm-3 col-md-12">
			<h3>Company Address</h3>
				<form action="{{url('company/company_email')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="compemail">Company Name</label>
				  		<input type="email" class="form-control" placeholder="Organization/company  E-mail" name="compemail" value="" required="">
				  	</div>
				</form>
		</div>
</div>	
