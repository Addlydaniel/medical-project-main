

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
                                    <h4 class="mb-sm-0 font-size-18">Basic Details</h4>

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
                                             <h3>Basic Details</h3>
                                            <section>
                                                
                                                   <form class="form-horizontal" method="post" action="{{ URL('/submitBasic/' )}}">
																@csrf
                                                                     <div class="row">                                                                      
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Branch</label>
																			<input type="text" class="form-control" id="Branch" name="Branch" value="{{$basic_detail->Branch}}" placeholder="Branch">
																			</div>
																			</div>
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Employee Name</label>
																			
																			<input type="hidden" class="form-control" id="basicpill-lastname-input" name="id" value="{{$id}}" placeholder="Employee Name" required="">
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="clientID" value="{{$basic_detail->id}}" placeholder="Employee Name" required="">
																			<input type="text" class="form-control" id="BasicEmployeeName" name="BasicEmployeeName" value="{{$basic_detail->BasicEmployeeName}}" placeholder="Employee Name">
																			</div>
																			</div>
                                                                    </div>
                                                                  
																		<div class="row">
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Name of the Customer as per record</label>
																			<input type="text" class="form-control" id="CustomerName" value="{{$basic_detail->CustomerName}}" placeholder="Name of the Customer as per record" name="CustomerName">
																			</div>
																			</div>
																		<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Customer ID</label>
																			<input type="text" class="form-control" id="CustomerID" value="{{$basic_detail->CustomerID}}" placeholder="Customer ID" name="CustomerID">
																			</div>
																			</div>

																		</div>
																	
																	<div class="row">
																		<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Date Enrolled</label>
																		<input type="date" class="form-control" id="DateEnrolled" value="{{$basic_detail->DateEnrolled}}" placeholder="Date Enrolled" name="DateEnrolled" >
																		</div>
																		</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Aadhaar Number</label>

																		<input type="text" class="form-control" id="AadhaarNumber" value="{{$basic_detail->AadhaarNumber}}" name="AadhaarNumber"  placeholder="Aadhaar Number">

																		</div>  
																	</div>
																	</div>
																	<div class="row">
																		
																	<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Mobile Number</label>

																		<input type="text" class="form-control" id="MobileNumber" name="MobileNumber" value="{{old('MobileNumber')}}" placeholder="Mobile Number" value="{{$basic_detail->MobileNumber}}" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" required="">

																		</div>  
																	</div>
																	</div>
																
                                                                
																
														
                                                               
                                                                    
                                                              <div>
                     <a href="{{URL('/viewClient')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
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