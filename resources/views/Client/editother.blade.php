

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
                                    <h4 class="mb-sm-0 font-size-18">Other Details</h4>

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
                                             <h3>Other Details</h3>
                                            <section>
                                                
                                                    <form  class="form-horizontal" method="post" action="{{ URL('/updateOther/' )}}">
													 @csrf
                                                                    
                                                                    
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Interest Cap Amount</label>
																				<input type="hidden" class="form-control" id="basicpill-lastname-input" name="id" value="{{$id}}" placeholder="Interest Cap Amount" required="">
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="clientID" value="{{$otherdetail->id}}" placeholder="Interest Cap Amount" required="">
                                                                                <input type="text" class="form-control" id="interestcap" value="{{$otherdetail->interestcap}}" name="interestcap" placeholder="Interest Cap Amount">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Insurance Premium</label>
                                                                                <input type="text" class="form-control" id="insurancePremium" value="{{$otherdetail->insurancePremium}}" name="insurancePremium" placeholder="Insurance Premium">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
																	
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Nominee Insurance Premium</label>
                                                                                <input type="text" class="form-control" id="nomineeInsurancePremium" value="{{$otherdetail->nomineeInsurancePremium}}" name="nomineeInsurancePremium" placeholder="Nominee Insurance Premium">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Total Insurance Premium</label>
                                                                                <input type="text" class="form-control" value="{{$otherdetail->totalInsurance}}" id="totalInsurance"  name="totalInsurance" placeholder="Total Insurance Premium">
                                                                </div>  
                                                                </div>
                                                                </div>
																
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Previous Loan Outstanding Prinicpal</label>
                                                                                <input type="text" class="form-control" id="outstandingPrincipal" value="{{$otherdetail->outstandingPrincipal}}" name="outstandingPrincipal" placeholder="Previous Loan Outstanding Prinicpal">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Previous Loan Outstanding Interest</label>
                                                                                <input type="text" value="{{$otherdetail->outstandingInterest}}" class="form-control" id="outstandingInterest" name="outstandingInterest" placeholder="Previous Loan Outstanding Interest">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Interest & Charges on Previous Loans</label>
                                                                                <input type="text" class="form-control" id="charges" name="charges" value="{{$otherdetail->charges}}" placeholder="Interest & Charges on Previous Loans">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                             <div class="mb-3">
                                                                                 <label for="Kycfirstname-input" class="form-label">Over Due Charges on Previous Loan</label>
                                                                                 <input type="text" class="form-control" value="{{$otherdetail->overdue}}" id="overdue" name="overdue" placeholder="Over Due Charges on Previous Loan">
                                                                </div>
                                                                       
                                                                </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Clearing Charges Pending on Previous Loan</label>
                                                                                <input type="text" class="form-control" id="pendingPreviousLoan" name="pendingPreviousLoan" value="{{$otherdetail->pendingPreviousLoan}}" placeholder="Clearing Charges Pending on Previous Loan">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                             <div class="mb-3">
                                                                                 <label for="Kycfirstname-input" class="form-label">Total Deductions on Previous Loan</label>
                                                                                 <input type="text" class="form-control" id="totalDeductionOnprivious" value="{{$otherdetail->totalDeductionOnprivious}}" name="totalDeductionOnprivious" placeholder="Total Deductions on Previous Loan">
                                                                </div>
                                                                       
                                                                </div>
                                                                </div>
                                                               
                                                               
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Total Deductions</label>
                                                                                <input type="text" class="form-control" value="{{$otherdetail->totalDeducation}}" id="totalDeducation" name="totalDeducation" placeholder="Total Deductions">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                             <div class="mb-3">
                                                                                 <label for="Kycfirstname-input" class="form-label">Net Amount to be disbursed in Account</label>
                                                                                 <input type="text" class="form-control" value="{{$otherdetail->NetAmount}}" id="NetAmount" name="NetAmount" placeholder="Net Amount to be disbursed in Account">
                                                                </div>
                                                                       
                                                                </div>
                                                                </div>
                                                               


                                                                                 
 <div>
                     <a href="{{URL('/otherList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
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