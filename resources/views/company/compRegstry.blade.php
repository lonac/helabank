@extends('layout.master')
@section('title','Company Registratiion')

@section('content')
<div class="container">
	<div class="rows">
		<div class="col-md-12">

			<form action="{{url('compRegstry')}}" method="POST" role="form" class="">

		         {{ csrf_field() }}

		         @include('company.company_name')

		         <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <button type="submit" class="btn btn-primary">Next</button>
                        </div>
                  </div>

			</form>

		</div>

	</div>

</div>

@endsection