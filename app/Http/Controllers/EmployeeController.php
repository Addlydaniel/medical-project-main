<?php
namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\UserGroup;
use App\Models\LoanService;
use App\Models\LoanCategory;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
class EmployeeController extends Controller
{
  
   public function employeeList() {
        $employee=Employee::where([['employeeisDelete',0]])->select('employee.id as employeeId','employeeName','groupName')->join('user_group', 'user_group.id', '=', 'employee.employeeCategory')->get();
        
        return view('Employee/employeeList')->with('employee',$employee);
   }
  public function addEmployee() {
	   $user_group=UserGroup::get();
       $loan_service=LoanService::get();
       $loan_category=LoanCategory::get();
       return view('Employee/addEmployee')->with('loan_service',$loan_service)->with('loan_category',$loan_category)->with('user_group',$user_group);
    }
	
	
	public function submitEmployee(Request $request) {
        $input=$request->all();
       
        $validator = Validator::make($request->all(), [
            'employeeName' => 'required',
            'employeePassword' => 'required',
            'employeeCategory' => 'required|not_in:0',
            'employeePhone' => 'required|unique:employee,employeePhone',
            'employeeBusinessPAN' => 'unique:employee,employeeBusinessPAN',
            'employeeGST' => 'unique:employee,employeeGST',
                 ]);
          
                  if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                            
                          }
                          else{
                            $employeePassword=$input['employeePassword'];
                                $employeeName=$input['employeeName'];
                                $employeeCategory =$input['employeeCategory'];
                                $employeeLoantype =$input['employeeLoantype'];
                                $employeePhone =$input['employeePhone'];
                                $employeeAlternativeNo =$input['employeeAlternativeNo'];
                                $employeeAddress =$input['employeeAddress'];
                                $employeeServiceType =$input['employeeServiceType'];
                                $employeeDesignation =$input['employeeDesignation'];
                                $employeeWorkSince =$input['employeeWorkSince'];
                                $employeeExp =$input['employeeExp'];
                                $employeeGST =$input['employeeGST'];
                                $employeeBusinessPAN =$input['employeeBusinessPAN'];
                               
                                Employee::insertGetId([
                                                'employeePassword'=>$employeePassword,
                                                'employeeName'=>$employeeName,
                                                'employeeCategory'=>$employeeCategory,
                                                'employeeLoantype'=>$employeeLoantype,
                                                'employeePhone'=>$employeePhone,
                                                'employeeAlternativeNo'=>$employeeAlternativeNo,
                                                'employeeAddress'=>$employeeAddress,
                                                'employeeServiceType'=>$employeeServiceType,
                                                'employeeDesignation'=>$employeeDesignation,
                                                'employeeWorkSince'=>$employeeWorkSince,
                                                'employeeExp'=>$employeeExp,
                                                'employeeGST'=>$employeeGST,
                                                'employeeBusinessPAN'=>$employeeBusinessPAN,
                                                'employeeisDelete'=>0,
                                                'employeeCreatedOn'=> date("Y-m-d H:i:s")]);
                                }
                        return redirect('/employeeList')->with('message','Success! Your Data Updated Successfully'); 
               
               
                        
    }
	public function editEmployee($ID) {
        $user_group=UserGroup::get();
        $loan_service=LoanService::get();
        $loan_category=LoanCategory::get();
        $employee=Employee::where([['employee.id',$ID]])->select('employee.id as employeeId','employeeName','employeeCategory','employeeLoantype','employeePhone','employeeAlternativeNo','employeeAddress','employeeServiceType','employeeDesignation','employeeWorkSince','employeeExp','employeeGST','employeeBusinessPAN','employeePassword')->first();
       
       return view('Employee/editEmployee')->with('employee',$employee)->with('loan_service',$loan_service)->with('loan_category',$loan_category)->with('user_group',$user_group);
   }
   public function updateEmployee(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
            'employeeName' => 'required',
            'employeeCategory' => 'required|not_in:0',
           
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                       $id=$input['id'];
                       $employeePassword =$input['employeePassword'];
        $employeeName =$input['employeeName'];
        $employeeCategory =$input['employeeCategory'];
        $employeeLoantype =$input['employeeLoantype'];
        $employeePhone =$input['employeePhone'];
        $employeeAlternativeNo =$input['employeeAlternativeNo'];
        $employeeAddress =$input['employeeAddress'];
		$employeeServiceType =$input['employeeServiceType'];
        $employeeDesignation =$input['employeeDesignation'];
        $employeeWorkSince =$input['employeeWorkSince'];
        $employeeExp =$input['employeeExp'];
        $employeeGST =$input['employeeGST'];
        $employeeBusinessPAN =$input['employeeBusinessPAN'];
       
        Employee::where('id',$id)->update([
                        'employeePassword'=>$employeePassword,
                        'employeeName'=>$employeeName,
                        'employeeCategory'=>$employeeCategory,
                        'employeeLoantype'=>$employeeLoantype,
                        'employeePhone'=>$employeePhone,
                        'employeeAlternativeNo'=>$employeeAlternativeNo,
                        'employeeAddress'=>$employeeAddress,
                        'employeeServiceType'=>$employeeServiceType,
                        'employeeDesignation'=>$employeeDesignation,
                        'employeeWorkSince'=>$employeeWorkSince,
                        'employeeExp'=>$employeeExp,
                        'employeeGST'=>$employeeGST,
                        'employeeBusinessPAN'=>$employeeBusinessPAN,
                        'employeeisDelete'=>0,
                        'employeeCreatedOn'=> date("Y-m-d H:i:s")]);
						
                                        return redirect('/employeeList')->with('message','Success! Your Data Updated Successfully'); 
                      }         
    }
	public function viewEmployee($ID){
        $employee=Employee::where([['employee.id',$ID]])->first();
      
      
        return view('Employee/viewEmployee')->with('employee',$employee);
   }
   public function userGroupList() {
    $user_group=UserGroup::get();
    
    return view('Employee/UserGroup/userGroupList')->with('user_group',$user_group);
}
public function addUserGroup() {
  
   return view('Employee/UserGroup/addUserGroup');
}


