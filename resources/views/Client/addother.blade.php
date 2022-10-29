@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Other Detail</h4>

                  

                </div>
              </div>
              <div class="col-2">
           
                                  <a href="{{URL('/otherList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                  
     <form class="form-horizontal" method="post" action="{{ URL('/submitOther/' )}}">
																@csrf
                                                                    
                                                                    
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Interest Cap Amount</label>
																				<input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
                                                                                <input type="text" class="form-control" id="interestcap" name="interestcap" placeholder="Interest Cap Amount">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Insurance Premium</label>
                                                                                <input type="text" class="form-control" id="insurancePremium" name="insurancePremium" placeholder="Insurance Premium">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
																	
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Nominee Insurance Premium</label>
                                                                                <input type="text" class="form-control" id="nomineeInsurancePremium" name="nomineeInsurancePremium" placeholder="Nominee Insurance Premium">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Total Insurance Premium</label>
                                                                                <input type="text" class="form-control" id="totalInsurance"  name="totalInsurance" placeholder="Total Insurance Premium">
                                                                </div>  
                                                                </div>
                                                                </div>
																
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Previous Loan Outstanding Prinicpal</label>
                                                                                <input type="text" class="form-control" id="outstandingPrincipal" name="outstandingPrincipal" placeholder="Previous Loan Outstanding Prinicpal">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Previous Loan Outstanding Interest</label>
                                                                                <input type="text" class="form-control" id="outstandingInterest" name="outstandingInterest" placeholder="Previous Loan Outstanding Interest">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Interest & Charges on Previous Loans</label>
                                                                                <input type="text" class="form-control" id="charges" name="charges" placeholder="Interest & Charges on Previous Loans">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                             <div class="mb-3">
                                                                                 <label for="Kycfirstname-input" class="form-label">Over Due Charges on Previous Loan</label>
                                                                                 <input type="text" class="form-control" id="overdue" name="overdue" placeholder="Over Due Charges on Previous Loan">
                                                                </div>
                                                                       
                                                                </div>
                                                                </div>
                                                               
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Clearing Charges Pending on Previous Loan</label>
                                                                                <input type="text" class="form-control" id="pendingPreviousLoan" name="pendingPreviousLoan" placeholder="Clearing Charges Pending on Previous Loan">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                             <div class="mb-3">
                                                                                 <label for="Kycfirstname-input" class="form-label">Total Deductions on Previous Loan</label>
                                                                                 <input type="text" class="form-control" id="totalDeductionOnprivious" name="totalDeductionOnprivious" placeholder="Total Deductions on Previous Loan">
                                                                </div>
                                                                       
                                                                </div>
                                                                </div>
                                                               
                                                               
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Total Deductions</label>
                                                                                <input type="text" class="form-control" id="totalDeducation" name="totalDeducation" placeholder="Total Deductions">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                             <div class="mb-3">
                                                                                 <label for="Kycfirstname-input" class="form-label">Net Amount to be disbursed in Account</label>
                                                                                 <input type="text" class="form-control" id="NetAmount" name="NetAmount" placeholder="Net Amount to be disbursed in Account">
                                                                </div>
                                                                       
                                                                </div>
                                                                </div>
                                                               


                                                                                 
														<div>
														<a href="{{URL('/bankList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>


														</div>
                                                        </form>
														</div>
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

