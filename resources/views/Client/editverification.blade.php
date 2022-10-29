

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
                                    <h4 class="mb-sm-0 font-size-18">Verification Details</h4>

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
                                             <h3>Verification Details</h3>
                                            <section>
                                                
                                                    <form  class="form-horizontal" method="post" action="{{ URL('/updateVerification/' )}}">
													 @csrf
													 
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Verification Field Visit Date</label>
                                                                                <input type="date" class="form-control" name="fieldVisitDate" id="fieldVisitDate" value="{{$verification->fieldVisitDate}}" placeholder="Verification Field Visit Date">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Verification Officer Name Visited</label>
                                                                                <input type="text" class="form-control" id="visitedOfficeName"  name="visitedOfficeName" value="{{$verification->visitedOfficeName}}" placeholder="Verification Officer Name Visited">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Verification Officer E.Code</label>
																				<input type="hidden" class="form-control" id="basicpill-lastname-input" name="id" value="{{$id}}" placeholder="Verification Officer E.Code" required="">
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="clientID" value="{{$verification->id}}" placeholder="Verification Officer E.Code" required="">
                                                                                <input type="text" class="form-control" id="OfficerECode"  name="OfficerECode" value="{{$verification->OfficerECode}}" placeholder="Verification Officer E.Code">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Verification Report Submitted Date</label>
                                                                                <input type="date" class="form-control" id="ReportSubmittedDate"  value="{{$verification->ReportSubmittedDate}}"  name="ReportSubmittedDate" placeholder="Verification Report Submitted Date">
                                                                </div>  
                                                                </div>
                                                                </div>

                                                     <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Loan Approval Status</label>
                                                                                <input type="text" class="form-control" id="LoanApprovalStatus" value="{{$verification->LoanApprovalStatus}}"   name="LoanApprovalStatus" placeholder="Loan Approval Status">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Approved/Rejection Date</label>
                                                                                <input type="date" class="form-control"  name="approvedDate" id="approvedDate" value="{{$verification->approvedDate}}" placeholder="Approved/Rejection Date">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                  <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Loan Manager Name</label>
                                                                                <input type="text" class="form-control"  name="ManagerName" id="ManagerName" value="{{$verification->ManagerName}}" placeholder="Loan Manager Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                             <div class="mb-3">
                                                                                 <label for="Kycfirstname-input" class="form-label">Loan Manager E.Code</label>
                                                                                 <input type="text" class="form-control"  name="ManagerECode" id="ManagerECode" value="{{$verification->ManagerECode}}" placeholder="Loan Manager E.code">
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