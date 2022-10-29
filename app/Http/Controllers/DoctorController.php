<?php

namespace App\Http\Controllers;
use Hash;

use App\Models\Doctor;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class DoctorController extends Controller
{

    
     public function adddoctor()     
   {
        $doctor=Doctor::where([['doctorIsDelete',0]])->select('*')->get();
        return view('Doctor/adddoctor')->with('doctor',$doctor);
   }
    public function register() {
       
        $office=Office::where('isDelete',0)->get();
        $division=Division::where('isDelete',0)->get();
        return view('register')->with('office',$office)->with('division',$division);

    }
    //Store User Basic Details With Clarify Internal User/External User Validation
	
    public function registerSubmit(Request $request)
    {  

          $input=$request->all();
      
        $validator = Validator::make($request->all(), [
                
                'phoneNumber' => 'required|unique:users,phoneNumber',
                'userPEN ' => 'unique:users,userPEN',
                 ]);
        if ($validator->fails()) {
           
            return redirect()->back()->withErrors($validator)->withInput();
          }    
          else{    
               
            $username=$input['username'];
            $userEmail =$input['userEmail'];
            $phoneNumber =$input['phoneNumber'];
            $userLocation=$input['userLocation'];
            $userCompanyName=$input['userCompanyName'];
            $userExternalType=$input['userExternalType'];
            $userPEN =$input['userPEN'];
            User::insert(['username' => $username, 
            'userEmail' => $userEmail,
            'phoneNumber'=>$phoneNumber,
            'userOffice'=>$userLocation,
            'userCompanyName'=>$userCompanyName,
            'userPEN'=>$userPEN,
            'password'=>123456,
            'userExternalType'=>$userExternalType,
            'userType'=>2,
            'isDelete'=>0,
            'created_at'=> date("Y-m-d H:i:s")]);
        }
        return redirect("/")->with('message','Internal User Created Successfully');
      
    }
     //|Login User Basic Details With Clarify Internal User/External User Validation
    public function loginSubmit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phoneNumber' => 'required', 
            'password' => 'required',
        ]);
    
        if ($validator->fails()) {
                  return redirect()->back()->withErrors($validator)->withInput();
                }
                else{
                  $input=$request->all();
                  $phoneNumber =$input['phoneNumber'];
                  $password=$input['password'];
                  $userLogIn=Employee::where([['employeePhone', '=', $phoneNumber],['employeePassword', '=', $password]])->first();
                  
                  if($userLogIn){
                            $userType=$userLogIn->employeeCategory;
                            $userName=$userLogIn->	employeeName;
                            $userID=$userLogIn->id;
                          
                            session(['userType' => $userType]);
                            
                            session(['userName' => $userName]);
                            session(['userID' => $userID]);
                            return redirect('/dashboard');
                  }
                  else{
                     return back()->with('login_error','Phone Number/Password is in correct')->withInput();;
                  }
                }
       }
    
   
    public function forgotPassword() {
        return view('forgotPassword');

    }
    //Log Out User
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
     //User Crud Operation
     public function addUser() {
        $division=Division::where('isDelete',0)->get();
        $office=Office::where('isDelete',0)->get();
        $user_group=UserGroup::where('isActive',1)->get();
        return view('Users/addUser')->with('user_group',$user_group)->with('division',$division)->with('office',$office);

    }
    public function updateUser(Request $request) {
        $input=$request->all();
      
        $validator = Validator::make($request->all(), [
                'username' => 'required', 
                'userEmail' => 'required|email|unique:users,userEmail,'.$input["id"],
                'userPen' => 'required|unique:users,userPEN,'.$input["id"],
                'userGroup' => 'required|not_in:0',
                'phoneNumber' => 'required|unique:users,phoneNumber,'.$input["id"],
                 ]);
          
                  if ($validator->fails()) {
                   
                    return redirect()->back()->withErrors($validator)->withInput();
                            
                          }
                   else{    
                    $id=$input['id'];
                                $username=$input['username'];
                                $userEmail =$input['userEmail'];
                                $phoneNumber =$input['phoneNumber'];
                                $userPEN=$input['userPen'];
                                $userGroup=$input['userGroup'];
                                $userLocation=$input['userLocation'];
                                $userExperince=$input['userExperince'];
                                $userDivision=$input['userDivision'];
                                $userJobSummary=$input['userJobSummary'];
                               
                            
                                User::where('id',$id)->update(['username' => $username, 
                                'userEmail' => $userEmail,
                                'userPEN'=>$userPEN,
                                'userGroup'=>$userGroup,
                                'phoneNumber'=>$phoneNumber,
                                'userOffice'=>$userLocation,
                                'userDivision'=>$userDivision,
                                'password'=>123456,
                                'userExperince'=>$userExperince,
                                'userJobSummary'=>$userJobSummary,
                                'userType'=>1,
                               
                                'created_at'=> date("Y-m-d H:i:s")]);
                   }
       
                   return redirect("userList")->with('message','Internal User Created Successfully');

   }
        public function createUser(Request $request) {
        $input=$request->all();
      
        $validator = Validator::make($request->all(), [
                'username' => 'required', 
                'userEmail' => 'required|email|unique:users,userEmail',
                'userPen' => 'required|unique:users,userPEN',
                'userGroup' => 'required|not_in:0',
                'phoneNumber' => 'required|unique:users,phoneNumber',
                 ]);
          
                  if ($validator->fails()) {
                   
                    return redirect()->back()->withErrors($validator)->withInput();
                            
                          }
                   else{   
                                $username=$input['username'];
                                $userEmail =$input['userEmail'];
                                $phoneNumber =$input['phoneNumber'];
                                $userPEN=$input['userPen'];
                                $userGroup=$input['userGroup'];
                                $userLocation=$input['userLocation'];
                                $userExperince=$input['userExperince'];
                                $userJobSummary=$input['userJobSummary'];
                                $userDivision=$input['userDivision'];
                                User::insert(['username' => $username, 
                                'userEmail' => $userEmail,
                                'userPEN'=>$userPEN,
                                'userGroup'=>$userGroup,
                                'phoneNumber'=>$phoneNumber,
                                'userDivision'=>$userDivision,
                                'userOffice'=>$userLocation,
                                'password'=>123456,
                                'userExperince'=>$userExperince,
                                'userJobSummary'=>$userJobSummary,
                                'userType'=>1,
                                'isDelete'=>0,
                                'created_at'=> date("Y-m-d H:i:s")]);
                   }
       
                   return redirect("userList")->with('message','Internal User Created Successfully');

   }
    public function editUser($id) {
        $division=Division::where('isDelete',0)->get();
        $office=Office::where('isDelete',0)->get();
        $user_group=UserGroup::where('isActive',1)->get();
        $users=User::where('id', $id)->first();
      
       
     
        return view('Users/editUser')->with('users',$users)->with('user_group',$user_group)->with('division',$division)->with('office',$office);

    }
	
	 
   
    public function userList() {
        $users=User::where([['userType',1]])->select('userGroupName','id as userID','users.isDelete as deleteUser','username','userPEN','userEmail','phoneNumber')->join('user_group', 'user_group.userGroupID', '=', 'users.userGroup')->get();
       
        return view('Users/userList')->with('users',$users);

    }
    public function deleteUser($ID)
    {            
        User::where('id', $ID)->update(['isDelete'=>1]);        
              return redirect()->back()->with('message', 'User Deleted Successfully');
      }
    public function activeUser($ID)
      {              
          User::where('id', $ID)->update(['isDelete'=>0]);          
                return redirect()->back()->with('message', 'User Deleted Successfully');
        }	
		
	public function viewUser($id) {
        $users=User::where([['users.id',$id]])->first();

        return view('Users/viewUser')->with('users',$users);

    }
    
    //External User Collection
  
  
    public function externalList() {
        $users=User::where([['userType',2]])->get();
       
       
        return view('Users/External/externalList')->with('users',$users);

    }
    public function viewExternal() {
        return view('Users/External/viewExternal');

    }
   
    //Group Crud Operation
    public function addGroup() {
        return view('Users/Group/addGroup');

    }
    public function editGroup($ID) {
       
        $user_group=UserGroup::where('userGroupID',$ID)->first();
        
        return view('Users/Group/editGroup')->with('user_group',$user_group);

    }
    public function submitGroup(Request $request) {
                $input=$request->all();
                $validator = Validator::make($request->all(), [
                    
                    'userGroupName' => 'required|unique:user_group,userGroupName',
                    'userGroupCode' => 'required|unique:user_group,userGroupCode',
                   
                     ]);
              
                      if ($validator->fails()) {
                       
                        return redirect()->back()->withErrors($validator)->withInput();
                                
                              }
                       else{   
                $userGroupName=$input['userGroupName'];
                $userGroupCode=$input['userGroupCode'];
                $userGroupDescription=$input['userGroupDescription'];
                UserGroup::insert([
                        'userGroupName'=>$userGroupName,
                        'userGroupCode'=>$userGroupCode,
                        'userGroupDescription'=>$userGroupDescription,
                        'isActive'=>1,
                        'isDelete'=>0,
                        'created_at'=> date("Y-m-d H:i:s")]);
                        return redirect('/groupList')->with('message','Success! Your Data Updated Successfully'); 
              
                }     
    }
    public function updateGroup(Request $request) {
           
        $input=$request->all();
        $id=$input['userGroupID'];
                $userGroupName=$input['userGroupName'];
                $userGroupDescription=$input['userGroupDescription'];
                $userGroupCode=$input['userGroupCode'];
                UserGroup::where('userGroupID',$id)->update([
                    'userGroupName'=>$userGroupName,
                    'userGroupCode'=>$userGroupCode,
                    'userGroupDescription'=>$userGroupDescription,
                    'isDelete'=>0,
                    'created_at'=> date("Y-m-d H:i:s")
                        ]);
                        return redirect('/groupList')->with('message','Success! Your Data Updated Successfully'); 
              
    }
    public function groupList() {
        $user_group=UserGroup::where('isDelete',0)->get();
        return view('Users/Group/groupList')->with('user_group',$user_group);

    }
    public function deleteGroup($ID)
    {
            
        UserGroup::where('userGroupID', $ID)->update(['isDelete'=>1]);
        
              return redirect()->back()->with('message', 'Group Deleted Successfully');
      }
      public function activeGroup($ID)
      {
              
          UserGroup::where('userGroupID', $ID)->update(['isActive'=>1]);
          
                return redirect()->back()->with('message', 'Group Updated Successfully');
        }
        public function inactiveGroup($ID)
    {
            
        UserGroup::where('userGroupID', $ID)->update(['isActive'=>0]);
        
              return redirect()->back()->with('message', 'Group Updated Successfully');
      }
    //Permission 
    public function addPermission($ID) {
        $permission=Permissions::where('groupID',$ID)->first();
        $user_group=UserGroup::where('userGroupID',$ID)->first();
        $permission_data=array();
        if($permission==null)
        {
            $menus=Menus::get();
        }
        else
        {
            $menus=Menus::get(); 
           
            $permission_menu=Permissions::where('groupID',$ID)->select('menuID')->join('menus','menus.id','=','user_group_permission.menuID')->get();
           foreach($permission_menu as $permissions)
           {
               
                $permission_data[] = $permissions["menuID"];
           }
           
        }
     
             
        return view('Users/Permissions/addPermission')->with('menus',$menus)->with('user_group',$user_group)->with('permission_data',$permission_data)->with('permission',$permission);

    }
    public function submitPermission(Request $request) {
        $input=$request->all();
    
        $groupID=$input['groupID'];
        $menuID=$input['menuID'];
        // $subMenuID=$input['subMenuID'];
        $permission=Permissions::where('groupID',$groupID)->first();
        if($permission==null){
            foreach($menuID as $menu){
            
                         Permissions::create([
                        'groupID'=>$groupID,
                         'menuID'=>$menu,
                        //  'subMenuID'=>$subMenu,
                        
                         ]);
              
            }
        }
        else{
            $permission=Permissions::where('groupID',$groupID)->delete();
            foreach($menuID as $menu){
                Permissions::create([
                    'groupID'=>$groupID,
                     'menuID'=>$menu,
                    //  'subMenuID'=>$subMenu,
                    
                     ]);
               
            }
        }
       
        return redirect('/groupList')->with('message','Success! Your Data Updated Successfully'); 
              
               
          
            
       
       
    }
    public function subMenuAccess($ID) {
       
        $menu_arr = explode (",", $ID); 
        $data = SubMenus::select('*') ->whereIn('mainMenuID', $menu_arr)->get();
        return response()->json($data);
    }
    public function editPermission() {
        return view('Users/Permissions/editPermission');

    }
    public function logout() {
        Session::flush();
       
        return Redirect('/');
    }
}
