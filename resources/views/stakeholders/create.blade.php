@extends('layout.master')

@section('title', 'Stake Holders')

@section('content')

<div class="container">
	<div class="row">

		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Have Stake Holders?</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('stakeholders') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="firstname">First Name</label>
							<input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name" />
						</div>
						<div class="form-group">
							<label for="latstname">Last Name</label>
							<input type="text" name="firstname" id="lastname" class="form-control" placeholder="Last Name" />
						</div>
						<div class="form-group">
							<label for="position">Position</label>
							<input type="text" name="position" id="position" class="form-control" placeholder="Position" />
						</div>
						<button type="submit" class="btn btn-success">Save</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection