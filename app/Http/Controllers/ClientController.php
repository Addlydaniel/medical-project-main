<?php
namespace App\Http\Controllers;
use App\Models\MaterialCategory;
use App\Models\Base;
use App\Models\Client;
use App\Models\LoanData;
use App\Models\Verification;
use App\Models\Loan;
use App\Models\Bank;
use App\Models\Nominee;
use App\Models\OtherDetail;
use App\Models\Kyc;
use App\Models\Scheme;
use App\Models\Employer;
use App\Models\Employers;
use App\Models\User;
use App\Models\Equipment;
use App\Models\SchemeType;
use App\Models\Payment;
use App\Models\Family;
use App\Models\Relationship;
use App\Models\Income;
use Excel;
//use App\Import\ClientImport;
use App\Models\ClientImport;
use App\Models\Employee;
use App\Models\Reference;
use App\Models\OfficerName;
use App\Models\BasicDetail;
use App\Models\PersonalDetail;
use App\Models\Member;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ClientController extends Controller
{
  
  
   public function clientList()     
   {
        $client=Client::where([['clientIsDelete',0]])->select('*')->get();
        return view('Client/clientList')->with('client',$client);
   }
   
    public function completedList() 
	{
        $data=Client::where([['clientIsDelete',0]])->select('*')->get();
        
        return view('Client/completedList')->with('client',$data);
    }
   public function approved($id) {
        $data=Client::find(id);
        $data->status='approved';
        $data->save();
        
        return redirect()->back();
   }
   
    public function rejected($id) {
        $data=Client::find(id);
        $data->status='rejected';
        $data->save();
        
        return redirect()->back();
   }
   
    public function pendingList() {
        $client=Client::where([['clientIsDelete',0]])->select('*')->get();
        
        return view('Client/pendingList')->with('client',$client);
   }
 public function addClient() {
	 
	  $client=Client::get();
	  $officername=OfficerName::get();
	 
       return view('Client/addClient')->with('client',$client)->with('officername',$officername);

    }
	 
	 
	public function submitClient(Request $request) {
	   
        $input=$request->all();

        $validator = Validator::make($request->all(), [
               
                'ClientBranch' => 'required',
                'ClientName' => 'required',
               
                
                 ]);
          
                  if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                            
                          }
                          else{
							 
                                //$Clientid=$input['Clientid'];
								
                                $ClientID=$input['ClientID'];
                                $ClientOfficerEName=$input['ClientOfficerEName'];
                                $ClientBranch=$input['ClientBranch'];
                                $ClientECode=$input['ClientECode'];
                                $ClientName=$input['ClientName'];
                                $ClientGender=$input['ClientGender'];
                                $ClientDOB=$input['ClientDOB'];
                                $ClientAge=$input['ClientAge'];
                                $ClientReligion=$input['ClientReligion'];
                                $ClientCaste=$input['ClientCaste'];
                                $ClientEducation=$input['ClientEducation'];
                                $ClientMaritalStatus=$input['ClientMaritalStatus'];
                                $ClientMobile=$input['ClientMobile'];
                                $ClientAlterMobile=$input['ClientAlterMobile'];
                                $ClientPhoneNo=$input['ClientPhoneNo'];
                                $ClientEmail=$input['ClientEmail'];
                                $ClientFatherName=$input['ClientFatherName'];
                                $ClientMotherName=$input['ClientMotherName'];
                                $ClientPermanentAddress=$input['ClientPermanentAddress'];
                                $ClientResAddress=$input['ClientResAddress'];
                                $ClientSpouseName=$input['ClientSpouseName'];
                               
                                
                               
                                Client::insertGetId([
                                                //'Clientid'=>$Clientid,
                                                'ClientID'=>$ClientID,
                                                'ClientOfficerEName'=>$ClientOfficerEName,
                                                'ClientBranch'=>$ClientBranch,
                                                'ClientECode'=>$ClientECode,
                                                'ClientName'=>$ClientName,
                                                'ClientGender'=>$ClientGender,
                                                'ClientDOB'=>$ClientDOB,
                                                'ClientAge'=>$ClientAge,
                                                'ClientReligion'=>$ClientReligion,
                                                'ClientCaste'=>$ClientCaste,
                                                'ClientEducation'=>$ClientEducation,
                                                'ClientMaritalStatus'=>$ClientMaritalStatus,
                                                'ClientMobile'=>$ClientMobile,
                                                'ClientAlterMobile'=>$ClientAlterMobile,
                                                'ClientPhoneNo'=>$ClientPhoneNo,
                                                'ClientEmail'=>$ClientEmail,
                                                'ClientFatherName'=>$ClientFatherName,
                                                'ClientMotherName'=>$ClientMotherName,
                                                'ClientPermanentAddress'=>$ClientPermanentAddress,
                                                'ClientResAddress'=>$ClientResAddress,
                                                'ClientSpouseName'=>$ClientSpouseName,
                                              
												
                                                'ClientIsDelete'=>0,
												]);
												
                                              
                                }
                        return redirect('/clientList')->with('message','Success! Your Client Updated Successfully'); 
               
                        
    }
   public function editClient($ID) {
	    $officername=OfficerName::get();
        $client=Client::where([['client.id',$ID]])->select('client.id as id','ClientID','ClientBranch','ClientECode','ClientOfficerEName','ClientName','ClientGender','ClientDOB','ClientAge','ClientMaritalStatus','ClientMobile','ClientReligion','ClientCaste','ClientEducation','ClientAlterMobile','ClientPhoneNo','ClientEmail','ClientFatherName','ClientMotherName','ClientPermanentAddress','ClientResAddress','ClientSpouseName')->first();
       
       return view('Client/editClient')->with('client',$client)->with('officername',$officername);
   }
   
   public function updateClient(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
            'ClientName' => 'required',
            'ClientBranch' => 'required',
           
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
        $ClientID=$input['ClientID'];
        $ClientBranch=$input['ClientBranch'];
        $ClientECode =$input['ClientECode'];
        $ClientOfficerEName =$input['ClientOfficerEName'];
        $ClientName =$input['ClientName'];
        $ClientGender =$input['ClientGender'];
        $ClientDOB =$input['ClientDOB'];
        $ClientAge =$input['ClientAge'];
        $ClientMaritalStatus =$input['ClientMaritalStatus'];
		$ClientReligion=$input['ClientReligion'];
		$ClientCaste=$input['ClientCaste'];
		$ClientEducation=$input['ClientEducation'];
        $ClientMobile =$input['ClientMobile'];
		$ClientAlterMobile =$input['ClientAlterMobile'];
        $ClientPhoneNo =$input['ClientPhoneNo'];
        $ClientEmail =$input['ClientEmail'];
        $ClientFatherName =$input['ClientFatherName'];
        $ClientMotherName =$input['ClientMotherName'];
        $ClientPermanentAddress =$input['ClientPermanentAddress'];
        $ClientResAddress =$input['ClientResAddress'];
        $ClientSpouseName =$input['ClientSpouseName'];
       
        Client::where('id',$id)->update([
                        'ClientID'=>$ClientID,
                        'ClientBranch'=>$ClientBranch,
                                                'ClientECode'=>$ClientECode,
                                                'ClientOfficerEName'=>$ClientOfficerEName,
                                                'ClientName'=>$ClientName,
                                                'ClientGender'=>$ClientGender,
                                                'ClientDOB'=>$ClientDOB,
                                                'ClientAge'=>$ClientAge,
                                                'ClientMaritalStatus'=>$ClientMaritalStatus,
                                                'ClientReligion'=>$ClientReligion,
                                                'ClientCaste'=>$ClientCaste,
                                                'ClientEducation'=>$ClientEducation,
                                                'ClientMobile'=>$ClientMobile,
                                                'ClientAlterMobile'=>$ClientAlterMobile,
                                                'ClientPhoneNo'=>$ClientPhoneNo,
                                                'ClientEmail'=>$ClientEmail,
                                                'ClientFatherName'=>$ClientFatherName,
                                                'ClientMotherName'=>$ClientMotherName,
                                                'ClientPermanentAddress'=>$ClientPermanentAddress,
                                                'ClientResAddress'=>$ClientResAddress,
                                                'ClientSpouseName'=>$ClientSpouseName,
                                                'ClientIsDelete'=>0,
						]);
												
                                        return redirect('/clientList')->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	public function viewClient($ID){
        $client=Client::where([['client.id',$ID]])->first();
		$scheme=Scheme::where('isDelete',0)->get();
		$bank=Bank::where([['clientID',$ID],['isDelete',0]])->get();
		$basic_detail=BasicDetail::where([['clientID',$ID],['isDelete',0]])->get();
		$kyc=Kyc::where([['clientID',$ID],['isDelete',0]])->get();
		$nominee=Nominee::where([['clientID',$ID],['isDelete',0]])->get();
		$family=Family::where([['clientID',$ID],['isDelete',0]])->get();
		$employer=Employer::where([['clientID',$ID],['employer.isDelete',0]])->select('employers.id as employeerId','employers.EmployerName','EmployerService','EmployerDesignation','EmployerWorking','EmployerExperience')->join('employers', 'employers.id', '=', 'employer.EmployerName')->get();
        
		//$employer=Employer::where([['clientID',$ID],['isDelete',0]])->get();
		$employers=Employers::where('isDelete',0)->get();
		$otherdetail=OtherDetail::where([['clientID',$ID],['isDelete',0]])->get();
		$verification=Verification::where([['clientID',$ID],['isDelete',0]])->get();
        $loan=Loan::where('loan.userID',$ID)->select('*','loan.userID as id')->join('scheme','scheme.id','=','loan.schemeID')->get();
        //bank=Bank::where('bank.id',$ID)->select('*','bank.id as id')->get();
      
        return view('Client/viewClient')->with('client',$client)->with('scheme',$scheme)->with('id',$ID)->with('loan',$loan)->with('bank',$bank)->with('nominee',$nominee)->with('family',$family)->with('verification',$verification)->with('basic_detail',$basic_detail)->with('otherdetail',$otherdetail)->with('kyc',$kyc)->with('employer',$employer);
   }
   
   
   
   
   
   
   
   public function viewPayment($ID){
   
    $payment=Payment::where([['payment.loanID',$ID]])->join('loan','loan.userID','=','payment.userID')->get();
  
    
 
    return view('Client/viewPayment')->with('payment',$payment)->with('id',$ID);
}
    public function addloan() {
	  $scheme=Scheme::get();
       return view('Client/addloan')->with('scheme',$scheme);

    }
   
     
       public function submitLoan(Request $request) {
		  

        
				$input=$request->all();
             
								//$SchemeID=$input['SchemeID'];
								$schemeID=$input['schemeID'];
                                $SchemeLoanPurpose=$input['SchemeLoanPurpose'];
                                $totalAmount=$input['totalAmount'];
                                $interest=$input['interest'];
                                $userID=$input['userID'];
                                $scheme_type_name=$input['scheme_type_name'];
                                $tenture=$input['tenture'];
                                $GST=$input['GST'];
                                $monthlyPaid=$input['monthlyPaid'];
                                $firstDueDate=$input['firstDueDate'];
                              
								Loan::insert([
												'schemeID'=>$schemeID,
                                                'userID'=>$userID,
                                                'firstDueDate'=>$firstDueDate,
                                                'GST'=>$GST,
                                                'isDelete'=>0,
												'created_on'=> date("Y-m-d H:i:s")
												]);
      
          return redirect('/clientList')->with('message','Success! Your Loan Added Successfully');                 
    }
	public function kycList($ID) {
        $kyc=Kyc::where('clientID',$ID)->get();
        
        return view('Client/kycList')->with('kyc',$kyc)->with('id',$ID);
   }
   
  
	public function addkyc($ID) {
	 
       return view('Client/addkyc')->with('id',$ID);
    }
  
      public function submitKyc(Request $request) {
           
                $input=$request->all();
                
                $validator = Validator::make($request->all(), [
                       'UIDNo' => 'required',
                     
                         ]);
                  
                          if ($validator->fails()) {
                            return redirect()->back()->withErrors($validator)->withInput();
                                    
                                  }
                                  else{
										 $clientID=$input['clientID'];
                                        $imageName = $clientID.'-uid'.time().'.'.$request->UIDFrontUpload->extension();  
                                        $file_path1= $request->UIDFrontUpload->move(public_path('images'), $imageName);
                                        $UIDFrontUpload=$input['UIDFrontUpload'];
										
										$imageName1 = time().'-uidBack.'.$request->UIDBackUpload->extension();  
                                        $file_path1= $request->UIDBackUpload->move(public_path('images'), $imageName1);
                                        $UIDBackUpload=$input['UIDBackUpload'];
										
										 $imageName2 = time().'-pan.'.$request->PanFrontUpload->extension();  
                                        $file_path1= $request->PanFrontUpload->move(public_path('images'), $imageName2);
                                        $PanFrontUpload=$input['PanFrontUpload'];
										
										 $imageName3 = time().'-panBack.'.$request->PanBackUpload->extension();  
                                        $file_path1= $request->PanBackUpload->move(public_path('images'), $imageName3);
                                        $PanBackUpload=$input['PanBackUpload'];
										
										 $imageName4 = time().'-voter.'.$request->VoterFrontUpload->extension();  
                                        $file_path1= $request->VoterFrontUpload->move(public_path('images'), $imageName4);
                                        $VoterFrontUpload=$input['VoterFrontUpload'];
										
										 $imageName5 = time().'-voterBack.'.$request->VoterBackUpload->extension();  
                                        $file_path1= $request->VoterBackUpload->move(public_path('images'), $imageName5);
                                        $VoterBackUpload=$input['VoterBackUpload'];
										
										 $imageName6 = time().'-ration.'.$request->RationUpload->extension();  
                                        $file_path1= $request->RationUpload->move(public_path('images'), $imageName6);
                                        $RationUpload=$input['RationUpload'];
										
										 $imageName7 = time().'-ration.'.$request->DrivingUpload->extension();  
                                        $file_path1= $request->DrivingUpload->move(public_path('images'), $imageName7);
                                        $DrivingUpload=$input['DrivingUpload'];
                                        $UIDNo=$input['UIDNo'];
                                        $PanNo=$input['PanNo'];
                                        $VoterID=$input['VoterID'];
                                        $RationID=$input['RationID'];
                                        
                                      
                                      Kyc::insertGetId([
														'clientID'=>$clientID,
                                                        'UIDNo'=>$UIDNo,
                                                        'UIDFrontUpload'=>$imageName,
                                                        'UIDBackUpload'=>$imageName1,
                                                        'PanNo'=>$PanNo,
                                                        'PanFrontUpload'=>$imageName2,
                                                        'PanBackUpload'=>$imageName3,
                                                        'VoterID'=>$VoterID,
                                                        'VoterFrontUpload'=>$imageName4,
                                                        'VoterBackUpload'=>$imageName5,
                                                        'RationID'=>$RationID,
                                                        'RationUpload'=>$imageName6,
                                                        'DrivingUpload'=>$imageName7,
														'isDelete'=>0,
                                                        'created_at'=> date("Y-m-d H:i:s")]);
                               
                                return redirect('/viewClient'.'/'.$clientID)->with('message','Success!  Added Successfully');                 
    }
            }
	public function editkyc($ID,$ClientID)
            {   
                    $kyc=Kyc::where([['id',$ID]])->first();
                      return view('Client/editkyc')->with('kyc',$kyc)->with('clientID',$ClientID)->with('id',$ID);
            }
			
			
public function updateKyc(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
            'UIDNo' => 'required',
            
           
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
					    $clientID=$input['clientID'];
        $UIDNo=$input['UIDNo'];
        $UIDFrontUpload =$input['UIDFrontUpload'];
        $UIDBackUpload =$input['UIDBackUpload'];
        $PanNo =$input['PanNo'];
        $PanFrontUpload =$input['PanFrontUpload'];
        $PanBackUpload =$input['PanBackUpload'];
		$VoterID =$input['VoterID'];
		$VoterFrontUpload =$input['VoterFrontUpload'];
		$VoterBackUpload =$input['VoterBackUpload'];
		$RationID =$input['RationID'];
		$RationUpload =$input['RationUpload'];
		$DrivingUpload =$input['DrivingUpload'];
       
        Kyc::where('id',$id)->update([
												'UIDNo'=>$UIDNo,
                                                'UIDFrontUpload'=>$UIDFrontUpload,
                                                'UIDBackUpload'=>$UIDBackUpload,
                                                'PanNo'=>$PanNo,
                                                'PanFrontUpload'=>$PanFrontUpload,
                                                'PanBackUpload'=>$PanBackUpload,
                                                'VoterID'=>$VoterID,
                                                'VoterFrontUpload'=>$VoterFrontUpload,
                                                'VoterBackUpload'=>$VoterBackUpload,
                                                'RationID'=>$RationID,
                                                'RationUpload'=>$RationUpload,
                                                'DrivingUpload'=>$DrivingUpload,
                                                'isDelete'=>0,
                                                'updated_at'=>date("Y-m-d H:i:s")]);
												
                                       
                                                return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	public function viewkyc($ID){
        $kyc=Kyc::where([['kyc.id',$ID]])->first();
      
        return view('Client/viewkyc')->with('kyc',$kyc);
		
		
		
   }
     public function bankList($ID) {
		
        $bank=Bank::where('clientID',$ID)->get();
		 //dd($bank);
        return view('Client/bankList')->with('bank',$bank)->with('id',$ID);
   }
	public function addbank($ID) {
	
       return view('Client/addbank')->with('id',$ID);

    }
    public function submitBank(Request $request) {
		  
 
           
                $input=$request->all();
                
                $validator = Validator::make($request->all(), [
                       'ApplicantName' => 'required',
                     
                         ]);
                  
                          if ($validator->fails()) {
                            return redirect()->back()->withErrors($validator)->withInput();
                                    
                                  }
                                  else{
                                       

             
								
                                $clientID=$input['clientID'];
                                $ApplicantName=$input['ApplicantName'];
                                $AccountType=$input['AccountType'];
                                $OperatingMode=$input['OperatingMode'];
                                $AccountNumber=$input['AccountNumber'];
                                $AccountIFSC=$input['AccountIFSC'];
                                $AccountMICR=$input['AccountMICR'];
                                $IncomeSource=$input['IncomeSource'];
                                $HighestEducation=$input['HighestEducation'];
                                $BankName=$input['BankName'];
                              
								Bank::insert([
												//'BankID'=>$BankID,
                                                'clientID'=>$clientID,
                                                'ApplicantName'=>$ApplicantName,
                                                'AccountType'=>$AccountType,
                                                'OperatingMode'=>$OperatingMode,
                                                'AccountNumber'=>$AccountNumber,
                                                'AccountIFSC'=>$AccountIFSC,
                                                'AccountMICR'=>$AccountMICR,
                                                'IncomeSource'=>$IncomeSource,
                                                'HighestEducation'=>$HighestEducation,
                                                'BankName'=>$BankName,
                                                'isDelete'=>0,
												
												]);
      
          return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Loan Added Successfully');                 
    }
	}
	
    
   public function editbank($ID,$ClientID) {
		 
        $bank=Bank::where([['bank.id',$ID]])->first();
       
       return view('Client/editbank')->with('bank',$bank)->with('clientID',$ClientID)->with('id',$ID);
   }
   public function updateBank(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
            'AccountNumber' => 'required',
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
                       $clientID=$input['clientID'];
                       $ApplicantName=$input['ApplicantName'];
                        $AccountType=$input['AccountType'];
                        $OperatingMode =$input['OperatingMode'];
                        $AccountNumber =$input['AccountNumber'];
                        $AccountIFSC =$input['AccountIFSC'];
                        $AccountMICR =$input['AccountMICR'];
                        $IncomeSource =$input['IncomeSource'];
                        $HighestEducation =$input['HighestEducation'];
						$BankName=$input['BankName'];
						$uploadAccount=$input['uploadAccount'];
		
				Bank::where('id',$id)->update([
												'ApplicantName'=>$ApplicantName,
												'AccountType'=>$AccountType,
                                                'OperatingMode'=>$OperatingMode,
                                                'AccountNumber'=>$AccountNumber,
                                                'AccountIFSC'=>$AccountIFSC,
                                                'AccountMICR'=>$AccountMICR,
                                                'IncomeSource'=>$IncomeSource,
                                                'HighestEducation'=>$HighestEducation,
                                                'BankName'=>$BankName,
                                                'uploadAccount'=>$uploadAccount,
                                                'isDelete'=>0,
												'updated_at'=> date("Y-m-d H:i:s")]);
						
												
                                                return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	
     
      
	public function viewbank($ID){
        $bank=Bank::where([['bank.id',$ID]])->first();
      
      
        return view('Client/viewbank')->with('bank',$bank);
		
		
		
   }
     
	 
	 public function nomineeList($ID) {
		 
        
		$nominee=Nominee::where('clientID',$ID)->get();
		 
        return view('Client/nomineeList')->with('nominee',$nominee)->with('id',$ID);
   }
	public function addnominee($ID) {
	    $relationship=Relationship::get();

       return view('Client/addnominee')->with('id',$ID)->with('relationship',$relationship);
    }
   
     
       public function submitNominee(Request $request) {
		  

        
				$input=$request->all();
             
							$validator = Validator::make($request->all(), [
                       
                        'NomineeGender' => 'required',
                        'NomineeRelation' => 'required',
						
						],
						['NomineeGender.required' => 'Gender is required.',
						'NomineeRelation.required' => 'Relationship is required.',
						
                  ]);
				   if ($validator->fails()) {
                            return redirect()->back()->withErrors($validator)->withInput();
                                    
                                  }
                                  else{
                                       
								//$BankID=$input['BankID'];
								 $clientID=$input['clientID'];
                                $NomineeName=$input['NomineeName'];
                                $NomineeBankNameRecord=$input['NomineeBankNameRecord'];
                                $NomineeGender=$input['NomineeGender'];
                                $NomineeDOB=$input['NomineeDOB'];
                                $NomineeRelation=$input['NomineeRelation'];
                                $NomineeAge=$input['NomineeAge'];
                                $NomineeAadhar=$input['NomineeAadhar'];
                                $NomineeAddress=$input['NomineeAddress'];
                                $NomineeBankName=$input['NomineeBankName'];
                                $NomineeAccountNo=$input['NomineeAccountNo'];
                                $NomineeBranch=$input['NomineeBranch'];
                                $NomineeIFSC=$input['NomineeIFSC'];
                              
								Nominee::insert([
												//'BankID'=>$BankID,
												 'clientID'=>$clientID,
                                                'NomineeName'=>$NomineeName,
                                                'NomineeBankNameRecord'=>$NomineeBankNameRecord,
                                                'NomineeGender'=>$NomineeGender,
                                                'NomineeDOB'=>$NomineeDOB,
                                                'NomineeRelation'=>$NomineeRelation,
                                                'NomineeAge'=>$NomineeAge,
                                                'NomineeAadhar'=>$NomineeAadhar,
                                                'NomineeAddress'=>$NomineeAddress,
                                                'NomineeBankName'=>$NomineeBankName,
                                                'NomineeAccountNo'=>$NomineeAccountNo,
                                                'NomineeBranch'=>$NomineeBranch,
                                                'NomineeIFSC'=>$NomineeIFSC,
                                                'IsDelete'=>0,
												
												]);
      return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Nominee Added Successfully');
	   }
	   }
	 public function editnominee($ID,$ClientID) {
       
	   $relationship=Relationship::get();
			$nominee=Nominee::where([['nominee.id',$ID]])->first();

			return view('Client/editnominee')->with('nominee',$nominee)->with('clientID',$ClientID)->with('relationship',$relationship)->with('id',$ID);

   }
   
   public function updateNominee(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
            'NomineeName' => 'required',
          
          
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
		$id=$input['id'];
		$clientID=$input['clientID'];
        $NomineeName=$input['NomineeName'];
        $NomineeBankNameRecord =$input['NomineeBankNameRecord'];
        $NomineeGender =$input['NomineeGender'];
        $NomineeRelation =$input['NomineeRelation'];
        $NomineeDOB =$input['NomineeDOB'];
        $NomineeAge =$input['NomineeAge'];
		$NomineeAadhar =$input['NomineeAadhar'];
		$NomineeAddress =$input['NomineeAddress'];
		$NomineeBankName =$input['NomineeBankName'];
		$NomineeAccountNo =$input['NomineeAccountNo'];
		$NomineeBranch=$input['NomineeBranch'];
		$NomineeIFSC=$input['NomineeIFSC'];
       
        Nominee::where('id',$id)->update([
                        'NomineeName'=>$NomineeName,
                                                'NomineeBankNameRecord'=>$NomineeBankNameRecord,
                                                'NomineeGender'=>$NomineeGender,
                                                'NomineeRelation'=>$NomineeRelation,
                                                'NomineeDOB'=>$NomineeDOB,
                                                'NomineeAge'=>$NomineeAge,
                                                'NomineeAadhar'=>$NomineeAadhar,
                                                'NomineeAddress'=>$NomineeAddress,
                                                'NomineeBankName'=>$NomineeBankName,
                                                'NomineeAccountNo'=>$NomineeAccountNo,
                                                'NomineeBranch'=>$NomineeBranch,
                                                'NomineeIFSC'=>$NomineeIFSC,
                                                'isDelete'=>0,
						]);
									    return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	
		public function viewnominee($ID){
        $nominee=Nominee::where([['nominee.id',$ID]])->first();
      
      
        return view('Client/viewnominee')->with('nominee',$nominee);
   }
	    public function familyList($ID) {
		 $family=Family::where('clientID',$ID)->get();
        return view('Client/familyList')->with('family',$family)->with('id',$ID);
   }
	
	public function addfamily($ID) {
		
				 $member=Member::where('FamilyID',$ID)->get();
				 $family=Family::where('clientID',$ID)->get();
				 $relationship=Relationship::get();
	   return view('Client/addfamily')->with('family',$family)->with('member',$member)->with('id',$ID)->with('relationship',$relationship);
    }
        
       public function submitFamily(Request $request) {
		  

        
				$input=$request->all();
             
								
								 $clientID=$input['clientID'];
                                $MemberName=$input['MemberName'];
                                $DOB=$input['DOB'];
                                $Age=$input['Age'];
                                $Gender=$input['Gender'];
                                $ClientRelation=$input['ClientRelation'];
                                $Occupation=$input['Occupation'];
                                $MaritalStatus=$input['MaritalStatus'];
                                $HighestQualification=$input['HighestQualification'];
                                $AadhaarNumber=$input['AadhaarNumber'];
                              
								Family::insert([
												'clientID'=>$clientID,
                                                'MemberName'=>$MemberName,
                                                'DOB'=>$DOB,
                                                'Age'=>$Age,
                                                'Gender'=>$Gender,
                                                'ClientRelation'=>$ClientRelation,
                                                'Occupation'=>$Occupation,
                                                'MaritalStatus'=>$MaritalStatus,
                                                'HighestQualification'=>$HighestQualification,
                                                'AadhaarNumber'=>$AadhaarNumber,
                                                'isDelete'=>0,
												
												]);
          
 return redirect('/viewClient'.'/'.$clientID)->with('message','Success!  Added Successfully');  		  
    }

     
	public function editfamily($ID,$ClientID) {
		 $relationship=Relationship::get();
        $family=Family::where([['family.id',$ID]])->first();
       
       return view('Client/editfamily')->with('family',$family)->with('relationship',$relationship)->with('clientID',$ClientID)->with('id',$ID);
   }

   public function updateFamily(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
            'MemberName' => 'required',
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
					    $clientID=$input['clientID'];
        $MemberName=$input['MemberName'];
        $DOB =$input['DOB'];
        $Gender =$input['Gender'];
        $ClientRelation =$input['ClientRelation'];
        $Occupation =$input['Occupation'];
        $AvgMonthlyIncome =$input['AvgMonthlyIncome'];
		$HighestQualification =$input['HighestQualification'];
       
        Family::where('id',$id)->update([
                        'MemberName'=>$MemberName,
                                                'DOB'=>$DOB,
                                                'Gender'=>$Gender,
                                                'ClientRelation'=>$ClientRelation,
                                                'Occupation'=>$Occupation,
                                                'AvgMonthlyIncome'=>$AvgMonthlyIncome,
                                                'HighestQualification'=>$HighestQualification,
                                                'isDelete'=>0,
												'updated_at'=> date("Y-m-d H:i:s")]);
					
												
  return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	public function viewfamily($ID){
        $family=Family::where([['family.id',$ID]])->first();
        return view('Client/viewfamily')->with('family',$family);
   }
   
   
   public function addmember($ID) {
				 $member=Member::where('FamilyID',$ID)->get();
				 $relationship=Relationship::get();
	   return view('Client/addmember')->with('member',$member)->with('id',$ID)->with('relationship',$relationship);
    }
        
       public function submitMember(Request $request) {
		  

        
				$input=$request->all();
             
								
								 $FamilyID=$input['FamilyID'];
                                $MembersName=$input['MembersName'];
                                $MemberDOB=$input['MemberDOB'];
                                $MemberAge=$input['MemberAge'];
                                $MemberGender=$input['MemberGender'];
                                $MemberRelation=$input['MemberRelation'];
                                $MemberOccupation=$input['MemberOccupation'];
                                $MemberMarital=$input['MemberMarital'];
                                $MemberHighestQualification=$input['MemberHighestQualification'];
                                $MemberAadhaar=$input['MemberAadhaar'];
                              
								Member::insert([
												'FamilyID'=>$FamilyID,
                                                'MembersName'=>$MembersName,
                                                'MemberDOB'=>$MemberDOB,
                                                'MemberAge'=>$MemberAge,
                                                'MemberGender'=>$MemberGender,
                                                'MemberRelation'=>$MemberRelation,
                                                'MemberOccupation'=>$MemberOccupation,
                                                'MemberMarital'=>$MemberMarital,
                                                'MemberHighestQualification'=>$MemberHighestQualification,
                                                'MemberAadhaar'=>$MemberAadhaar,
                                                'isDelete'=>0,
												
												]);
          
 return redirect('/addfamily'.'/'.$FamilyID)->with('message','Success!  Added Successfully');  		  
    }

    
   
   
   
   
     public function verificationList($ID) {
		
        $verification=Verification::where('clientID',$ID)->get();
		
        return view('Client/verificationList')->with('verification',$verification)->with('id',$ID);
   }
   public function addverification($ID) {
	
       return view('Client/addverification')->with('id',$ID);

    }
	
      public function submitVerification(Request $request) {
		  

        
        $input=$request->all();
     
                         $clientID=$input['clientID'];
                        $fieldVisitDate=$input['fieldVisitDate'];
                        $visitedOfficeName=$input['visitedOfficeName'];
                        $OfficerECode=$input['OfficerECode'];
                        $ReportSubmittedDate=$input['ReportSubmittedDate'];
                        $LoanApprovalStatus=$input['LoanApprovalStatus'];
                        $approvedDate=$input['approvedDate'];
                        $ManagerName=$input['ManagerName'];
                        $ManagerECode=$input['ManagerECode'];
                      
                        Verification::insert([
										'clientID'=>$clientID,
                                        'fieldVisitDate'=>$fieldVisitDate,
                                        'visitedOfficeName'=>$visitedOfficeName,
                                        'OfficerECode'=>$OfficerECode,
                                        'ReportSubmittedDate'=>$ReportSubmittedDate,
                                        'LoanApprovalStatus'=>$LoanApprovalStatus,
                                        'approvedDate'=>$approvedDate,
                                        'ManagerName'=>$ManagerName,
                                        'ManagerECode'=>$ManagerECode,
                                        'isDelete'=>0,
                                        
                                        ]);

  return redirect('/viewClient'.'/'.$clientID)->with('message','Success!  Added Successfully');                 
    }
	 
   public function editverification($ID,$ClientID) {
		 
        $verification=Verification::where([['verification.id',$ID]])->first();
       
       return view('Client/editverification')->with('verification',$verification)->with('clientID',$ClientID)->with('id',$ID);
   }
   
   public function updateVerification(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
            'ManagerName' => 'required',
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
					    $clientID=$input['clientID'];
        $fieldVisitDate=$input['fieldVisitDate'];
        $visitedOfficeName =$input['visitedOfficeName'];
        $OfficerECode =$input['OfficerECode'];
        $ReportSubmittedDate =$input['ReportSubmittedDate'];
        $LoanApprovalStatus =$input['LoanApprovalStatus'];
        $approvedDate =$input['approvedDate'];
		$ManagerName =$input['ManagerName'];
		$ManagerECode =$input['ManagerECode'];
       
        Verification::where('id',$id)->update([
                        'fieldVisitDate'=>$fieldVisitDate,
                                                'visitedOfficeName'=>$visitedOfficeName,
                                                'OfficerECode'=>$OfficerECode,
                                                'ReportSubmittedDate'=>$ReportSubmittedDate,
                                                'LoanApprovalStatus'=>$LoanApprovalStatus,
                                                'approvedDate'=>$approvedDate,
                                                'ManagerName'=>$ManagerName,
                                                'ManagerECode'=>$ManagerECode,
                                                'isDelete'=>0,
												'updated_at'=> date("Y-m-d H:i:s")]);
						
												
                                         return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	public function viewverification($ID){
        $verification=Verification::where([['verification.id',$ID]])->first();
        return view('Client/viewverification')->with('verification',$verification);
   }
	  public function otherList($ID) {
		 
        $otherdetail=OtherDetail::where('clientID',$ID)->get();
        
        return view('Client/otherList')->with('otherdetail',$otherdetail)->with('id',$ID);
   }
   
	public function addother($ID) {
	  
       return view('Client/addother')->with('id',$ID);

    }
    
     
       public function submitOther(Request $request) {
		  

        
				$input=$request->all();
             
								
								$clientID=$input['clientID'];
                                $interestcap=$input['interestcap'];
                                $insurancePremium=$input['insurancePremium'];
                                $nomineeInsurancePremium=$input['nomineeInsurancePremium'];
                                $totalInsurance=$input['totalInsurance'];
                                $outstandingPrincipal=$input['outstandingPrincipal'];
                                $outstandingInterest=$input['outstandingInterest'];
                                $charges=$input['charges'];
                                $overdue=$input['overdue'];
                                $pendingPreviousLoan=$input['pendingPreviousLoan'];
                                $totalDeductionOnprivious=$input['totalDeductionOnprivious'];
                                $totalDeducation=$input['totalDeducation'];
                                $NetAmount=$input['NetAmount'];
                              
								OtherDetail::insert([
												 'clientID'=>$clientID,
                                                'interestcap'=>$interestcap,
                                                'insurancePremium'=>$insurancePremium,
                                                'nomineeInsurancePremium'=>$nomineeInsurancePremium,
                                                'totalInsurance'=>$totalInsurance,
                                                'outstandingPrincipal'=>$outstandingPrincipal,
                                                'outstandingInterest'=>$outstandingInterest,
                                                'charges'=>$charges,
                                                'overdue'=>$overdue,
                                                'pendingPreviousLoan'=>$pendingPreviousLoan,
                                                'totalDeductionOnprivious'=>$totalDeductionOnprivious,
                                                'totalDeducation'=>$totalDeducation,
                                                'NetAmount'=>$NetAmount,
                                                'isDelete'=>0,
												
												]);
      
          return redirect('/viewClient'.'/'.$clientID)->with('message','Success!  Added Successfully');                 
    }
    
   public function editother($ID,$ClientID) {
		 
        $otherdetail=OtherDetail::where([['otherdetail.id',$ID]])->first();
       
       return view('Client/editother')->with('otherdetail',$otherdetail)->with('clientID',$ClientID)->with('id',$ID);
   }
   public function updateOther(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
            'interestcap' => 'required',
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
					    $clientID=$input['clientID'];
        $interestcap=$input['interestcap'];
        $insurancePremium =$input['insurancePremium'];
        $nomineeInsurancePremium =$input['nomineeInsurancePremium'];
        $totalInsurance =$input['totalInsurance'];
        $outstandingPrincipal =$input['outstandingPrincipal'];
        $outstandingInterest =$input['outstandingInterest'];
		$charges =$input['charges'];
		$overdue =$input['overdue'];
		$pendingPreviousLoan =$input['pendingPreviousLoan'];
		$totalDeductionOnprivious =$input['totalDeductionOnprivious'];
		$totalDeducation =$input['totalDeducation'];
		$NetAmount =$input['NetAmount'];
       
        OtherDetail::where('id',$id)->update([
                        'interestcap'=>$interestcap,
                                                'insurancePremium'=>$insurancePremium,
                                                'nomineeInsurancePremium'=>$nomineeInsurancePremium,
                                                'totalInsurance'=>$totalInsurance,
                                                'outstandingPrincipal'=>$outstandingPrincipal,
                                                'outstandingInterest'=>$outstandingInterest,
                                                'charges'=>$charges,
                                                'overdue'=>$overdue,
                                                'pendingPreviousLoan'=>$pendingPreviousLoan,
                                                'totalDeductionOnprivious'=>$totalDeductionOnprivious,
                                                'totalDeducation'=>$totalDeducation,
                                                'NetAmount'=>$NetAmount,
                                                'isDelete'=>0,
												'updated_at'=> date("Y-m-d H:i:s")]);
												
						
												
                                          return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
										  }         
    }
	public function viewother($ID){
        $otherdetail=OtherDetail::where([['otherdetail.id',$ID]])->first();
      
      
        return view('Client/viewother')->with('otherdetail',$otherdetail);
	}
	
	
	public function basicList($ID) {
		
        $basic_detail=BasicDetail::where('clientID',$ID)->get();
		 
        return view('Client/basicList')->with('basic_detail',$basic_detail)->with('id',$ID);
   }
	public function addbasic($ID) {
	
       return view('Client/addbasic')->with('id',$ID);

    }
    public function submitBasic(Request $request) {
		  
 
           
                $input=$request->all();
                
                $validator = Validator::make($request->all(), [
                       'Branch' => 'required',
                     
                         ]);
                  
                          if ($validator->fails()) {
                            return redirect()->back()->withErrors($validator)->withInput();
                                    
                                  }
                                  else{
                                       

             
                                $clientID=$input['clientID'];
                                $Branch=$input['Branch'];
                                $BasicEmployeeName=$input['BasicEmployeeName'];
                                $CustomerName=$input['CustomerName'];
                                $CustomerID=$input['CustomerID'];
                                $DateEnrolled=$input['DateEnrolled'];
                                $AadhaarNumber=$input['AadhaarNumber'];
                                $MobileNumber=$input['MobileNumber'];
                              
								BasicDetail::insert([
												//'BankID'=>$BankID,
                                                'clientID'=>$clientID,
                                                'Branch'=>$Branch,
                                                'BasicEmployeeName'=>$BasicEmployeeName,
                                                'CustomerName'=>$CustomerName,
                                                'CustomerID'=>$CustomerID,
                                                'DateEnrolled'=>$DateEnrolled,
                                                'AadhaarNumber'=>$AadhaarNumber,
                                                'MobileNumber'=>$MobileNumber,
                                                'isDelete'=>0,
												
												]);
      
          return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Basic Detail Added Successfully');                 
    }
	}
	
    
   public function editbasic($ID,$ClientID) {
		 
        $basic_detail=BasicDetail::where([['basic_detail.id',$ID]])->first();
       
       return view('Client/editbasic')->with('basic_detail',$basic_detail)->with('clientID',$ClientID)->with('id',$ID);
   }
   public function updateBasicDetail(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
            'Branch' => 'required',
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
                       $clientID=$input['clientID'];
                                $Branch=$input['Branch'];
                                $BasicEmployeeName=$input['BasicEmployeeName'];
                                $CustomerName=$input['CustomerName'];
                                $CustomerID=$input['CustomerID'];
                                $DateEnrolled=$input['DateEnrolled'];
                                $AadhaarNumber=$input['AadhaarNumber'];
                                $MobileNumber=$input['MobileNumber'];
		
				BasicDetail::where('id',$id)->update([
												'clientID'=>$clientID,
                                                'Branch'=>$Branch,
                                                'BasicEmployeeName'=>$BasicEmployeeName,
                                                'CustomerName'=>$CustomerName,
                                                'CustomerID'=>$CustomerID,
                                                'DateEnrolled'=>$DateEnrolled,
                                                'AadhaarNumber'=>$AadhaarNumber,
                                                'MobileNumber'=>$MobileNumber,
                                                'isDelete'=>0,
												'updated_at'=> date("Y-m-d H:i:s")]);
						
												
                                                return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	
     
      
	public function viewbasic($ID){
        $basic_detail=BasicDetail::where([['basic_detail.id',$ID]])->first();
      
      
        return view('Client/viewbasic')->with('basic_detail',$basic_detail);
		
		
		
   }
     
	
	public function personalList($ID) {
		
        $personal_detail=PersonalDetail::where('clientID',$ID)->get();
		 
        return view('Client/personalList')->with('personal_detail',$personal_detail)->with('id',$ID);
   }
	public function addpersonal($ID) {
	
       return view('Client/addpersonal')->with('id',$ID);

    }
    public function submitPersonal(Request $request) {
		  
 
           
                $input=$request->all();
                
                $validator = Validator::make($request->all(), [
                       'CustomerName' => 'required',
                     
                         ]);
                  
                          if ($validator->fails()) {
                            return redirect()->back()->withErrors($validator)->withInput();
                                    
                                  }
                                  else{
                                       

             
                                $clientID=$input['clientID'];
								 $imageName15 = $clientID.'-dob'.time().'.'.$request->dob_upload->extension();  
                                        $file_path1= $request->dob_upload->move(public_path('images'), $imageName15);
                                        $dob_upload=$input['dob_upload'];
                                $CustomerName=$input['CustomerName'];
                                $DOB=$input['DOB'];
                                $CustomerAge=$input['CustomerAge'];
                                $CustomerGender=$input['CustomerGender'];
                                $CustomerReligion=$input['CustomerReligion'];
                                $CustomerCaste=$input['CustomerCaste'];
                                $FatherName=$input['FatherName'];
                                $MotherName=$input['MotherName'];
                                $SpouseName=$input['SpouseName'];
                                $MobileNumber=$input['MobileNumber'];
                                $AltMobileNumber=$input['AltMobileNumber'];
                                $ResidentialAddress=$input['ResidentialAddress'];
                                $PermanentAddress=$input['PermanentAddress'];
                                $MailID=$input['MailID'];
                                $MaritalStatus=$input['MaritalStatus'];
                              
								PersonalDetail::insert([
												//'BankID'=>$BankID,
                                                'clientID'=>$clientID,
                                                'CustomerName'=>$CustomerName,
                                                'DOB'=>$DOB,
												'dob_upload'=>$imageName15,
                                                'CustomerAge'=>$CustomerAge,
                                                'CustomerGender'=>$CustomerGender,
                                                'CustomerReligion'=>$CustomerReligion,
                                                'CustomerCaste'=>$CustomerCaste,
                                                'FatherName'=>$FatherName,
                                                'MotherName'=>$MotherName,
                                                'SpouseName'=>$SpouseName,
                                                'MobileNumber'=>$MobileNumber,
                                                'AltMobileNumber'=>$AltMobileNumber,
                                                'ResidentialAddress'=>$ResidentialAddress,
                                                'PermanentAddress'=>$PermanentAddress,
                                                'MailID'=>$MailID,
                                                'MaritalStatus'=>$MaritalStatus,
                                                'isDelete'=>0,
												'created_at'=> date("Y-m-d H:i:s")]);
												
												
          return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Basic Detail Added Successfully');                 
    }
	}
	
    
   public function editpersonal($ID,$ClientID) {
		 
        $personal_detail=PersonalDetail::where([['personal_detail.id',$ID]])->first();
       
       return view('Client/editpersonal')->with('personal_detail',$personal_detail)->with('clientID',$ClientID)->with('id',$ID);
   }
   public function updatePersonal(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
            'Branch' => 'required',
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
                       $clientID=$input['clientID'];
                                $Branch=$input['Branch'];
                                $BasicEmployeeName=$input['BasicEmployeeName'];
                                $CustomerName=$input['CustomerName'];
                                $CustomerID=$input['CustomerID'];
                                $DateEnrolled=$input['DateEnrolled'];
                                $AadhaarNumber=$input['AadhaarNumber'];
                                $MobileNumber=$input['MobileNumber'];
		
				PersonalDetail::where('id',$id)->update([
												'clientID'=>$clientID,
                                                'Branch'=>$Branch,
                                                'BasicEmployeeName'=>$BasicEmployeeName,
                                                'CustomerName'=>$CustomerName,
                                                'CustomerID'=>$CustomerID,
                                                'DateEnrolled'=>$DateEnrolled,
                                                'AadhaarNumber'=>$AadhaarNumber,
                                                'MobileNumber'=>$MobileNumber,
                                                'isDelete'=>0,
												'updated_at'=> date("Y-m-d H:i:s")]);
						
												
                                                return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	
     
      
	public function viewpersonal($ID){
        $personal_detail=PersonalDetail::where([['personal_detail.id',$ID]])->first();
      
      
        return view('Client/viewpersonal')->with('personal_detail',$personal_detail);
			
   }
     public function incomeList($ID) {
		
        $income=Income::where('clientID',$ID)->get();
		 
        return view('Client/incomeList')->with('income',$income)->with('id',$ID);
   }
	public function addincome($ID) {
	
       return view('Client/addincome')->with('id',$ID);

    }
    public function submitIncome(Request $request) {
		  
 
           
                $input=$request->all();
                
                $validator = Validator::make($request->all(), [
                       'IncomeNature' => 'required',
                     
                         ]);
                  
                          if ($validator->fails()) {
                            return redirect()->back()->withErrors($validator)->withInput();
                                    
                                  }
                                  else{
                                       

             
                                $clientID=$input['clientID'];
                                $IncomeNature=$input['IncomeNature'];
                                $IncomeSource=$input['IncomeSource'];
                                $WageType=$input['WageType'];
                              
								Income::insert([
												//'BankID'=>$BankID,
                                                'clientID'=>$clientID,
                                                'IncomeNature'=>$IncomeNature,
                                                'IncomeSource'=>$IncomeSource,
                                                'WageType'=>$WageType,
                                                'isDelete'=>0,
												
												]);
      
          return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Basic Detail Added Successfully');                 
    }
	}
	
    
   public function editincome($ID,$ClientID) {
		 
        $income=Income::where([['income.id',$ID]])->first();
       
       return view('Client/editincome')->with('income',$income)->with('clientID',$ClientID)->with('id',$ID);
   }
   public function updateIncome(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
            'IncomeNature' => 'required',
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
                       $clientID=$input['clientID'];
                                $clientID=$input['clientID'];
                                $IncomeNature=$input['IncomeNature'];
                                $IncomeSource=$input['IncomeSource'];
                                $WageType=$input['WageType'];
		
				Income::where('id',$id)->update([
												'clientID'=>$clientID,
                                                'IncomeNature'=>$IncomeNature,
                                                'IncomeSource'=>$IncomeSource,
                                                'WageType'=>$WageType,
                                                'isDelete'=>0,
												'updated_at'=> date("Y-m-d H:i:s")]);
						
												
                                                return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	
     
      
	public function viewincome($ID){
        $income=Income::where([['income.id',$ID]])->first();
      
      
        return view('Client/viewincome')->with('income',$income);
		
		
		
   }
	
	 public function employerList($ID) {
		 $employer=Employer::where([['clientID',$ID]])->select('employers.id as employeerId','employers.EmployerName','EmployerService','EmployerDesignation','EmployerWorking','EmployerExperience')->join('employers', 'employers.id', '=', 'employer.EmployerName')->get();
        
		 //$employer=Employer::where('clientID',$ID)->get();

        return view('Client/employerList')->with('employer',$employer)->with('employers',$employers)->with('id',$ID);
   }
	
	public function addemployer($ID) {
		$employers=Employers::get();
	   return view('Client/addemployer')->with('id',$ID)->with('employers',$employers);
    }
        
       public function submitEmployer(Request $request) {
		  
		  
	
                
        
				$input=$request->all();
             $validator = Validator::make($request->all(), [
                //'EmployerName' => 'required',
                'EmployerName' => 'required|not_in:0',
							 ]);	
								 $clientID=$input['clientID'];
                                $EmployerName=$input['EmployerName'];
                                $EmployerAddress=$input['EmployerAddress'];
                                $EmployerService=$input['EmployerService'];
                                $EmployerDesignation=$input['EmployerDesignation'];
                                $EmployerWorking=$input['EmployerWorking'];
                                $EmployerExperience=$input['EmployerExperience'];
                                $EmployerGST=$input['EmployerGST'];
                                $EmployerPAN=$input['EmployerPAN'];
                              
								Employer::insert([
												'clientID'=>$clientID,
                                                'EmployerName'=>$EmployerName,
                                                'EmployerAddress'=>$EmployerAddress,
                                                'EmployerService'=>$EmployerService,
                                                'EmployerDesignation'=>$EmployerDesignation,
                                                'EmployerWorking'=>$EmployerWorking,
                                                'EmployerExperience'=>$EmployerExperience,
                                                'EmployerGST'=>$EmployerGST,
                                                'EmployerPAN'=>$EmployerPAN,
                                                'isDelete'=>0,
												
												]);
          
 return redirect('/viewClient'.'/'.$clientID)->with('message','Success!  Added Successfully');  		  
    }

     
	public function editemployer($ID,$ClientID) {
        $employer=Employer::where([['employer.id',$ID]])->first();
		$employers=Employers::get();
       
       return view('Client/editemployer')->with('employer',$employer)->with('employers',$employers)->with('clientID',$ClientID)->with('id',$ID);
   }

   public function updateEmployer(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
            'EmployerName' => 'required',
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
					    $clientID=$input['clientID'];
        $EmployerName=$input['EmployerName'];
        $EmployerAddress =$input['EmployerAddress'];
        $EmployerService =$input['EmployerService'];
        $EmployerDesignation =$input['EmployerDesignation'];
        $EmployerWorking =$input['EmployerWorking'];
        $EmployerExperience =$input['EmployerExperience'];
		$EmployerGST =$input['EmployerGST'];
       
        Employer::where('id',$id)->update([
                        'EmployerName'=>$EmployerName,
                                                'EmployerAddress'=>$EmployerAddress,
                                                'EmployerService'=>$EmployerService,
                                                'EmployerDesignation'=>$EmployerDesignation,
                                                'EmployerWorking'=>$EmployerWorking,
                                                'EmployerExperience'=>$EmployerExperience,
                                                'EmployerGST'=>$EmployerGST,
                                                'isDelete'=>0,
												'updated_at'=> date("Y-m-d H:i:s")]);
					
												
  return redirect('/viewClient'.'/'.$clientID)->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	public function viewemployer($ID){
        $employer=Employer::where([['employer.id',$ID]])->first();
        return view('Client/viewemployer')->with('employer',$employer);
   }
   
    public function submitPayment(Request $request) {
		  

        
        $input=$request->all();
     
                 $payment_details=Payment::where('loanID',$input['loanID'])->get()->count();
                 if($payment_details==0){
                    $loan_details=Loan::where('id',$input['loanID'])->first();
                    $scheme_details=Scheme::where('id',$loan_details->schemeID)->first();
                    $interest=$scheme_details->interest/(100 *$scheme_details->schemeMethod);
                       $principal= $scheme_details->totalAmount;
                       $interest_value= $principal*  $interest;
                       $payment=$input['payment'];
                       $paidDate=$input['paymentDate'];
                       $next_principal= ($scheme_details->totalAmount-$scheme_details->monthlyPaid)+$interest_value;
                         
                           Payment::insert([
                                           'schemeID'=>$loan_details->schemeID,
                                           'userID'=>$loan_details->userID,
                                           'loanID'=>$input['loanID'],
                                           'initialAmount'=>$scheme_details->totalAmount,
                                           'interest'=>$interest_value,
                                           'roi'=>$scheme_details->roi,
                                           'payment'=>$scheme_details->monthlyPaid,
                                            'paidAmount'=>$scheme_details->monthlyPaid,
                                            'dueDate'=>$loan_details->firstDueDate,
                                            'paidDate'=>$paidDate,
                                            'next_principal'=>$next_principal,
                                           'created_at'=> date("Y-m-d H:i:s")
                                           ]);
                 }
                 else{
                    $payment_details=Payment::where('loanID',$input['loanID'])->orderBy('created_at','DESC')->first();
                    $loan_details=Loan::where('id',$input['loanID'])->first();
                    $scheme_details=Scheme::where('id',$loan_details->schemeID)->first();
                    $interest=$scheme_details->interest/(100 *$scheme_details->schemeMethod);
                       $principal= $payment_details->next_principal;
                       $interest_value= $principal*  $interest;
                      
                       $new_principal=$payment_details->paidAmount+$interest_value;
                     
                       $payment=$input['payment'];
                       $paidDate=$input['paymentDate'];
                      
                       $next_principal=($principal-$scheme_details->monthlyPaid)+$interest_value;
                     
                    Payment::insert([
                        'schemeID'=>$loan_details->schemeID,
                        'userID'=>$loan_details->userID,
                        'loanID'=>$input['loanID'],
                        'initialAmount'=>$principal,
                        'interest'=>$interest_value,
                        'roi'=>$scheme_details->roi,
                        'payment'=>$scheme_details->monthlyPaid,
                         'paidAmount'=>$new_principal,
                         'dueDate'=>$loan_details->firstDueDate,
                         'paidDate'=>$paidDate,
                         'next_principal'=>$next_principal,
                        'created_at'=> date("Y-m-d H:i:s")
                        ]);
                 }
                

  return redirect()->back()->with('message','Success! Your Loan Added Successfully');                 
}
	  
       
    public function importForm()
    {
        return view('import-form');
    }

    public function import(Request $request)
    {
        Excel::import(new ClientImport,$request->file);
        return "Record are imported successfully!";
    }
}