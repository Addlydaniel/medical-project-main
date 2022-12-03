<?php

namespace App\Http\Controllers;
use App\Models\Hospital;
use App\Models\Branch;


use Illuminate\Support\Facades\Http;
class HospitalController extends Controller
{

    public function hospitalDashboard() {
       
         return view('hospital/hospitalDashboard');
     }
     public function hospitalList() {
       
        return view('hospital/hospitalList');
    }
    public function doctorList() {
       
        return view('hospital/doctorList');
    }
    public function addDoctor() {
       
        return view('hospital/addDoctor');
    }
  
    public function addHospital() {
       $hospital=Hospital::get();
       $branch=Branch::get();
        return view('hospital/addHospital')->with('hospital',$hospital)->with('branch',$branch);
    }
   
   
    public function addbranch($ID) {
				 $branch=Branch::where('id',$ID)->get();
	   return view('hospital/addbranch')->with('branch',$branch)->with('id',$ID);
    }
        
       public function submitBranch(Request $request) {
					$input=$request->all();
					$validator = Validator::make($request->all(), [
					'address_line1' => 'required',
					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$address_line1=$input['address_line1'];
					$address_line2=$input['address_line2'];
					$branch_district=$input['branch_district'];
					$branch_state=$input['branch_state'];
					$branch_city=$input['branch_city'];
					Branch::insertGetId([
					'address_line1'=>$address_line1,
					'address_line2'=>$address_line2,
					'branch_district'=>$branch_district,
					'branch_state'=>$branch_state,
					'branch_city'=>$branch_city,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					}
				return redirect('/addHospital')->with('message','Success! Your Branch Added Successfully'); 



				}
	
}
