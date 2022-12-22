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
       
        return view('authentication/forgot_password');
    }
    public function dashboard() {
       
        return view('/dashboard');
    }
    
	public function userList() 
				{
					$user=User::get();
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
			$user_name=$input['user_name'];
			$user_phone=$input['user_phone'];
			$user_email=$input['user_email'];
			$user_address=$input['user_address'];
			User::insertGetId([
			'user_name'=>$user_name,
			'user_phone'=>$user_phone,
			'user_email'=>$user_email,
			//'user_role'=>$user_role,
			'created_at'=> date("Y-m-d H:i:s")
			]);
			
			if($input['user_role']==2){
				Doctor::insert([
					'doctor_name'=>$user_name,
					
					'doctor_mail'=>$user_email,
					'doctor_category'=>$input['visiting_time'],
					
					'created_at'=> date("Y-m-d H:i:s")
					]);
			}
			if($input['user_role']==3){
				Patient::insert([
					'patient_name'=>$user_name,
					
					'created_at'=> date("Y-m-d H:i:s")
					]);
			}
		}
		return redirect('/userList')->with('message','Success! Your User Added Successfully'); 

		}
	}