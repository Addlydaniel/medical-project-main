<?php

namespace App\Http\Controllers;
use Hash;
use App\Models\User;
use App\Models\UserGroup;
use App\Models\Profile;
use App\Models\Permissions;
use App\Models\Division;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Token;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use Session;

class TokenController extends Controller
{

   
	 
	 
     public function tokenList() {
        return view('token_management/tokenList');

    }
	  public function addToken() {
         return view('token_management/addToken');

    }
    public function saveUserGroupData(Request $request)
    {
        $validated = $request->validate([
            'user_group_name' => 'required',
            'user_group_code' => 'required',
        ]);
        if ($validated) {
            $userGroupData = [
                'user_group_name' => $request->user_group_name,
                'user_group_code' => $request->user_group_code,
                'is_delete' => 0,
            ];

            if($request->crude==1) {
                $userGroupData['created_at'] =date('Y-m-d h:i:s');
              
                $cond = [
                    [DB::raw('upper(user_group_code)'),strtoupper($request->user_group_code)],
                    ['is_delete',0],
                ];

                $getId=getAfeild("id","user_group",$cond);

                if($getId) {
                    return [ 'status'=>4, 'message'=>"User Group already exist" ];
                } else {
                    $userGroup = DB::table('user_group')->insert($userGroupData);

                 


                    if ($userGroup) {
                        return [ 'status'=>1, 'message'=>"Saved Successfully" ];
                        // echo 1; //save success
                    } else{
                        return [ 'status'=>3, 'message'=>"Failed to save" ];
                    }
                }
            } else if($request->crude==2){
                $userGroupData['updated_at'] =date('Y-m-d h:i:s');
                $cond=array(
                    array(DB::raw('upper(user_group_code)'),strtoupper($request->user_group_code)),
                    array('is_delete',0),
                    array('id','!=',$request->usergroup_id)
                );

                $getId=getAfeild("id","user_group",$cond);

                if ($getId) {
                    return [ 'status'=>4, 'message'=>"User Group already exist" ];
                } else {
                    DB::table('user_group')->whereId($request->usergroup_id)->update($userGroupData);

                  

                    return [ 'status'=>1, 'message'=>"Data updated Successfully" ];
                }
            }
        } else{
            echo 2;
        }

    }

    /**
     *
     * get products
     */
    public function getUserGroupData()
    {
        $filldata= DB::table('user_group')->select('*')
            ->where('is_delete',0)
            ->get();
         
        $output = array(
            "recordsTotal" => count($filldata),
            "recordsFiltered" => count($filldata),
            "data" => $filldata
        );
        echo json_encode($output);
    }
	
	
	
	    
     public function profileList() {
        return view('user_management/profileList');

    }
    public function saveUserData(Request $request)
    {
        $validated = $request->validate([
            'profile_name' => 'required',
            'profile_code' => 'required',
            'profile_designation' => 'required',
            'profile_email' => 'required',
            'profile_user_group' => 'required',
        ]);
        if ($validated) {
            $userData = [
                'profile_name' => $request->profile_name,
                'profile_code' => $request->profile_code,
                'profile_designation' => $request->profile_designation,
                'profile_email' => $request->profile_email,
                'is_delete' => 0,
            ];

            if($request->crude==1) {
                $userData['created_at'] =date('Y-m-d h:i:s');
              
                $cond = [
                    [DB::raw('upper(profile_code)'),strtoupper($request->profile_code)],
                    ['is_delete',0],
                ];

                $getId=getAfeild("id","profile",$cond);

                if($getId) {
                    return [ 'status'=>4, 'message'=>"User already exist" ];
                } else {
                    $user = DB::table('profile')->insert($userData);

                 


                    if ($userGroup) {
                        return [ 'status'=>1, 'message'=>"Saved Successfully" ];
                        // echo 1; //save success
                    } else{
                        return [ 'status'=>3, 'message'=>"Failed to save" ];
                    }
                }
            } else if($request->crude==2){
                $userData['updated_at'] =date('Y-m-d h:i:s');
                $cond=array(
                    array(DB::raw('upper(profile_code)'),strtoupper($request->profile_code)),
                    array('is_delete',0),
                    array('id','!=',$request->user_id)
                );

                $getId=getAfeild("id","profile",$cond);

                if ($getId) {
                    return [ 'status'=>4, 'message'=>"User already exist" ];
                } else {
                    DB::table('profile')->whereId($request->user_id)->update($userData);

                  

                    return [ 'status'=>1, 'message'=>"Data updated Successfully" ];
                }
            }
        } else{
            echo 2;
        }

    }

    /**
     *
     * get products
     */
    public function getUserData()
    {
        $filldata= DB::table('profile')->select('*')
            ->where('is_delete',0)
            ->get();
         
        $output = array(
            "recordsTotal" => count($filldata),
            "recordsFiltered" => count($filldata),
            "data" => $filldata
        );
        echo json_encode($output);
    }
    public function hospitalList() {
        return view('hospital_management/hospitalList');

    }
  
   
}
