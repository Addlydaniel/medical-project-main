<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
class UserController extends Controller
{

    public function login() {
       
         return view('authentication/login');
     }
     public function forgotPassword() {
       
        return view('authentication/forgot_password')->get();
    }
    public function dashboard() {
       
        return view('/dashboard');
    }
	
    
	public function userList() 
				{
					$user=User::get();
					//dd($user);
					//$user=User::where(['user.is_delete',0])->select('role.id as RoleID','role.Role_name')->join('role', 'role.id', '=', 'user.user_role')->get();					
					return view('users/userList')->with('user',$user);
				}
    
    public function addUser() 
				{
					 $user=User::get();
					return view('users/addUser')->with('user',$user);
				}
	public function addAdmin() 
				{
					
					 $user=User::get();
					return view('users/addAdmin')->with('user',$user);
				}
 
  
	public function submitUser(Request $request) 
		{

		$input=$request->all();

		$validator = Validator::make($request->all(), [
		'user_role' => 'required|not_in:0',
		'user_name' => 'required',
		]);

		if ($validator->fails()) {
		return redirect()->back()->withErrors($validator)->withInput();

		}
		else{
			$user_role=$input['user_role'];
			$user_name=$input['user_name'];
			$user_phone=$input['user_phone'];
			$user_email=$input['user_email'];
			$user_address=$input['user_address'];
			$user_id=User::insertGetId([
			'user_role'=>$user_role,
			'user_name'=>$user_name,
			'user_phone'=>$user_phone,
			'user_email'=>$user_email,
			'user_address'=>$user_address,
			//'user_role'=>$user_role,
			'created_at'=> date("Y-m-d H:i:s")
			]);
			
			if($input['user_role']==2){
				Doctor::insert([
				'user_id'=>$user_id,
					'doctor_name'=>$doctor_name,					
					'doctor_mail'=>$doctor_mail,
					'doctor_category'=>$doctor_category,					
					'created_at'=> date("Y-m-d H:i:s")
					]);
			}
			if($input['user_role']==3){
				Patient::insert([
				'user_id'=>$user_id,
					'patient_name'=>$user_name,					
					'created_at'=> date("Y-m-d H:i:s")
					]);
			}
		}
		return redirect('/userList')->with('message','Success! Your User Added Successfully'); 

		}
	}