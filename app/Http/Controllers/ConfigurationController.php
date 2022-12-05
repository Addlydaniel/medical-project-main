<?php
namespace App\Http\Controllers;
use App\Models\Qualification;
use App\Models\Specialization;
use App\Models\Department;
use App\Models\Category;
use App\Models\HospitalCategory;
use App\Models\Banner;
use App\Models\City;
use App\Models\District;
use App\Models\BloodGroup;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
	//qualification function//
				public function qualificationList() 
				{
					$qualification=Qualification::get();
					return view('configuration/Qualification/qualificationList')->with('qualification',$qualification);
				}
				public function qualificationapi() 
				{
					$data=Qualification::get();
					return response()->json(['data'=>$data]);
				}
				
				public function addQualification() 
				{
					return view('configuration/Qualification/addQualification');
				}
 
  
				public function submitQualification(Request $request) 
					{
					$input=$request->all();
					$validator = Validator::make($request->all(), [
					'qualification_name' => 'required',
					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$qualification_name=$input['qualification_name'];
					Qualification::insertGetId([
					'qualification_name'=>$qualification_name,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					}
				return redirect('/qualificationList')->with('message','Success! Your Qualification Added Successfully'); 



				}
				public function editQualification($ID) 
				{
					$qualification=Qualification::where([['id',$ID]])->first();

					return view('configuration/Qualification/editQualification')->with('qualification',$qualification);
				}
				public function updateQualification(Request $request) 
				{
					$input=$request->all();
					$validator = Validator::make($request->all(), [

					'qualification_name' => 'required',


					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$id=$input['id'];
					$qualification_name=$input['qualification_name'];
					Qualification::where('id',$id)->update([
					'qualification_name'=>$qualification_name,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					return redirect('/qualificationList')->with('message','Success! Your Qualification Updated Successfully'); 
					}         
				}
				public function deleteQualification($ID)
					{  
					Qualification::where('id', $ID)->delete();
					return redirect()->back()->with('message', 'Qualification Deleted Successfully');
					}
					
	//specialization function//
				public function specializationList() 
				{
					$specialization=Specialization::get();
					return view('configuration/Specialization/specializationList')->with('specialization',$specialization);
				}
				
				public function addSpecialization() 
				{
					return view('configuration/Specialization/addSpecialization');
				}
 
  
				public function submitSpecialization(Request $request) 
					{
					$input=$request->all();
					$validator = Validator::make($request->all(), [
					'specialization_name' => 'required',
					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$specialization_name=$input['specialization_name'];
					Specialization::insertGetId([
					'specialization_name'=>$specialization_name,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					}
				return redirect('/specializationList')->with('message','Success! Your Specialization Added Successfully'); 



				}
				public function editSpecialization($ID) 
				{
					$specialization=Specialization::where([['id',$ID]])->first();

					return view('configuration/Specialization/editSpecialization')->with('specialization',$specialization);
				}
				public function updateSpecialization(Request $request) 
				{
					$input=$request->all();
					$validator = Validator::make($request->all(), [

					'specialization_name' => 'required',


					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$id=$input['id'];
					$specialization_name=$input['specialization_name'];
					Specialization::where('id',$id)->update([
					'specialization_name'=>$specialization_name,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					return redirect('/specializationList')->with('message','Success! Your Specialization Updated Successfully'); 
					}         
				}
				public function deleteSpecialization($ID)
					{  
					Specialization::where('id', $ID)->delete();
					return redirect()->back()->with('message', 'Specialization Deleted Successfully');
					}
	 
	 //department function//
	 
	  public function departmentList() 
				{
					$department=Department::get();
					return view('configuration/Department/departmentList')->with('department',$department);
				}
				
				public function addDepartment() 
				{
					return view('configuration/Department/addDepartment');
				}
 
  
				public function submitDepartment(Request $request) 
					{
					$input=$request->all();
					$validator = Validator::make($request->all(), [
					'department_name' => 'required',
					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$department_name=$input['department_name'];
					Department::insertGetId([
					'department_name'=>$department_name,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					}
				return redirect('/departmentList')->with('message','Success! Your Department Added Successfully'); 



				}
				public function editDepartment($ID) 
				{
					$department=Department::where([['id',$ID]])->first();

					return view('configuration/Department/editDepartment')->with('department',$department);
				}
				public function updateDepartment(Request $request) 
				{
					$input=$request->all();
					$validator = Validator::make($request->all(), [

					'department_name' => 'required',


					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$id=$input['id'];
					$department_name=$input['department_name'];
					Department::where('id',$id)->update([
					'department_name'=>$department_name,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					return redirect('/departmentList')->with('message','Success! Your Department Updated Successfully'); 
					}         
				}
				public function deleteDepartment($ID)
					{  
					Department::where('id', $ID)->delete();
					return redirect()->back()->with('message', 'Department Deleted Successfully');
					}



  //category function//
  
   public function categoryList() 
				{
					$category=Category::get();
					return view('configuration/Category/categoryList')->with('category',$category);
				}
				
				public function addCategory() 
				{
					return view('configuration/Category/addCategory');
				}
 
  
				public function submitCategory(Request $request) 
					{
					$input=$request->all();
					$validator = Validator::make($request->all(), [
					'category_name' => 'required',
					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$category_name=$input['category_name'];
					$category_description=$input['category_description'];
					Category::insertGetId([
					'category_name'=>$category_name,
					'category_description'=>$category_description,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					}
				return redirect('/categoryList')->with('message','Success! Your Category Added Successfully'); 



				}
				public function editCategory($ID) 
				{
					$category=Category::where([['id',$ID]])->first();

					return view('configuration/Category/editCategory')->with('category',$category);
				}
				public function updateCategory(Request $request) 
				{
					$input=$request->all();
					$validator = Validator::make($request->all(), [

					'category_name' => 'required',


					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$id=$input['id'];
					$category_name=$input['category_name'];
					$category_description=$input['category_description'];
					Category::where('id',$id)->update([
					'category_name'=>$category_name,
					'category_description'=>$category_description,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					return redirect('/categoryList')->with('message','Success! Your Category Updated Successfully'); 
					}         
				}
				public function deleteCategory($ID)
					{  
					Category::where('id', $ID)->delete();
					return redirect()->back()->with('message', 'Category Deleted Successfully');
					}



//hospitalCategory//

 public function hospitalCategoryList() 
				{
					$hospital_category=HospitalCategory::get();
					return view('configuration/HospitalCategory/hospitalCategoryList')->with('hospital_category',$hospital_category);
				}
				
				public function addHospitalCategory() 
				{
					return view('configuration/HospitalCategory/addHospitalCategory');
				}
 
  
				public function submitHospitalCategory(Request $request) 
					{
					$input=$request->all();
					$validator = Validator::make($request->all(), [
					'hospital_category_name' => 'required',
					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$hospital_category_name=$input['hospital_category_name'];
					$hospital_category_description=$input['hospital_category_description'];
					$hospital_category_image=$input['hospital_category_image'];
					HospitalCategory::insertGetId([
					'hospital_category_name'=>$hospital_category_name,
					'hospital_category_description'=>$hospital_category_description,
					'hospital_category_image'=>$hospital_category_image,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					}
				return redirect('/hospitalCategoryList')->with('message','Success! Your HospitalCategory Added Successfully'); 



				}
				public function editHospitalCategory($ID) 
				{
					$hospital_category=HospitalCategory::where([['id',$ID]])->first();
					return view('configuration/HospitalCategory/editHospitalCategory')->with('hospital_category',$hospital_category);
				}
				public function updateHospitalCategory(Request $request) 
				{
					$input=$request->all();
					$validator = Validator::make($request->all(), [

					'hospital_category_name' => 'required',


					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$id=$input['id'];
					$hospital_category_name=$input['hospital_category_name'];
					$hospital_category_description=$input['hospital_category_name'];
					$hospital_category_image=$input['hospital_category_name'];
					HospitalCategory::where('id',$id)->update([
					'hospital_category_name'=>$hospital_category_name,
					'hospital_category_description'=>$hospital_category_description,
					'hospital_category_image'=>$hospital_category_image,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					return redirect('/hospitalCategoryList')->with('message','Success! Your Hospital Category Updated Successfully'); 
					}         
				}
				public function deleteHospitalCategory($ID)
					{  
					HospitalCategory::where('id', $ID)->delete();
					return redirect()->back()->with('message', 'Hospital Category Deleted Successfully');
					}
					
//banner function//
					public function bannerList() 
				{
					$banner=Banner::get();
					return view('configuration/Banner/bannerList')->with('banner',$banner);
				}
				
				public function addBanner() 
				{
					return view('configuration/Banner/addBanner');
				}
 
  
				public function submitBanner(Request $request) 
					{
					$input=$request->all();
					$validator = Validator::make($request->all(), [
					'banner_name' => 'required',
					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$banner_name=$input['banner_name'];
					Banner::insertGetId([
					'banner_name'=>$banner_name,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					}
				return redirect('/bannerList')->with('message','Success! Your Banner Added Successfully'); 



				}
				public function editBanner($ID) 
				{
					$banner=Banner::where([['id',$ID]])->first();

					return view('configuration/Banner/editBanner')->with('banner',$banner);
				}
				public function updateBanner(Request $request) 
				{
					$input=$request->all();
					$validator = Validator::make($request->all(), [

					'banner_name' => 'required',


					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$id=$input['id'];
					$banner_name=$input['banner_name'];
					Banner::where('id',$id)->update([
					'banner_name'=>$banner_name,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					return redirect('/bannerList')->with('message','Success! Your Banner Updated Successfully'); 
					}         
				}
				public function deleteBanner($ID)
					{  
					Banner::where('id', $ID)->delete();
					return redirect()->back()->with('message', 'Banner Deleted Successfully');
					}
	//bloodgroup//
	
	public function blood_groupList() 
				{
					$blood_group=BloodGroup::get();
					return view('configuration/BloodGroup/blood_groupList')->with('blood_group',$blood_group);
				}
				
				public function addBloodGroup() 
				{
					return view('configuration/BloodGroup/addBloodGroup');
				}
 
  
				public function submitBloodGroup(Request $request) 
					{
					$input=$request->all();
					$validator = Validator::make($request->all(), [
					'blood_group_name'=>'required',
					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$blood_group_name=$input['blood_group_name'];
					$blood_group_description=$input['blood_group_description'];
					BloodGroup::insertGetId([
					'blood_group_name'=>$blood_group_name,
					'blood_group_description'=>$blood_group_description,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					}
				return redirect('/blood_groupList')->with('message','Success! Your BloodGroup Added Successfully'); 



				}
				public function editBloodGroup($ID) 
				{
					$blood_group=BloodGroup::where([['id',$ID]])->first();

					return view('configuration/BloodGroup/editBloodGroup')->with('blood_group',$blood_group);
				}
				public function updateBloodGroup(Request $request) 
				{
					$input=$request->all();
					$validator = Validator::make($request->all(), [

					'blood_group_name' => 'required',


					]);

					if ($validator->fails()) {
					return redirect()->back()->withErrors($validator)->withInput();

					}
					else{
					$id=$input['id'];
					$blood_group_name=$input['blood_group_name'];
					$blood_group_description=$input['blood_group_description'];
					BloodGroup::where('id',$id)->update([
					'blood_group_name'=>$blood_group_name,
					'blood_group_description'=>$blood_group_description,
					'created_at'=> date("Y-m-d H:i:s")
					]);
					return redirect('/blood_groupList')->with('message','Success! Your BloodGroup Updated Successfully'); 
					}         
				}
				public function deleteBloodGroup($ID)
					{  
					BloodGroup::where('id', $ID)->delete();
					return redirect()->back()->with('message', 'BloodGroup Deleted Successfully');
					}
	//city
	
	
				public function cityList()
				{
				$city=City::get();
				return view('configuration/City/cityList')->with('city',$city);
				}

				public function addCity()
				{
				return view('configuration/City/addCity');
				}
				 
				 
				public function submitCity(Request $request)
				{
				$input=$request->all();
				$validator = Validator::make($request->all(), [
				'city_name' => 'required',
				'district_name' => 'required',
				]);

				if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();

				}
				else{
				$city_name=$input['city_name'];
				$district_name=$input['district_name'];
				City::insertGetId([
				'city_name'=>$city_name,
				'district_name'=>$district_name,
				'created_at'=> date("Y-m-d H:i:s")
				]);
				}
				return redirect('/cityList')->with('message','Success! Your City Added Successfully');



				}
				public function editCity($ID)
				{
				$city=City::where([['id',$ID]])->first();

				return view('configuration/City/editCity')->with('city',$city);
				}
				public function updateCity(Request $request)
				{
				$input=$request->all();
				$validator = Validator::make($request->all(), [

				'city_name' => 'required',


				]);

				if ($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();

				}
				else{
				$id=$input['id'];
				$city_name=$input['city_name'];
				$district_name=$input['district_name'];
				City::where('id',$id)->update([
				'city_name'=>$city_name,
				'district_name'=>$district_name,
				'created_at'=> date("Y-m-d H:i:s")
				]);
				return redirect('/cityList')->with('message','Success! Your City Updated Successfully');
				}        
				}
				public function deleteCity($ID)
				{  
				City::where('id', $ID)->delete();
				return redirect()->back()->with('message', 'City Deleted Successfully');
				}
}						