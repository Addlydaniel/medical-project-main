

      @extends('layout')

@section('content')    

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Employer Details</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4"></h4>

                                        <div id="basic-example">
                                            <!-- Client Details -->
                                             <h3>Employer Details</h3>
                                            <section>
                                                
                                                    <form  class="form-horizontal" method="post" action="{{ URL('/updateEmployer/' )}}">
													 @csrf
													 
																		<div class="row">
                                                                       
													 <div class="col-lg-6">
														<div class="mb-3">
														<label for="formrow-firstname-input" class="form-label">Employer Name</label>

														<select class="form-select"  name="EmployerName" id="EmployerName" required="">
														<option  value="0" selected>Choose...</option>
														@foreach($employers as $employers_data)

														<option  value="{{$employers_data->id}}" {{($employer->EmployerName == $employers_data->id) ? 'selected' : ''}}>{{$employers_data->EmployerName}}</option>

														@endforeach
														</select>
														</div>
                                                        </div>
                                                                        <div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Address of the Employer</label>
																			<input type="hidden" class="form-control" id="basicpill-lastname-input" name="id" value="{{$id}}" placeholder="Address of the Employer" required="">
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="clientID" value="{{$employer->id}}" placeholder="Address of the Employer" required="">
																			<input type="text" class="form-control" id="EmployerAddress" name="EmployerAddress" value="{{$employer->EmployerAddress}}" placeholder="Address of the Employer">
																			</div>
																			</div>
                                                                    </div>
                                                    <div class="row">
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Type of Service</label>

																		   <input type="text" class="form-control" id="EmployerService" value="{{$employer->EmployerService}}" placeholder="Type of Service" name="EmployerService" >

																			</div>
																			</div>
                                                                       	<div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Designation</label>
                                                                                <input type="text" class="form-control" id="EmployerDesignation" value="{{$employer->EmployerDesignation}}" placeholder="Designation" name="EmployerDesignation" >
                                                                            </div>
                                                                        </div>
                                                                </div>

                                                     <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Work Since</label>
                                                                                <input type="text" class="form-control" id="EmployerWorking" value="{{$employer->EmployerWorking}}" placeholder="Work Since" name="EmployerWorking" >
                                                                            </div>
                                                                        </div>
														<div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Total Years of Experience</label>
                                                                                <input type="text" class="form-control" id="EmployerExperience" value="{{$employer->EmployerAddress}}" placeholder="Total Years of Experience" name="EmployerExperience" >
                                                                </div>  
                                                                </div>
                                                  																
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">GST Number if Self Employed</label>
                                                                                <input type="text" class="form-control" id="EmployerGST" value="{{$employer->EmployerGST}}" placeholder="GST Number if Self Employed"name="EmployerGST" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">PAN of the Business</label>
                                                                                <input type="text" class="form-control" id="EmployerPAN" value="{{$employer->EmployerPAN}}" placeholder="PAN of the Business"name="EmployerPAN" >
                                                                            </div>
                                                                        </div>
                                                                </div>                  
														
														
														
														<br>
														
														
													
													<div>
															
                     <a href="{{URL('/clientList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
                                            </div>
                                                </form>
												
                                            </section>

											
											
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                      
                        <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
            </div>
            <!-- end main content-->
@endsection