public function submitUserGroup(Request $request) {
    $input=$request->all();
    
    $validator = Validator::make($request->all(), [
        'groupCode' => 'required|unique:user_group,groupCode',
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                            $groupName=$input['groupName'];
                            $groupCode =$input['groupCode'];
                            $groupDescription =$input['groupDescription'];
                            UserGroup::insertGetId([
                                            'groupName'=>$groupName,
                                            'groupCode'=>$groupCode,
                                            'groupDescription'=>$groupDescription,
                                            'created_on'=> date("Y-m-d H:i:s")]);
                            }
                    return redirect('/userGroupList')->with('message','Success! Your Data Updated Successfully'); 
           
           
                    
}
public function editUserGroup($ID) {
    $user_group=UserGroup::where([['id',$ID]])->first();
   
   return view('Employee/UserGroup/editUserGroup')->with('user_group',$user_group);
}
public function updateUserGroup(Request $request) {
    $input=$request->all();
    $validator = Validator::make($request->all(), [
           
       
        'groupCode' => 'required|unique:user_group,groupCode,'.$input["id"],
       
        
         ]);
  
          if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
                    
                  }
                  else{
                   $id=$input['id'];
                   $groupName=$input['groupName'];
                   $groupCode =$input['groupCode'];
                   $groupDescription =$input['groupDescription'];
   
                   UserGroup::where('id',$id)->update([
                    'groupName'=>$groupName,
                    'groupCode'=>$groupCode,
                    'groupDescription'=>$groupDescription,
                    'created_on'=> date("Y-m-d H:i:s")]);
                    
                                    return redirect('/userGroupList')->with('message','Success! Your Data Updated Successfully'); 
                  }         
}


public function deleteUserGroup($ID)
		{  
			  UserGroup::where('id', $ID)->delete();
					 return redirect()->back()->with('message', 'User Group Deleted Successfully');
		}
	  
}
