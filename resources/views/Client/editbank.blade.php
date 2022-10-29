

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
                                    <h4 class="mb-sm-0 font-size-18">Bank Details</h4>

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
                                             <h3>Bank Details</h3>
                                            <section>
                                                
                                                    <form  class="form-horizontal" method="post" action="{{ URL('/updateBank' )}}">
													 @csrf
													 <div class="row">
                                                       <div class="col-lg-6">
																			<div class="mb-3">
																			<label for="kycfirstname-input" class="form-label">Applicant Name as per Bank Record</label>
																			
																			<input type="text" class="form-control" id="ApplicantName" name="ApplicantName" value="{{$bank->ApplicantName}}" placeholder="Applicant Name as per Bank Record">
																			</div>
																			</div>
                                                        
													<div class="col-lg-6">
													<div class="mb-3">
													<label for="kycfirstname-input" class="form-label">Account Type</label>
													<select class="form-select" name="AccountType" value="{{$bank->AccountType}}">
													
													<option value="Savings" {{ $bank->AccountType == 'Savings' ? 'selected' : ''}}>Savings</option>
													<option value="Current" {{ $bank->AccountType == 'Current' ? 'selected' : ''}}>Current</option>
													
													</select>
													</div>
													</div>
													
                                                    </div>
                                                    <div class="row">
                                                       
														 <div class="col-lg-6">
													<div class="mb-3">
													<label for="basicpill-lastname-input">Account Number</label>
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="id" value="{{$id}}" placeholder="Account Number" required="">
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="clientID" value="{{$bank->id}}" placeholder="Account Number" required="">
													<input type="text" class="form-control" id="basicpill-lastname-input"  name="AccountNumber" value="{{$bank->AccountNumber}}" placeholder="Account Number" required="">
													</div>
													</div>
														 
														
													<div class="col-lg-6">
														<div class="mb-3">
														<label for="kycfirstname-input" class="form-label">Account Operating Mode</label>

														<select class="form-select" name="OperatingMode" value="{{$bank->OperatingMode}}"required="">
															<option value="Single" {{ $bank->OperatingMode == 'Single' ? 'selected' : ''}}>Single</option>
															<option value="Joint" {{ $bank->OperatingMode == 'Joint' ? 'selected' : ''}}>Joint</option>


														</select>
														</div>
													</div>

														
                                                    </div>

                                                    <div class="row">
                                                       
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">IFSC</label>
                                                                <input type="text" class="form-control" id="basicpill-email-input" name="AccountIFSC" placeholder="IFSC" value="{{$bank->AccountIFSC}}">
                                                            </div>
                                                        </div>
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">MICR</label>
                                                                <input type="text" class="form-control" id="basicpill-email-input" name="AccountMICR" placeholder="MICR" value="{{$bank->AccountMICR}}">
                                                            </div>
                                                        </div>
                                                    </div>
													<div class="row">
                                                     
															
														<div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Income Source</label>
                                                                                
																				<select class="form-select" name="IncomeSource" value="{{$bank->IncomeSource}}" required="">
																				
																				<option value="Self Employed" {{ $bank->IncomeSource == 'Self Employed' ? 'selected' : ''}}>Self Employed</option>
															<option value="Salaried" {{ $bank->IncomeSource == 'Salaried' ? 'selected' : ''}}>Salaried</option>
															<option value="Family Dependant" {{ $bank->IncomeSource == 'Family Dependant' ? 'selected' : ''}}>Family Dependant</option>

                                                                          
																				</select>
                                                                            </div>
                                                                        </div>
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Highest Education</label>
                                                                <input type="text" class="form-control" id="basicpill-email-input" name="HighestEducation" value="{{$bank->HighestEducation}}" placeholder="Highest Education" required="">
                                                            </div>
                                                        </div>
                                                        </div>
														<div class="row">
                                                       
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Bank Name</label>
                                                                <input type="text" class="form-control" id="basicpill-email-input" name="BankName" placeholder="Bank Name" value="{{$bank->BankName}}">
                                                            </div>
                                                        </div>
														<div class="col-lg-6">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Upload Account No</label>
																<input type="file"  id="photo" value="{{$bank->uploadAccount}}" name="uploadAccount" required="true" >
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