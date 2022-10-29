@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Personal Detail</h4>

                  <div class="col-10">
               <a href="{{ URL('/addbasic/'.$id )}}"> <button type="button" class="btn btn-warning waves-effect waves-light">Basic Details</button></a>
               <a href="{{ URL('/addpersonal/'.$id )}}"> <button type="button" class="btn btn-primary waves-effect waves-light">Personal Details</button></a>
               <a href="{{ URL('/addfamily/'.$id )}}"> <button type="button" class="btn btn-danger waves-effect waves-light">Family Details</button></a>
               <a href="{{ URL('/addkyc/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">KYC Details</button></a>
               <a href="{{ URL('/addbank/'.$id )}}"> <button type="button" class="btn btn-info waves-effect waves-light">Bank Details</button></a>
               <a href="{{ URL('/addincome/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">Income Details</button></a>
                                    
                  

                </div>
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
                                  

                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ URL('/submitPersonal/' )}}">
																@csrf
                                                                     <div class="row">                                                                      
																			<div class="col-lg-12">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Name of the Customer as per record</label>
																			<input type="text" class="form-control" id="CustomerName" name="CustomerName" placeholder="Name of the Customer as per record">
																			</div>
																			</div>
																	</div>
																	<div class="row"> 
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Date of Birth</label>
																			<input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
																			<input type="date" class="form-control" id="DOB" name="DOB" placeholder="Date of Birth">
																			</div>
																			</div>
																			 <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">DOB Upload</label>
                                                                                <input type="file"  id="photo" name="dob_upload" required="true" >
                                                                            </div>
                                                                    </div>
                                                                    </div>
                                                                  
																		<div class="row">
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Age</label>
																			<input type="text" class="form-control" id="CustomerAge" placeholder="Age" name="CustomerAge">
																			</div>
																			</div>
																		<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Gender</label>
																			<input type="text" class="form-control" id="CustomerGender" placeholder="Gender" name="CustomerGender">
																			</div>
																			</div>

																		</div>
																	
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Religion</label>
																		<input type="text" class="form-control" id="CustomerReligion" placeholder="Religion" name="CustomerReligion" >
																		</div>
																		</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Caste</label>

																		<input type="text" class="form-control" id="CustomerCaste" name="CustomerCaste"  placeholder="Caste">

																		</div>  
																	</div>
																	</div>
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Father  Name</label>
																		<input type="text" class="form-control" id="FatherName" placeholder="Father Name" name="FatherName" >
																		</div>
																		</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Mother Name</label>

																		<input type="text" class="form-control" id="MotherName" name="MotherName"  placeholder="Mother Name">

																		</div>  
																	</div>
																	</div>
										
																	<div class="row">
																		<div class="col-lg-12">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Spouse Name</label>
																		<input type="text" class="form-control" id="SpouseName" placeholder="Spouse Name" name="SpouseName" >
																		</div>
																		</div>
																	
																	</div>
										
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Mobile Number</label>

																		<input type="text" class="form-control" id="MobileNumber" name="MobileNumber" value="{{old('MobileNumber')}}" placeholder="Mobile Number" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" required="">

																		</div>  
																	</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Alternative Mobile Number</label>

																		<input type="text" class="form-control" id="AltMobileNumber" name="AltMobileNumber" value="{{old('AltMobileNumber')}}" placeholder="Alternative Mobile Number" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" required="">

																		</div>  
																	</div>
																	</div>
												
										
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Residential Address</label>

																		<input type="text" class="form-control" id="ResidentialAddress" name="ResidentialAddress" placeholder="Residential Address" required="">

																		</div>  
																	</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Permanent Address</label>

																		<input type="text" class="form-control" id="PermanentAddress" name="PermanentAddress"  placeholder="PermanentAddress">

																		</div>  
																	</div>
																	</div>
												
										
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Mail ID</label>

																		<input type="text" class="form-control" id="MailID" name="MailID"  placeholder="Mail ID"  required="">

																		</div>  
																	</div>
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Marital Status</label>
														<select class="form-select" name="MaritalStatus" required="">
														<option selected>Select Marital Status</option>
														<option value="Unmarried">Unmarried</option>
														<option value="Married">Married</option>
														<option value="Divorced">Divorced</option>
														<option value="Single">Single</option>
														<option value="Widow">Widow</option>
														<option value="Destitute">Destitute</option>

														</select>
														</div>
														</div>
																	</div>
																
                                                                
																
														
                                                               
                                                                    
                                                              <div>
                     <a href="{{URL('/bankList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
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

