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
                            <div class="col-10">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">View Client</h4>

                                    
									<div class="col-10">
                                    <!--<button type="button" data_id='{{$id}}' class="myModal_btn btn btn-primary waves-effect waves-light"
                                                    data-bs-toggle="modal" id="">Loan</button>
							<button type="button" data_id='{{$id}}' class="myModal1_btn btn btn-warning waves-effect waves-light"
                                                    data-bs-toggle="modal" id="">Select Loan</button>
							<a href="{{ URL('/addkyc/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">Kyc</button></a>
							<a href="{{ URL('/addemployer/'.$id )}}"> <button type="button" class="btn btn-danger waves-effect waves-light">Employer</button></a>
							<a href="{{ URL('/addbank/'.$id )}}"> <button type="button" class="btn btn-info waves-effect waves-light">Bank</button></a>
							<a href="{{ URL('/addnominee/'.$id )}}"> <button type="button" class="btn btn-warning waves-effect waves-light">Nominee</button></a>
							<a href="{{ URL('/addfamily/'.$id )}}"> <button type="button" class="btn btn-danger waves-effect waves-light">Family</button></a>
							<a href="{{ URL('/addverification/'.$id )}}"> <button type="button" class="btn btn-dark waves-effect waves-light">Verification</button></a>
							<a href="{{ URL('/addother/'.$id )}}"> <button type="button" class="btn btn-info waves-effect waves-light">Other</button></a>-->
							
							
               <a href="{{ URL('/addbasic/'.$id )}}"> <button type="button" class="btn btn-warning waves-effect waves-light">Basic Details</button></a>
               <a href="{{ URL('/addpersonal/'.$id )}}"> <button type="button" class="btn btn-primary waves-effect waves-light">Personal Details</button></a>
               <a href="{{ URL('/addfamily/'.$id )}}"> <button type="button" class="btn btn-danger waves-effect waves-light">Family Details</button></a>
               <a href="{{ URL('/addkyc/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">KYC Details</button></a>
               <a href="{{ URL('/addbank/'.$id )}}"> <button type="button" class="btn btn-info waves-effect waves-light">Bank Details</button></a>
               <a href="{{ URL('/addincome/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">Income Details</button></a>
                                    
                                  
    
                                            <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Loan
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="form-horizontal" method="post" action="{{ URL('/submitLoan/' )}}">
																@csrf
                                                                    <div class="row">
																		<div class="col-lg-6">
																			<div class="mb-3">
																			<label for="basicpill-email-input">Type of Scheme</label>
																			<select class="form-select"  name="schemeID" id="schemeID" required="">
                                                                                <option  value="0" selected>Choose...</option>
                                                                                @foreach($scheme as $scheme_data)
                                                        
                                                        <option  value="{{$scheme_data->id}}">{{$scheme_data->schemeName}}</option>
                                                    
                                                        @endforeach
                                                        
											                        	    </select>
																			</div>
																		</div>
                                                                       <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Loan Proposal Number</label>
                                                                                <input type="hidden" class="form-control"  name="userID" value="{{$id}}">
                                                                                <input type="text" class="form-control" id="kycfirstname-iqnput" name="SchemeLoanPurpose">
                                                                            </div>
                                                                        </div> 
                                                                       
																		
																		
                                                                    </div>
                                                    	           
                                                                    <div class="row">
                                                                      
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Purpose of the Loan</label>
                                                                                <input type="text" class="form-control" id="kycfirstname-input" name="SchemeLoanPurpose" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Total Loan Amount</label>
                                                                                <input type="text" class="form-control" id="totalAmount" name="totalAmount"readonly>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Rate of Interest</label>
                                                                                <input type="text" class="form-control" id="interest" name="interest" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Installment Mode</label>
                                                                                <input type="text" class="form-control" id="scheme_type_name" name="scheme_type_name" readonly>
                                                                </div>  
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Tenure</label>
                                                                                <input type="text" class="form-control" id="tenture" name="tenture" readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Monthly Payment</label>
                                                                                <input type="text" class="form-control" id="monthlyPaid" name="monthlyPaid" readonly>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Processing Fee</label>
                                                                                <input type="text" class="form-control" id="kycfirstname-input" name="ProcessingFee">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">GST</label>
                                                                                <input type="text" class="form-control" id="kycfirstname-input" name="GST">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">First Due Date</label>
                                                                                <input type="date" class="form-control" id="kycfirstname-input" name="firstDueDate">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Final Due Date</label>
                                                                                <input type="date" class="form-control" id="kycfirstname-input" name="finalDueDate">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                            <div class="modal-footer">
                                                            
                                                                <button  id="intermidiateBtn"
                                                                    class="btn btn-primary waves-effect waves-light">Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>

                   									</div>
											
											
                                            <!-- sample modal content -->
                                            <div id="myModal1" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Select Loan
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="form-horizontal" method="post" action="{{ URL('/submitLoan/' )}}">
																@csrf
                                                                    <div class="row">
																		<div class="col-lg-12">
																			<div class="mb-3">
																			<label for="basicpill-email-input">Select Loan</label>
																			<select class="form-select"  name="" id="" required="">
                                                                                <option  value="" selected>Select Loan</option>
                                                                                <option  value="Single Loan">Single Loan</option>
                                                                                <option  value="Group Loan">Group Loan</option>
                                                                                
                                                       
											                        	    </select>
																			</div>
																		</div>

																		
                                                                    </div>
                                                    	           
                                                                   
                                                                    
                                                            <div class="modal-footer">
                                                            
                                                                <button  id="intermidiateBtn"
                                                                    class="btn btn-primary waves-effect waves-light">Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>

                   									</div>
											
											
											
									
                   									</div>			
						

                   									</div>			
									
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

				
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Client Detail</h4><br>
                                        
								<table class="table table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">Client ID :</th>
                                        <td>{{$client->ClientID}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Branch :</th>
                                        <td>{{$client->ClientBranch}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sourcing Officer E.Code :</th>
                                        <td>{{$client->ClientECode}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Sourcing Officer E.Name :</th>
                                        <td>{{$client->ClientOfficerEName}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Applicant Name :</th>
                                        <td>{{$client->ClientName}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gender :</th>
                                        <td>{{$client->ClientGender}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Date of Birth :</th>
                                        <td>{{$client->ClientDOB}}</td>
                                    </tr>
                                     <tr>
                                        <th scope="row">Age :</th>
                                        <td>{{$client->ClientAge}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Marital Status :</th>
                                        <td>{{$client->ClientMaritalStatus}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mobile Number :</th>
                                        <td>{{$client->ClientMobile}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Telephone Number :</th>
                                        <td>{{$client->ClientPhoneNo}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alternative Mobile Number :</th>
                                        <td>{{$client->ClientAlterMobile}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">E- Mail ID :</th>
                                        <td>{{$client->ClientEmail}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Father's Name :</th>
                                        <td>{{$client->ClientFatherName}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Mother's Name :</th>
                                        <td>{{$client->ClientMotherName}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Spouse Name :</th>
                                        <td>{{$client->ClientPermanentAddress}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Permanent Address :</th>
                                        <td>{{$client->ClientResAddress}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Residential Address :</th>
                                        <td>{{$client->ClientSpouseName}}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                           <h4 class="card-title">Basic Detail</h4><br>       
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                            <th>Branch</th>
                            <th>Employee Name</th>
                            <th>Name of the Customer</th>
                            <th>Mobile Number</th>
                            <th>Aadhaar Number</th>   
                            <th>Action</th>
                           
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($basic_detail as $basic_data)
                            <tr>
                            <td>{{$basic_data->Branch}}</td>
                            <td>{{$basic_data->BasicEmployeeName}}</td>
                            <td>{{$basic_data->CustomerName}}</td>
                            <td>{{$basic_data->MobileNumber}}</td>
                            <td>{{$basic_data->AadhaarNumber}}</td>
                            
                            <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editbasic/'.$basic_data->id.'/'.$id )}}"title="Edit">Edit</a>
								 <a class="btn btn-success"href="{{ URL('/viewbank/'.$basic_data->id )}}"title="View">View</a>
                                   
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
						    <h4 class="card-title">Bank Detail</h4><br>       
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                            <th>Account Type</th>
                            <th>Account Number</th>
                            <th>Operating Mode</th>
                            <th>IFSC</th>
                            <th>MICR</th>
                            <th>Income Source</th>
                            <th>Highest Education</th>    
                            <th>Action</th>
                           
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($bank as $bank_data)
                            <tr>
                            <td>{{$bank_data->AccountType}}</td>
                            <td>{{$bank_data->AccountNumber}}</td>
                            <td>{{$bank_data->OperatingMode}}</td>
                            <td>{{$bank_data->AccountIFSC}}</td>
                            <td>{{$bank_data->AccountMICR}}</td>
                            <td>{{$bank_data->IncomeSource}}</td>
                            <td>{{$bank_data->HighestEducation}}</td>
                            
                            <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editbank/'.$bank_data->id.'/'.$id )}}"title="Edit">Edit</a>
								 <a class="btn btn-success"href="{{ URL('/viewbank/'.$bank_data->id )}}"title="View">View</a>
                                   
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
						
				
						
					<h4 class="card-title">Family Detail</h4><br>       
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                            <th>Members Name</th>
                            <th>Gender</th>
                            <th>DOB</th>
                            <th>Relation to the client</th>
                            <th>Occupation</th>
                            <th>Average Monthly Income</th>
                            <th>Highest Qualification</th>    
                            <th>Action</th>
                           
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($family as $family_data)
                            <tr>
                            <td>{{$family_data->MemberName}}</td>
                            <td>{{$family_data->Gender}}</td>
                            <td>{{$family_data->DOB}}</td>
                            <td>{{$family_data->ClientRelation}}</td>
                            <td>{{$family_data->Occupation}}</td>
                            <td>{{$family_data->AvgMonthlyIncome}}</td>
                            <td>{{$family_data->HighestQualification}}</td>
                            
                            
                            <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editfamily/'.$family_data->id.'/'.$id )}}"title="Edit">Edit</a>
								 <a class="btn btn-success"href="{{ URL('/viewfamily/'.$family_data->id )}}"title="View">View</a>
                                   
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
						<h4 class="card-title">Verification Detail</h4><br>       
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                            <th>Field Visit Date</th>
                            <th>Officer Name Visited</th>
                            <th>Officer E.Code</th>
                            <th>Report Submitted Date</th>
                            <th>Loan Approval Status</th>
                            <th>Approved/Rejection Date</th>
                            <th>Loan Manager Name</th>    
                            <th>Manager E.Code</th>    
                            <th>Action</th>
                           
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($verification as $verification_data)
                            <tr>
                            <td>{{$verification_data->fieldVisitDate}}</td>
                            <td>{{$verification_data->visitedOfficeName}}</td>
                            <td>{{$verification_data->OfficerECode}}</td>
                            <td>{{$verification_data->ReportSubmittedDate}}</td>
                            <td>{{$verification_data->LoanApprovalStatus}}</td>
                            <td>{{$verification_data->approvedDate}}</td>
                            <td>{{$verification_data->ManagerName}}</td>
                            <td>{{$verification_data->ManagerECode}}</td>
                           
                            
                            
                            <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editverification/'.$verification_data->id.'/'.$id )}}"title="Edit">Edit</a>
								 <a class="btn btn-success"href="{{ URL('/viewverification/'.$verification_data->id )}}"title="View">View</a>
                                   
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
						
					<h4 class="card-title">Other Detail</h4><br>       
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                            <th>Interest Cap Amount</th>
                            <th>Insurance Premium</th>
                            <th>Nominee Insurance Premium</th>
                            <th>Total Insurance Premium</th>
                            <th>Total Deductions on Previous Loan</th>
                            <th>Total Deductions</th>
                            <th>Net Amount to be disbursed in Account</th> 
                            <th>Action</th>
                           
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($otherdetail as $otherdetail_data)
                            <tr>
                            <td>{{$otherdetail_data->interestcap}}</td>
                            <td>{{$otherdetail_data->insurancePremium}}</td>
                            <td>{{$otherdetail_data->nomineeInsurancePremium}}</td>
                            <td>{{$otherdetail_data->totalInsurance}}</td>
                            <td>{{$otherdetail_data->totalDeductionOnprivious}}</td>
                            <td>{{$otherdetail_data->totalDeducation}}</td>
                            <td>{{$otherdetail_data->NetAmount}}</td>
                          
                           
                            
                            
                            <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editother/'.$otherdetail_data->id.'/'.$id )}}"title="Edit">Edit</a>
								 <a class="btn btn-success"href="{{ URL('/viewother/'.$otherdetail_data->id )}}"title="View">View</a>
                                   
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
						
							<h4 class="card-title">Kyc Detail</h4><br>       
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                            <th>UID No</th>
                            <th>Pan No</th>
                            <th>Voter ID</th>
                            <th>Ration ID</th>   
                            <th>Action</th>
                           
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($kyc as $kyc_data)
                            <tr>
                            <td>{{$kyc_data->UIDNo}}</td>
                            <td>{{$kyc_data->PanNo}}</td>
                            <td>{{$kyc_data->VoterID}}</td>
                            <td>{{$kyc_data->RationID}}</td>
                           
                            
                            <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editkyc/'.$kyc_data->id.'/'.$id )}}"title="Edit">Edit</a>
								 <a class="btn btn-success"href="{{ URL('/viewkyc/'.$kyc_data->id )}}"title="View">View</a>
                                   
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
						
						
												
					<h4 class="card-title">Employer Detail</h4><br>       
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                            <th>Employer Name</th>
                            <th>Servive Type</th>
                            <th>Designation</th>
                            <th>Work Since</th>
                            <th>Year of Experience</th>                             
                            <th>Action</th>
                           
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($employer as $employer_data)
                            <tr>
                            <td>{{$employer_data->EmployerName}}</td>
                            <td>{{$employer_data->EmployerService}}</td>
                            <td>{{$employer_data->EmployerDesignation}}</td>
                            <td>{{$employer_data->EmployerWorking}}</td>
                            <td>{{$employer_data->EmployerExperience}}</td>
                            
                            
                            <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editemployer/'.$employer_data->id.'/'.$id )}}"title="Edit">Edit</a>
								 <a class="btn btn-success"href="{{ URL('/viewemployer/'.$employer_data->id )}}"title="View">View</a>
                                   
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
						
						
						
						
                                    </div>
                                </div>
                            </div> <!-- end col -->
        
                            
                        </div> <!-- end row -->
        
        
                       

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
               
            </div>
            <!-- end main content-->

</div>
<!-- END layout-wrapper -->



</div> <!-- end slimscroll-menu-->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
       $('.myModal_btn').click(function(e){
          
           e.preventDefault();
      
          $("#applicantID3").val( $(this).attr('data_id'));
           $('#myModal').modal('show');
       })
    })

   
    $(function () {
    $("#schemeID").change(function () {
        var selected =  $("#schemeID").val();
      
                $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url:"{{url('viewLoanData')}}/"+selected,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                      
                        $.each(data, function(index, item) {
                           
                            $("#tenture").val(item.tenture);
                            $("#monthlyPaid").val(item.monthlyPaid);
                            $("#interest").val(item.interest);
                            $("#scheme_type_name").val(item.scheme_type_name);
                            $("#totalAmount").val(item.totalAmount);
                        });
                    },error:function(){ 
                        console.log(data);
                    }
                });
           
    });
});
</script>
<script>

$(document).ready(function(){
       $('.myModal1_btn').click(function(e){
          
           e.preventDefault();
      
          $("#applicantID3").val( $(this).attr('data_id'));
           $('#myModal1').modal('show');
       })
    })

   
   
</script>


@endsection