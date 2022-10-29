@extends('layout')

@section('content')
<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Group Loan</h4>

                  

                </div>
              </div>
              <div class="col-4">
           
                                  <a href="{{URL('/groupList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitGroupList/' )}}">
                                   @csrf
                                            
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Loan Proposal Number</label>
                                             
                                                <input type="text" class="form-control" id="LoanProposalNo" name="LoanProposalNo"  value="{{old('LoanProposalNo')}}" placeholder="Loan Proposal Name" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Loan Amount Applied</label>
                                             
                                                <input type="date" class="form-control" id="LoanApplied" name="LoanApplied"  value="{{old('LoanApplied')}}" placeholder="Loan Amount Applied" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Applied Date</label>
                                             
                                                <input type="text" class="form-control" id="LoanAppliedDate" name="LoanAppliedDate" value="{{old('LoanAppliedDate')}}" placeholder="Applied Date" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Purpose of the Loan</label>
                                             
                                                <input type="text" class="form-control" id="LoanPurpose" name="LoanPurpose" value="{{old('LoanPurpose')}}" placeholder="Purpose of the Loan" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Verification Field Visit Date</label>
                                             
                                                <input type="text" class="form-control" id="FieldVisitDate" name="FieldVisitDate" value="{{old('FieldVisitDate')}}" placeholder="Verification Field Visit Date" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Verification Officer Name Visited</label>
                                             
                                                <input type="text" class="form-control" id="VisitedOfficerName" name="VisitedOfficerName" value="{{old('VisitedOfficerName')}}" placeholder="Verification Officer Name Visited" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Verification Officer E.Code</label>
                                             
                                                <input type="text" class="form-control" id="OfficerECode" name="OfficerECode" value="{{old('OfficerECode')}}" placeholder="Verification Officer E.Code" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Verfication Report Submitted Date</label>
                                             
                                                <input type="text" class="form-control" id="ReportSubmitDate" name="ReportSubmitDate" value="{{old('ReportSubmitDate')}}" placeholder="Verfication Report Submitted Date" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Loan Approval Status</label>
                                             
                                                <input type="text" class="form-control" id="LoanApprovalStatus" name="LoanApprovalStatus" value="{{old('LoanApprovalStatus')}}" placeholder="Loan Approval Status" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Approved/Rejection Date</label>
                                             
                                                <input type="text" class="form-control" id="ApprovalDate" name="ApprovalDate" value="{{old('ApprovalDate')}}" placeholder="Approved/Rejection Date" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Loan Amount Approved</label>
                                             
                                                <input type="text" class="form-control" id="AmountApproved" name="AmountApproved" value="{{old('AmountApproved')}}" placeholder="Loan Amount Approved" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Approved Tenure</label>
                                             
                                                <input type="text" class="form-control" id="ApprovedTenure" name="ApprovedTenure" value="{{old('ApprovedTenure')}}" placeholder="Approved Tenure" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Processing Fee</label>
                                             
                                                <input type="text" class="form-control" id="ProcessingFee" name="ProcessingFee" value="{{old('ProcessingFee')}}" placeholder="Processing Fee" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">GST</label>
                                             
                                                <input type="text" class="form-control" id="GST" name="GST" value="{{old('GST')}}" placeholder="GST" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Processing Fee</label>
                                             
                                                <input type="text" class="form-control" id="ProcessingFee" name="ProcessingFee" value="{{old('ProcessingFee')}}" placeholder="Processing Fee" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Total</label>
                                             
                                                <input type="text" class="form-control" id="Total" name="Total" value="{{old('Total')}}" placeholder="Total" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Interest Cap Amount</label>
                                             
                                                <input type="text" class="form-control" id="CapAmount" name="CapAmount" value="{{old('CapAmount')}}" placeholder="Interest Cap Amount" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Insurance Premium</label>
                                             
                                                <input type="text" class="form-control" id="InsurancePremium" name="InsurancePremium" value="{{old('InsurancePremium')}}" placeholder="Insurance Premium" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Nominee Insurance Premium</label>
                                             
                                                <input type="text" class="form-control" id="NomineeInsurancePremium" name="NomineeInsurancePremium" value="{{old('NomineeInsurancePremium')}}" placeholder="Nominee Insurance Premium" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Total Insurance Premium</label>
                                             
                                                <input type="text" class="form-control" id="TotalPremium" name="TotalPremium" value="{{old('TotalPremium')}}" placeholder="Total Insurance Premium" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Previous Loan Outstanding Prinicpal</label>
                                             
                                                <input type="text" class="form-control" id="PreviousOutstandingPrincipal" name="PreviousOutstandingPrincipal" value="{{old('PreviousOutstandingPrincipal')}}" placeholder="Previous Loan Outstanding Prinicpal" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Previous Loan Outstanding Interest</label>
                                             
                                                <input type="text" class="form-control" id="PreviousOutstandingInterest" name="PreviousOutstandingInterest" value="{{old('PreviousOutstandingInterest')}}" placeholder="Previous Loan Outstanding Interest" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Interest & Charges on Previous Loans</label>
                                             
                                                <input type="text" class="form-control" id="Charges" name="Charges" value="{{old('Charges')}}" placeholder="Interest & Charges on Previous Loans" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Over Due Charges on Previous Loan</label>
                                             
                                                <input type="text" class="form-control" id="Overdue" name="Overdue" value="{{old('Overdue')}}" placeholder="Over Due Charges on Previous Loan" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Clearing Charges Pending on Previous Loan</label>
                                             
                                                <input type="text" class="form-control" id="PreviousLoanPending" name="PreviousLoanPending" value="{{old('PreviousLoanPending')}}" placeholder="Clearing Charges Pending on Previous Loan" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Total Deductions on Previous Loan</label>
                                             
                                                <input type="text" class="form-control" id="PreviousTotalDeduction" name="PreviousTotalDeduction" value="{{old('PreviousTotalDeduction')}}" placeholder="Total Deductions on Previous Loan" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Total Deductions</label>
                                             
                                                <input type="text" class="form-control" id="TotalDeduction" name="TotalDeduction" value="{{old('TotalDeduction')}}" placeholder="Total Deductions" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Net Amount to be disbursed in Account</label>
                                             
                                                <input type="text" class="form-control" id="NetAmount" name="NetAmount" value="{{old('NetAmount')}}" placeholder="Net Amount to be disbursed in Account">
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Rate of Interest</label>
                                             
                                                <input type="text" class="form-control" id="ROI" name="ROI" value="{{old('ROI')}}" placeholder="Rate of Interest" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Installment Mode</label>
                                             
                                                <input type="text" class="form-control" id="InstallmentMode" name="InstallmentMode" value="{{old('InstallmentMode')}}" placeholder="Installment Mode" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Intallment Amount</label>
                                             
                                                <input type="text" class="form-control" id="InstallmentAmount" name="InstallmentAmount" value="{{old('InstallmentAmount')}}" placeholder="Intallment Amount" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Disbursal Date</label>
                                             
                                                <input type="text" class="form-control" id="DisbursalDate" name="DisbursalDate" value="{{old('DisbursalDate')}}" placeholder="Disbursal Date" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">First Installment Starts on</label>
                                             
                                                <input type="text" class="form-control" id="InstallmentStarts" name="InstallmentStarts" value="{{old('InstallmentStarts')}}" placeholder="First Installment Starts on" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Final Installment</label>
                                             
                                                <input type="text" class="form-control" id="FinalInstallment" name="FinalInstallment" value="{{old('FinalInstallment')}}" placeholder="Final Installment" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Loan Officer Name</label>
                                             
                                                <input type="text" class="form-control" id="LoanOfficerName" name="LoanOfficerName" value="{{old('LoanOfficerName')}}" placeholder="Loan Officer Name" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Loan Officer E.Code</label>
                                             
                                                <input type="text" class="form-control" id="LoanOfficerECode" name="LoanOfficerECode" value="{{old('LoanOfficerECode')}}" placeholder="Loan Officer E.Code" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Installment Repayment Mode</label>
                                             
                                                <input type="text" class="form-control" id="RepaymentMode" name="RepaymentMode" value="{{old('RepaymentMode')}}" placeholder="Installment Repayment Mode" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Number of PDC Submitted</label>
                                             
                                                <input type="text" class="form-control" id="PDC_Submited" name="PDC_Submited" value="{{old('PDC_Submited')}}" placeholder="Number of PDC Submitted" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">PDC Numbers</label>
                                             
                                                <input type="text" class="form-control" id="PDC_No" name="PDC_No" value="{{old('PDC_No')}}" placeholder="PDC Numbers" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">NACH Reference Number</label>
                                             
                                                <input type="text" class="form-control" id="NACH_Refno" name="NACH_Refno" value="{{old('NACH_Refno')}}" placeholder="NACH Reference Number" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Loan Manager Name</label>
                                             
                                                <input type="text" class="form-control" id="ManagerName" name="ManagerName" value="{{old('ManagerName')}}" placeholder="Loan Manager Name" >
                                            </div>
											 
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Loan Manager E.Code</label>
                                             
                                                <input type="text" class="form-control" id="ManagerECode" name="ManagerECode" value="{{old('ManagerECode')}}" placeholder="Loan Manager E.Code" >
                                            </div>
											 
											
                                           
										
                                        <br>
                                            
                                            
                                            <div>
                     <a href="{{URL('/teamLoan')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
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
<script>
$(document).ready(function(){
   $('.myModal_btn3').click(function(e){
       e.preventDefault();
       $("#schemeID").val( $(this).attr('data_id'));
           var selected= $(this).attr('data_id');
          
            $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url:"{{url('addTeamloan')}}/"+selected,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                    
                        $.each(data, function(index, item) {
                           //clears container for new data
                        $.each(data, function(i, item) {
                            $("#schemeName").val(item.name);

                    });
                           
                        });
                    },error:function(){ 
                        console.log(data);
                    }
                });
               
                 $('#myModal3').modal('show');
        });  
})
$('#close').click(function(e){
    e.preventDefault();
window.location.reload();
});
</script>
    
@endsection

