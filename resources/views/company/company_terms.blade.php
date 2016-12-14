<div class="form-group">
		<div class="col-sm-3 col-md-12">
			<h3>terms and condition.</h3>
				<form action="{{url('company.company_terms')}}" method="POST" role="form">

				  {{ csrf_field() }}

				  	<div class="form-group">
				  		<label for="terms">Attach file containing terms and condition from prepared folder</label>
				  		<input type="file" class="form-control"  name="terms">
				  	</div>
				</form>
		</div>
</div>	