

@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Verification</h4>

                  

                </div>
              </div>
              <div class="col-2">
           
                                  <a href="{{URL('/verificationList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitVerification/' )}}">
																@csrf
                                                                    
                                                                    
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Verification Field Visit Date</label>
                                                                                <input type="date" class="form-control" id="fieldVisitDate" name="fieldVisitDate" placeholder="Verification Field Visit Date">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Verification Officer Name Visited</label>
																				<input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
                                                                                <input type="text" class="form-control" id="visitedOfficeName" name="visitedOfficeName" placeholder="Verification Officer Name Visited">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
																	
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Verification Officer E.Code</label>
                                                                                <input type="text" class="form-control" id="OfficerECode" name="OfficerECode" placeholder="Verification Officer E.Code">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Verification Report Submitted Date</label>
                                                                                <input type="date" class="form-control" id="ReportSubmittedDate"  name="ReportSubmittedDate" placeholder="Verification Report Submitted Date">
                                                                </div>  
                                                                </div>
                                                                </div>
																
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Loan Approval Status</label>
                                                                                <input type="text" class="form-control" id="LoanApprovalStatus" name="LoanApprovalStatus" placeholder="Loan Approval Status">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Approved/Rejection Date</label>
                                                                                <input type="date" class="form-control" id="approvedDate" name="approvedDate" placeholder="Approved/Rejection Date">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Loan Manager Name</label>
                                                                                <input type="text" class="form-control" id="ManagerName" name="ManagerName" placeholder="Loan Manager Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                             <div class="mb-3">
                                                                                 <label for="Kycfirstname-input" class="form-label">Loan Manager E.Code</label>
                                                                                 <input type="text" class="form-control" id="ManagerECode" name="ManagerECode" placeholder="Loan Manager E.code">
                                                                </div>
                                                                       
                                                                </div>
                                                                </div>
                                                               


                                                                                 

                                                          <div>
                     <a href="{{URL('/verificationList')}}"> <button type="submit" class="btn btn-primary w-md">Submit</button></a>
                                        
                                                
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

