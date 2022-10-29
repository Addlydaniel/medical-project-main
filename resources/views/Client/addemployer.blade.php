@extends('layout')

@section('content')
<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">
                    <!-- start page title -->
					<div class="row">
							<div class="col-10">
							<div class="page-title-box d-sm-flex align-items-center justify-content-between">
							<h4 class="mb-sm-0 font-size-18">Add Employer</h4>
							</div>
							</div>
					<div class="col-2">
					<a href="{{URL('/employerList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light">Back</button></a>
					</div>
					</div>

                        <!-- end page title -->
					@if ($errors->any())
					<div class="alert alert-warning">
					@foreach ($errors->all() as $error)

					<li>{{ $error }}</li>
					@endforeach	
					</div>
					@endif
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitEmployer/' )}}">
																@csrf
                                                                     <div class="row">                                                                      
																			
																			
																			<div class="col-lg-6">
																				<div class="mb-3">
																				<label for="basicpill-phoneno-input">Name of the Employer</label>
																				<select class="form-select"  name="EmployerName" id="EmployerName" required="">
																				<option  value="0" selected>Choose...</option>
																				@foreach($employers as $employers_data)

																				<option  value="{{$employers_data->id}}">{{$employers_data->EmployerName}}</option>

																				@endforeach
																				</select>
																				</div>
																			</div>
															
																			
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Address of the Employer</label>
																			<input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
																			<input type="text" class="form-control" id="EmployerAddress" name="EmployerAddress" placeholder="Address of the Employer">
																			</div>
																			</div>
                                                                    </div>
                                                                  
																	<div class="row">
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Type of Service</label>
																			<input type="text" class="form-control" id="EmployerService" placeholder="Type of Service" name="EmployerService">
																			</div>
																			</div>
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Designation</label>
																			<input type="text" class="form-control" id="EmployerDesignation" placeholder="Designation" name="EmployerDesignation" >
																			</div>
																			</div>
																	</div>
																	
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Work Since</label>
																		<input type="text" class="form-control" id="EmployerWorking" placeholder="Work Since" name="EmployerWorking" >
																		</div>
																		</div>
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Total Years of Experience</label>
																		<input type="text" class="form-control" id="EmployerExperience" placeholder="Total Years of Experience" name="EmployerExperience">
																		</div>
																		</div>
																	</div>
																
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">GST Number if Self Employed</label>
																		<input type="text" class="form-control" id="EmployerGST" placeholder="GST Number if Self Employed"name="EmployerGST" >
																		</div>
																		</div>
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">PAN of the Business</label>
																		<input type="text" class="form-control" id="EmployerPAN" placeholder="PAN of the Business"name="EmployerPAN" >
																		</div>
																		</div>
																	</div>
																
														
                                                               
                                                                    
                                                              <div>
                     <a href="{{URL('/employeerList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
                                            </div>
                                                        </form></div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-xl-2"></div>
                            <!-- end col -->

                          
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                       
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    
@endsection

