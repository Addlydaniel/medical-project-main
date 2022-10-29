@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Bank</h4>
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitBank/' )}}">
																@csrf
                                                                     <div class="row">                                                                      
																		<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Applicant Name as per Bank Record</label>
																			
																			<input type="text" class="form-control" id="ApplicantName" name="ApplicantName" placeholder="Applicant Name as per Bank Record">
																			</div>
																			</div>
																			<div class="col-lg-6">
																		<div class="mb-3">
																		<label for="kycfirstname-input" class="form-label">Account Type</label>
																		<select class="form-select" name="AccountType" required="">
																		<option selected>Select Account Type</option>
																		<option value="Savings Bank Account">Savings Bank Account</option>
																		<option value="Current Account">Current Account</option>
																		<option value="Loan Repayment Account">Loan Repayment Account</option>
																		<option value="NRI Account">NRI Account</option>

																		</select>
																		</div>
																		</div>
                                                                    </div>
                                                                  
																		<div class="row">
																			<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Account Number</label>
																			<input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
																			<input type="text" class="form-control" id="AccountNumber" placeholder="Account Number" name="AccountNumber">
																			</div>
																			</div>
																		<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Account Operating Nature</label>

																			<select class="form-select" name="OperatingMode" required="">
																			<option selected>Select</option>
																			<option value="Single Operating">Single Operating</option>
																			<option value="Joint Operating">Joint Operating</option>
																			</select>
																			</div>
																		</div>

																		</div>
																	
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">IFSC</label>
                                                                                <input type="text" class="form-control" id="AccountIFSC" placeholder="IFSC" name="AccountIFSC" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">MICR</label>
                                                                                <input type="text" class="form-control" id="AccountMICR" placeholder="MICR" name="AccountMICR" >
                                                                </div>  
                                                                </div>
																
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Income Source</label>
                                                                                
																				<select class="form-select" name="IncomeSource" required="">
																					  <option selected>Select Income Source</option>
																					  <option value="Self Employed">Self Employed</option>
																					  <option value="Salaried">Salaried</option>
																					  <option value="Family Dependant">Family Dependant</option>
                                                                          
																				</select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Highest Education</label>
                                                                                <input type="text" class="form-control" id="HighestEducation" placeholder="Highest Education"name="HighestEducation" >
                                                                            </div>
                                                                        </div>
                                                                </div>
																<div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Bank Name</label>
                                                                <input type="text" class="form-control" id="basicpill-email-input" name="BankName" placeholder="Bank Name" >
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

