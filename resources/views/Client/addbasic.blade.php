@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Basic Detail</h4>

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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitBasic/' )}}">
																@csrf
                                                                     <div class="row">                                                                      
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Branch</label>
																			<input type="text" class="form-control" id="Branch" name="Branch" placeholder="Branch">
																			</div>
																			</div>
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Employee Name</label>
																			
																			<input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
																			<input type="text" class="form-control" id="BasicEmployeeName" name="BasicEmployeeName" placeholder="Employee Name">
																			</div>
																			</div>
                                                                    </div>
                                                                  
																		<div class="row">
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Name of the Customer as per record</label>
																			<input type="text" class="form-control" id="CustomerName" placeholder="Name of the Customer as per record" name="CustomerName">
																			</div>
																			</div>
																		<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Customer ID</label>
																			<input type="text" class="form-control" id="CustomerID" placeholder="Customer ID" name="CustomerID">
																			</div>
																			</div>

																		</div>
																	
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Date Enrolled</label>
																		<input type="date" class="form-control" id="DateEnrolled" placeholder="Date Enrolled" name="DateEnrolled" >
																		</div>
																		</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Aadhaar Number</label>

																		<input type="text" class="form-control" id="AadhaarNumber" name="AadhaarNumber"  placeholder="Aadhaar Number">

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

