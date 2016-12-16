@extends('layout.master')

@section('title', 'New Company')

@section('content')

<div class="container">
	<div class="row">
		
		<h2>New Company</h2>

		<div class="col-sm-6 col-sm-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">#</h3>
				</div>
				<div class="panel-body">
					
					<form method="POST" action="{{ url('companies') }}">

						{{ csrf_field() }}

						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" name="name" id="name" class="form-control" placeholder="Name here" />
						</div>
						<div class="form-group">
							<label for="description">About</label>
							<textarea name="description" id="description" class="form-control" rows="10" placeholder="Write something about your company"></textarea>
						</div>
						<button type="submit" class="btn btn-success">Create</button>
					</form>

				</div>
			</div>
		</div>		

	</div>
</div>

@endsection