<?php

namespace App\Http\Controllers;
use App\Models\Hospital;
use App\Models\Branch;
use App\Models\Doctor;


use Illuminate\Support\Facades\Http;
class DoctorController extends Controller
{

   
     public function doctorList() {
       
        return view('doctor/doctorList');
    }
    
    public function addDoctor() {
       
        return view('hospital/addDoctor');
    }
	  public function viewDoctor() {
       
        return view('hospital/viewDoctor');
    }
  
    // public function addHospital() {
       // $hospital=Hospital::get();
       // $branch=Branch::get();
        // return view('hospital/addHospital')->with('hospital',$hospital)->with('branch',$branch);
    // }
   
   
    // public function addbranch($ID) {
				 // $branch=Branch::where('hospital_id',$ID)->get();
	   // return view('hospital/addbranch')->with('branch',$branch)->with('id',$ID);
    // }
        
       // public function submitBranch(Request $request) {
		  

        
				// $input=$request->all();
             
								
								 // $hospital_id=$input['hospital_id'];
                                // $address_line1=$input['address_line1'];
                                // $address_line2=$input['address_line2'];
                                // $branch_district=$input['branch_district'];
                                // $branch_state=$input['branch_state'];
                                // $branch_city=$input['branch_city'];
                              
								// Branch::insert([
												// 'FamilyID'=>$FamilyID,
                                                // 'address_line1'=>$address_line1,
                                                // 'address_line2'=>$address_line2,
                                                // 'branch_district'=>$branch_district,
                                                // 'branch_state'=>$branch_state,
                                                // 'branch_city'=>$branch_city,
                                                // 'is_delete'=>0,
												
												// ]);
          
 // return redirect('/addhospital'.'/'.$hospital_id)->with('message','Success!  Added Successfully');  		  
    // }

}
