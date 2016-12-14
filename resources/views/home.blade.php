@extends('layout.master')
@section('title','Account')

@section('content')

	@if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="container">
    	<div class="row">
    		<div class="col-md-12 col-lg-13">
    			<div class="panel panel-success">
    				<h2 class="panel-title">Company Informations</h2>
    				<div class="panel-body">
    					@if(isset($company))

                        <div class="table-responsive">
                            <div class="table table-hover">
                                <tbody>
                                    <tr>
                                        <th>Company Name</th>
                                        <td>{{ $company->company_name }}</td>
                                    </tr>

                                    <tr>
                                        <th>Company Address</th>
                                        <td>{{ $company->company_address }}</td>
                                    </tr>

                                    <tr>
                                        <th>Company Location</th>
                                        <td>{{ $company->compay_location</td>
                                    </tr>

                                    <tr>
                                        <th>Company E-mail address</th>
                                        <td>{{ $company->company_email</td>
                                    </tr>

                                    <tr>
                                        <th>Terms and Condtion</th>
                                        <td>{{ $company->company_terms</td>
                                    </tr>
                                </tbody>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-success">
                                    
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>
                        </div>




    					@else
                           <div class="jumbotron text-center">
                                <h2>You have not registered any company!</h2>

                                <p>
                                 <a href="company/compRegstry">Register Now!</a>
                                </p>    
                           </div>

                        @endif


                        <div class="row">
                            <div class="col-md-12">
                                <div class="jumbotron text-center">
                                    <h2>You have no Stake Holder Registered!</h2>
                                    </div>
                            </div>
                        </div>
    				</div>

    			</div>


    		</div>
    	</div>
	</div>




@endsection