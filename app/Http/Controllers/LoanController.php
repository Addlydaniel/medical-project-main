<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use App\Models\Scheme;
use App\Models\SchemeType;
use App\Models\Loan;
use App\Models\DB;
use App\Models\GroupLoan;
use App\Models\District;
use App\Models\Employee;
use App\Models\Reference;
use App\Models\GroupList;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class LoanController extends Controller
{
  
   public function loanList() {
        $loan=Loan::where([['LoanIsdelete',0]])->select('*')->get();
        
        return view('Loan/loanList')->with('loan',$loan);
   }
   public function ListLoan() {
        $loan=Loan::where([['LoanIsdelete',0]])->select('*')->get();
        
        return view('Loan/ListLoan')->with('loan',$loan);
   } 
   
 public function viewLoan($ID){
        $loan=Loan::where([['loan.id',$ID]])->first();
        return view('Loan/viewLoan')->with('loan',$loan);
   }
	
	 public function groupLoan() {
		 $grouploan=GroupLoan::select('grouploan.id as id','GroupName','ClientName','GroupLoanAmnt','GroupInterestValue','GroupTensure','GroupROI','monthlyPaid','scheme_type_name')->join('scheme_type', 'scheme_type.value', '=', 'grouploan.GroupMethod')->join('client', 'client.id', '=', 'grouploan.GroupMemberName')->get(); 
          
        
        return view('Loan/groupLoan')->with('grouploan',$grouploan);
   }
	 public function addGroupLoan() {
        $grouploan=GroupLoan::get();
       $client=Client::get();
	   $scheme_type=SchemeType::get();
            return view('Loan/addGroupLoan')->with('grouploan',$grouploan)->with('client',$client)->with('scheme_type',$scheme_type);
       }
   
	  public function submitGroupLoan(Request $request) {
          $input=$request->all();
          $validator = Validator::make($request->all(), [
                  'GroupName' => 'required',
                  'GroupTensure' => 'required',
                  'GroupROI' => 'required',
                  'GroupLoanAmnt' => 'required|not_in:0',
                 //'GroupMethod' => 'required|not_in:0',
                   ]);
            
                    if ($validator->fails()) {
                      return redirect()->back()->withErrors($validator)->withInput();
                              
                            }
                            else{
                               
                                
                                   $monthlyPaid = (($input['GroupROI'] /(100 * $input['GroupMethod'])) * $input['GroupLoanAmnt']) / (1 - pow(1 + $input['GroupROI'] /(100 * $input['GroupMethod']),  (-$input['GroupTensure'])));
                                   $monthlyPaid =round($monthlyPaid);
                                   $total =round($monthlyPaid) * $input['GroupTensure'];
                                   $GroupInterestValue= $total-$input['GroupLoanAmnt'];
                                  $GroupName=$input['GroupName'];
                                  $GroupMemberName=$input['GroupMemberName'];
                                  $GroupLoanAmnt=$input['GroupLoanAmnt'];
                                 
                                  $GroupTensure=$input['GroupTensure'];
                                  $GroupROI=$input['GroupROI'];
                                  $GroupMethod=$input['GroupMethod'];
                                  GroupLoan::insertGetId([
                                                  'GroupInterestValue'=>$GroupInterestValue,
                                                  'monthlyPaid'=>$monthlyPaid,
                                                  'GroupName'=>$GroupName,
                                                  'GroupMemberName'=>$GroupMemberName,
                                                  'GroupLoanAmnt'=>$GroupLoanAmnt,
                                                  'GroupROI'=>$input['GroupROI'],
                                                  'GroupTensure'=>$GroupTensure,
                                                  'GroupMethod'=>$GroupMethod,
                                                  'created_on'=> date("Y-m-d H:i:s") ]);
                                                             
                                  }
                          return redirect('/groupLoan')->with('message','Success! Your Group Loan Added Successfully'); 
                 
                 
                          
      }
	 
          
	 
     
		
		
		public function groupList() {
		$grouplist=GroupList::select('grouplist.id as id','LoanProposalNo','LoanApplied','LoanAppliedDate','LoanPurpose','LoanApprovalStatus')->get(); 

		return view('Loan/groupList')->with('grouplist',$grouplist);
		}
	 public function addGroupList() {
        $grouplist=GroupList::get();
       $client=Client::get();
	   $scheme_type=SchemeType::get();
            return view('Loan/addGroupList')->with('grouplist',$grouplist)->with('client',$client);
       }
   
	  public function submitGroupList(Request $request) {
          $input=$request->all();
          $validator = Validator::make($request->all(), [
                  'LoanProposalNo' => 'required',
                   ]);
            
                    if ($validator->fails()) {
                      return redirect()->back()->withErrors($validator)->withInput();
                              
                            }
                            else{
                               
                                
                                  $LoanProposalNo=$input['LoanProposalNo'];
                                  $LoanApplied=$input['LoanApplied'];
                                  $LoanAppliedDate=$input['LoanAppliedDate'];
                                  $LoanPurpose=$input['LoanPurpose'];
                                  $FieldVisitDate=$input['FieldVisitDate'];
                                  $VisitedOfficerName=$input['VisitedOfficerName'];
                                  $OfficerECode=$input['OfficerECode'];
                                  $ReportSubmitDate=$input['ReportSubmitDate'];
                                  $LoanApprovalStatus=$input['LoanApprovalStatus'];
                                  $ApprovalDate=$input['ApprovalDate'];
                                  $AmountApproved=$input['AmountApproved'];
                                  $ApprovedTenure=$input['ApprovedTenure'];
                                  $ProcessingFee=$input['ProcessingFee'];
                                  $GST=$input['GST'];
                                  $Total=$input['Total'];
                                  $CapAmount=$input['CapAmount'];
                                  $InsurancePremium=$input['InsurancePremium'];
                                  $NomineeInsurancePremium=$input['NomineeInsurancePremium'];
                                  $TotalPremium=$input['TotalPremium'];
                                  $PreviousOutstandingPrincipal=$input['PreviousOutstandingPrincipal'];
                                  $PreviousOutstandingInterest=$input['PreviousOutstandingInterest'];
                                  $Charges=$input['Charges'];
                                  $Overdue=$input['Overdue'];
                                  $PreviousLoanPending=$input['PreviousLoanPending'];
                                  $PreviousTotalDeduction=$input['PreviousTotalDeduction'];
                                  $TotalDeduction=$input['TotalDeduction'];
                                  $NetAmount=$input['NetAmount'];
                                  $ROI=$input['ROI'];
                                  $InstallmentMode=$input['InstallmentMode'];
                                  $InstallmentAmount=$input['InstallmentAmount'];
                                  $DisbursalDate=$input['DisbursalDate'];
                                  $InstallmentStarts=$input['InstallmentStarts'];
                                  $FinalInstallment=$input['FinalInstallment'];
                                  $LoanOfficerName=$input['LoanOfficerName'];
                                  $LoanOfficerECode=$input['LoanOfficerECode'];
                                  $RepaymentMode=$input['RepaymentMode'];
                                  $PDC_Submited=$input['PDC_Submited'];
                                  $PDC_No=$input['PDC_No'];
                                  $NACH_Refno=$input['NACH_Refno'];
                                  $ManagerName=$input['ManagerName'];
                                  $ManagerECode=$input['ManagerECode'];
                                  GroupList::insertGetId([
                                                  'LoanProposalNo'=>$LoanProposalNo,
                                                  'LoanApplied'=>$LoanApplied,
                                                  'LoanAppliedDate'=>$LoanAppliedDate,
                                                  'LoanPurpose'=>$LoanPurpose,
                                                  'FieldVisitDate'=>$FieldVisitDate,
                                                  'VisitedOfficerName'=>$input['VisitedOfficerName'],
                                                  'OfficerECode'=>$OfficerECode,
                                                  'ReportSubmitDate'=>$ReportSubmitDate,
                                                  'LoanApprovalStatus'=>$LoanApprovalStatus,
                                                  'ApprovalDate'=>$ApprovalDate,
                                                  'AmountApproved'=>$AmountApproved,
                                                  'ApprovedTenure'=>$ApprovedTenure,
                                                  'ProcessingFee'=>$ProcessingFee,
                                                  'GST'=>$GST,
                                                  'Total'=>$Total,
                                                  'CapAmount'=>$CapAmount,
                                                  'InsurancePremium'=>$InsurancePremium,
                                                  'NomineeInsurancePremium'=>$NomineeInsurancePremium,
                                                  'TotalPremium'=>$TotalPremium,
                                                  'PreviousOutstandingPrincipal'=>$PreviousOutstandingPrincipal,
                                                  'PreviousOutstandingInterest'=>$PreviousOutstandingInterest,
                                                  'Charges'=>$Charges,
                                                  'Overdue'=>$Overdue,
                                                  'PreviousLoanPending'=>$PreviousLoanPending,
                                                  'TotalDeduction'=>$TotalDeduction,
                                                  'ReportSubmitDate'=>$ReportSubmitDate,
                                                  'NetAmount'=>$NetAmount,
                                                  'ROI'=>$ROI,
                                                  'InstallmentMode'=>$InstallmentMode,
                                                  'InstallmentAmount'=>$InstallmentAmount,
                                                  'DisbursalDate'=>$DisbursalDate,
                                                  'InstallmentStarts'=>$InstallmentStarts,
                                                  'FinalInstallment'=>$FinalInstallment,
                                                  'LoanOfficerName'=>$LoanOfficerName,
                                                  'LoanOfficerECode'=>$LoanOfficerECode,
                                                  'RepaymentMode'=>$RepaymentMode,
                                                  'PDC_Submited'=>$PDC_Submited,
                                                  'PDC_No'=>$PDC_No,
                                                  'NACH_Refno'=>$NACH_Refno,
                                                  'ManagerName'=>$ManagerName,
                                                  'ManagerECode'=>$ManagerECode,
                                                  'created_on'=> date("Y-m-d H:i:s") ]);
                                                             
                                  }
                          return redirect('/groupList')->with('message','Success! Your Group Loan Added Successfully'); 
                 
                 
                          
      }
	 
          
	 // public function editgroupList($ID) {
		 // $grouplist=GroupList::where([['id',$ID]])->first();
       //$client=Client::get();
	   //$scheme_type=SchemeType::get();
           // return view('Loan/editgroupList')->with('grouplist',$grouplist)->with('client',$client);
    // }
     public function deleteGroupList($ID)
		{  
			  GroupList::where('id', $ID)->delete();
					 return redirect()->back()->with('message', 'Group Loan Deleted Successfully');
		}
	  
	  
}