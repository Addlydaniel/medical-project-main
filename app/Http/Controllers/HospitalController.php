<?php

namespace App\Http\Controllers;
use App\Models\Hospital;
use App\Models\Branch;
use App\Models\Hos;
use App\Models\City;
use App\Models\District;
use App\Models\Doctor;
use App\Models\HospitalCategory;
use Illuminate\Http\Request;

use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Http;
class HospitalController extends Controller
{

    public function hospitalDashboard() {
       
         return view('hospital/hospitalDashboard');
     }
     public function hospitalList() {
		  $hos=Hos::where([['is_delete',0]])->select('hos.id as hosId','hos_name','hos_phone','hos_mail','hos_location')->get();
        
       
        return view('hospital/hospitalList')->with('hos',$hos);
    }
    public function doctorList() {
       
        return view('hospital/doctorList');
    }
   
    public function addHospital() {
       $hos=Hos::get();
       //$branch=Branch::get();
       $city=City::get();
       $district=District::get();
       $hospital_category=HospitalCategory::get();
	  
        return view('hospital/addHospital')->with('hos',$hos)->with('city',$city)->with('district',$district)->with('hospital_category',$hospital_category);
    }
    public function submitHos(Request $request) 
	{
		$input=$request->all();
		$validator = Validator::make($request->all(), [
		'hos_name' => 'required',
		]);

		if ($validator->fails()) {
		return redirect()->back()->withErrors($validator)->withInput();

		}
		else{
		$hos_name=$input['hos_name'];
		$hos_phone=$input['hos_phone'];
		$hos_mail=$input['hos_mail'];
		$hos_city=$input['hos_city'];
		$hos_street=$input['hos_street'];
		$hos_district=$input['hos_district'];
		$hos_pincode=$input['hos_pincode'];
		$hos_emergency_contact=$input['hos_emergency_contact'];
		$hos_reg_date=$input['hos_reg_date'];
		$hos_reg_time=$input['hos_reg_time'];
		$hos_location=$input['hos_location'];
		$hos_category=$input['hos_category'];
		Hos::insertGetId([
		'hos_name'=>$hos_name,
		'hos_phone'=>$hos_phone,
		'hos_mail'=>$hos_mail,
		'hos_city'=>$hos_city,
		'hos_street'=>$hos_street,
		'hos_district'=>$hos_district,
		'hos_pincode'=>$hos_pincode,
		'hos_emergency_contact'=>$hos_emergency_contact,
		'hos_reg_date'=>$hos_reg_date,
		'hos_reg_time'=>$hos_reg_time,
		'hos_location'=>$hos_location,
		'hos_category'=>$hos_category,
		'created_at'=> date("Y-m-d H:i:s")
		]);
		}
	return redirect('/hospitalList')->with('message','Success! Your Hospital Added Successfully'); 



	}
	 public function addDoctor() {
       
        return view('hospital/addDoctor');
    }
  
	public function submitDoctor(Request $request) {
			$input=$request->all();
			$ins=[
				'doctor_name'=>$input['doctor_name'],
				'doctor_education'=>$input['doctor_education'],
				'created_at'=> date("Y-m-d H:i:s")
			];
			Doctor::insert($ins);
			return response()->json(['success'=>'data updated']);
			}	
	public function deleteDoctor($ID) {
		

			Doctor::where('id',$ID)->delete();
			return response()->json(['success'=>'data updated']);
			}
	public function getDoctor(Request $request) {

			$data=Doctor::get();
		return response()->json($data);
		}	
	   
		
	public function addBranch() {
		
        $district=District::get();
        return view('hospital/addBranch')->with('district',$district);
    }
  
	public function submitBranch(Request $request) {
			$input=$request->all();
			$ins=[
				'address_line1'=>$input['address_line1'],
				'address_line2'=>$input['address_line2'],
				'created_at'=> date("Y-m-d H:i:s")
			];
			Branch::insert($ins);
			return response()->json(['success'=>'data updated']);
			}	
	public function deleteBranch($ID) {
		

			Branch::where('id',$ID)->delete();
			return response()->json(['success'=>'data updated']);
			}
	public function getBranch(Request $request) {

			$data=Branch::get();
		return response()->json($data);
		}	
	   
			
			
			// public function submitBranch(Request $request) {
						// $input=$request->all();
						// $validator = Validator::make($request->all(), [
						// 'address_line1' => 'required',
						// ]);

						// if ($validator->fails()) {
						// return redirect()->back()->withErrors($validator)->withInput();

						// }
						// else{
						// $address_line1=$input['address_line1'];
						// $address_line2=$input['address_line2'];
						// $branch_district=$input['branch_district'];
						// $branch_state=$input['branch_state'];
						// $branch_city=$input['branch_city'];
						// Branch::insertGetId([
						// 'address_line1'=>$address_line1,
						// 'address_line2'=>$address_line2,
						// 'branch_district'=>$branch_district,
						// 'branch_state'=>$branch_state,
						// 'branch_city'=>$branch_city,
						// 'created_at'=> date("Y-m-d H:i:s")
						// ]);
						// }
					// return redirect('/addHospital')->with('message','Success! Your Branch Added Successfully'); 



					// }

	
		
}