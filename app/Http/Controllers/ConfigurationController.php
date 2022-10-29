<?php
namespace App\Http\Controllers;
use App\Models\LoanService;
use App\Models\Scheme;
use App\Models\Document;
//use App\Models\DocumentType;
use App\Models\LoanCategory;
use App\Models\SchemeType;
use App\Models\OfficerName;
use App\Models\Relationship;
use App\Models\Employers;

use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
   public function serviceList() {
        $service=LoanService::get();
     return view('Configuration/Service/serviceList')->with('service',$service);
   }
   public function addService() {
          return view('Configuration/Service/addService');
     }
 
  
   public function submitService(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
                'serviceName' => 'required',
                 ]);
          
                  if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                            
                          }
                          else{
                                $serviceName=$input['serviceName'];
                                $serviceCode=$input['serviceCode'];
                                $serviceDescription=$input['serviceDescription'];
                                LoanService::insertGetId([
                                                'serviceName'=>$serviceName,
                                                'serviceCode'=>$serviceCode,
                                                'serviceDescription'=>$serviceDescription,
                                                'created_on'=> date("Y-m-d H:i:s")
												]);
                                }
                        return redirect('/serviceList')->with('message','Success! Your District Updated Successfully'); 
               
               
                        
    }
   public function editService($ID) {
        $service=LoanService::where([['id',$ID]])->first();
       
       return view('Configuration/Service/editService')->with('service',$service);
   }
   public function updateService(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
          'serviceCode' => 'required|unique:loan_service,serviceCode,'.$input["id"],
           
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                        $id=$input['id'];
                        $serviceName=$input['serviceName'];
                        $serviceCode=$input['serviceCode'];
                        $serviceDescription=$input['serviceDescription'];
                        LoanService::where('id',$id)->update([
                                   'serviceName'=>$serviceName,
                                   'serviceCode'=>$serviceCode,
                                   'serviceDescription'=>$serviceDescription,
                                   'created_on'=> date("Y-m-d H:i:s")
						]);
                                        return redirect('/serviceList')->with('message','Success! Your District Updated Successfully'); 
                      }         
    }
   public function deleteService($ID)
   {  
            LoanService::where('id', $ID)->delete();
               return redirect()->back()->with('message', 'Material Deleted Successfully');
     }
     public function categoryList() {
          $category=LoanCategory::get();
       return view('Configuration/Category/categoryList')->with('category',$category);
     }
     public function addCategory() {
            return view('Configuration/Category/addCategory');
       }
   
    
     public function submitCategory(Request $request) {
          $input=$request->all();
          $validator = Validator::make($request->all(), [
               'loanCode' => 'required|unique:loan_category,loanCode',
                   ]);
            
                    if ($validator->fails()) {
                      return redirect()->back()->withErrors($validator)->withInput();
                              
                            }
                            else{
                                  $loanName=$input['loanName'];
                                  $loanCode=$input['loanCode'];
                                  $loanDescription=$input['loanDescription'];
                                  LoanCategory::insertGetId([
                                                  'loanName'=>$loanName,
                                                  'loanCode'=>$loanCode,
                                                  'loanDescription'=>$loanDescription,
                                                  'created_on'=> date("Y-m-d H:i:s")
                                                              ]);
                                  }
                          return redirect('/categoryList')->with('message','Success! Your District Updated Successfully'); 
                 
                 
                          
      }
     public function editCategory($ID) {
          $category=LoanCategory::where([['id',$ID]])->first();
         
         return view('Configuration/Category/editCategory')->with('category',$category);
     }
     public function updateCategory(Request $request) {
          $input=$request->all();
          $validator = Validator::make($request->all(), [
            'loanCode' => 'required|unique:loan_category,loanCode,'.$input["id"],
               ]);
        
                if ($validator->fails()) {
                  return redirect()->back()->withErrors($validator)->withInput();
                          
                        }
                        else{
                          $id=$input['id'];
                          $loanName=$input['loanName'];
                              $loanCode=$input['loanCode'];
                         $loanDescription=$input['loanDescription'];
                         LoanCategory::where('id',$id)->update([
                                     'loanName'=>$loanName,
                                     'loanCode'=>$loanCode,
                                     'loanDescription'=>$loanDescription,
                                     'created_on'=> date("Y-m-d H:i:s")
                                ]);
                                          return redirect('/categoryList')->with('message','Success! Your District Updated Successfully'); 
                        }         
      }
     public function deleteCategory($ID)
     {  
          LoanCategory::where('id', $ID)->delete();
                 return redirect()->back()->with('message', 'Material Deleted Successfully');
       }
       public function schemeList() {
          $scheme=Scheme::select('scheme.id as id','schemeName','schemeCode','loanName','tenture','monthlyPaid','interest','totalAmount','interest_value','scheme_type_name')->join('loan_category', 'loan_category.id', '=', 'scheme.loanCategory')->join('scheme_type', 'scheme_type.value', '=', 'scheme.schemeMethod')->get(); ;
          
          return view('Configuration/Scheme/schemeList')->with('scheme',$scheme);
     }
     public function viewLoanData($ID) {
          $data=Scheme::where('scheme.id',$ID)->select('scheme.id as id','schemeName','schemeCode','loanName','tenture','monthlyPaid','interest','totalAmount','interest_value','scheme_type_name')->join('loan_category', 'loan_category.id', '=', 'scheme.loanCategory')->join('scheme_type', 'scheme_type.value', '=', 'scheme.schemeMethod')->get(); ;
          
          return response()->json($data);
     }

     public function addScheme() {
        $loan_category=LoanCategory::get();
        $scheme_type=SchemeType::get();
            return view('Configuration/Scheme/addScheme')->with('loan_category',$loan_category)->with('scheme_type',$scheme_type);
       }
   
    
    public function submitScheme(Request $request) {
          $input=$request->all();
        
          $validator = Validator::make($request->all(), [
                  'schemeName' => 'required',
                  'tenture' => 'required',
                  'interest' => 'required',
                  'totalAmount' => 'required',
                  'loanCategory' => 'required|not_in:0',
                  'schemeMethod' => 'required|not_in:0',
                   ]);
            
                    if ($validator->fails()) {
                      return redirect()->back()->withErrors($validator)->withInput();
                              
                            }
                            else{
                               
                                
                                   $monthlyPaid = (($input['interest'] /(100 * $input['schemeMethod'])) * $input['totalAmount']) / (1 - pow(1 + $input['interest'] /(100 * $input['schemeMethod']),  (-$input['tenture'])));
                                   $monthlyPaid =round($monthlyPaid);
                                   $total =round($monthlyPaid) * $input['tenture'];
                                   $interest_value= $total-$input['totalAmount'];
                                  $schemeName=$input['schemeName'];
                                  $schemeCode=$input['schemeCode'];
                                  $totalAmount=$input['totalAmount'];
                                  $loanCategory=$input['loanCategory'];
                                  $schemeMethod=$input['schemeMethod'];
                                  $tenture=$input['tenture'];
                                  $interest=$input['interest'];
                                  Scheme::insertGetId([
                                                  'interest_value'=>$interest_value,
                                                  'monthlyPaid'=>$monthlyPaid,
                                                  'schemeName'=>$schemeName,
                                                  'schemeCode'=>$schemeCode,
                                                  'totalAmount'=>$totalAmount,
                                                  'tenture'=>$tenture,
                                                  'interest'=>$input['interest'],
                                                  'loanCategory'=>$loanCategory,
                                                  'schemeMethod'=>$schemeMethod,
                                                  'created_on'=> date("Y-m-d H:i:s"),
												  'isDelete'=> 0
                                                              ]);
                                  }
                          return redirect('/schemeList')->with('message','Success! Your Scheme Added Successfully'); 
                 
                 
                          
      }
     public function editScheme($ID) {
          $scheme=Scheme::where([['id',$ID]])->first();
          $loan_category=LoanCategory::get();
        $scheme_type=SchemeType::get();
         return view('Configuration/Scheme/editScheme')->with('scheme',$scheme)->with('loan_category',$loan_category)->with('scheme_type',$scheme_type);
     }
     public function updateScheme(Request $request) {
          $input=$request->all();
          $validator = Validator::make($request->all(), [
               'schemeName' => 'required',
               'tenture' => 'required',
               'interest' => 'required',
               'loanCategory' => 'required|not_in:0',
               ]);
        
                if ($validator->fails()) {
                  return redirect()->back()->withErrors($validator)->withInput();
                          
                        }
                        else{
                          $id=$input['id'];
//$interest_value=$input['interest']/100;
//$main_value=$input['totalAmount']+$interest_value;

//$total = $input['totalAmount'] * (pow((1 + $input['interest'] / 100),$input['schemeMethod']));

//$monthlyPaid=$total/$input['tenture'];
								$monthlyPaid = (($input['interest'] /(100 * $input['schemeMethod'])) * $input['totalAmount']) / (1 - pow(1 + $input['interest'] /(100 * $input['schemeMethod']),  (-$input['tenture'])));
								$monthlyPaid =round($monthlyPaid);
								$total =round($monthlyPaid) * $input['tenture'];
								$interest_value= $total-$input['totalAmount'];
                         $schemeName=$input['schemeName'];
                         $schemeCode=$input['schemeCode'];
                         $totalAmount=$input['totalAmount'];
                         $schemeMethod=$input['schemeMethod'];
                         $tenture=$input['tenture'];
                         $interest=$input['interest'];
                         $loanCategory=$input['loanCategory'];
                          Scheme::where('id',$id)->update([
                              'interest_value'=>$interest_value,
                              'monthlyPaid'=>$monthlyPaid,
                              'schemeName'=>$schemeName,
                              'schemeCode'=>$schemeCode,
                              'totalAmount'=>$totalAmount,
                              'tenture'=>$tenture,
                              'interest'=>$interest,
                              'loanCategory'=>$loanCategory,
                              'schemeMethod'=>$schemeMethod,
                                ]);
                                          return redirect('/schemeList')->with('message','Success! Your District Updated Successfully'); 
                        }         
      }
		 public function deleteScheme($ID)
		{  
			  Scheme::where('id', $ID)->delete();
					 return redirect()->back()->with('message', 'Material Deleted Successfully');
		}
	  
	    
	    public function documentList() {
          $document=Document::get();
       return view('Configuration/Document/documentList')->with('document',$document);
     }
	
	  public function addDocument() {
			
			
            return view('Configuration/Document/addDocument');
       }
   
   
    
     public function submitDocument(Request $request) {
          $input=$request->all();
          $validator = Validator::make($request->all(), [
                  'documentName' => 'required',
                  'documentSize' => 'required',
                   ]);
            
                    if ($validator->fails()) {
                      return redirect()->back()->withErrors($validator)->withInput();
                              
                            }
                            else{
                               
                                  
                                  $documentName=$input['documentName'];
                                  $documentExtension=$input['documentExtension'];
                                  $documentSize=$input['documentSize'];
                                  Document::insertGetId([
                                                  'documentName'=>$documentName,
                                                  'documentExtension'=>$documentExtension,
                                                  'documentSize'=>$documentSize,
                                                  'created_on'=> date("Y-m-d H:i:s")
                                                              ]);
                                  }
                          return redirect('/documentList')->with('message','Success! Your Document Updated Successfully'); 
                 
                 
                          
      }
     public function editDocument($ID) {
          $document=Document::where([['id',$ID]])->first();
         
         return view('Configuration/Document/editDocument')->with('document',$document);
     }
     public function updateDocument(Request $request) {
          $input=$request->all();
          $validator = Validator::make($request->all(), [
            'documentName' => 'required',
               ]);
        
                if ($validator->fails()) {
                  return redirect()->back()->withErrors($validator)->withInput();
                          
                        }
                        else{
                          $id=$input['id'];
                          $documentName=$input['documentName'];
                              $documentExtension=$input['documentExtension'];
                         $documentSize=$input['documentSize'];
                         Document::where('id',$id)->update([
                                     'documentName'=>$documentName,
                                     'documentExtension'=>$documentExtension,
                                     'documentSize'=>$documentSize,
                                     'created_on'=> date("Y-m-d H:i:s")
                                ]);
                                          return redirect('/documentList')->with('message','Success! Your Document Updated Successfully'); 
                        }         
      }
     public function deleteDocument($ID)
     {  
          Document::where('id', $ID)->delete();
                 return redirect()->back()->with('message', 'Document Deleted Successfully');
       }
	   
       
      public function officerList()
	  {
        $officername=OfficerName::get();
     return view('Configuration/Officer/officerList')->with('officername',$officername);
   }
   public function addOfficer() {
          return view('Configuration/Officer/addOfficer');
     }
 
  
   public function submitOfficer(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
                'OfficerName' => 'required',
                 ]);
          
                  if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                            
                          }
                          else{
                                $OfficerName=$input['OfficerName'];
                                OfficerName::insertGetId([
                                                'OfficerName'=>$OfficerName,
                                                'created_on'=> date("Y-m-d H:i:s")
												]);
                                }
                        return redirect('/officerList')->with('message','Success! Your Officer Added Successfully'); 
               
               
                        
    }
   public function editOfficer($ID) {
        $officername=OfficerName::where([['id',$ID]])->first();
       
       return view('Configuration/Officer/editOfficer')->with('officername',$officername);
   }
   public function updateOfficer(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
           
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                        $id=$input['id'];
                        $OfficerName=$input['OfficerName'];
                        OfficerName::where('id',$id)->update([
                                   'OfficerName'=>$OfficerName,
                                   'created_on'=> date("Y-m-d H:i:s")
						]);
                                        return redirect('/officerList')->with('message','Success! Your District Updated Successfully'); 
                      }         
    }
   public function deleteOfficer($ID)
   {  
            OfficerName::where('id', $ID)->delete();
               return redirect()->back()->with('message', 'Material Deleted Successfully');
     } 
	 
	 
	   
       
      public function relationshipList()
	  {
        $relationship=Relationship::get();
     return view('Configuration/Relationship/relationshipList')->with('relationship',$relationship);
   }
   public function addRelationship() {
          return view('Configuration/Relationship/addRelationship');
     }
 
  
   public function submitRelationship(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
                'RelationshipName' => 'required',
                 ]);
          
                  if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                            
                          }
                          else{
                                $RelationshipName=$input['RelationshipName'];
                                Relationship::insertGetId([
                                                'RelationshipName'=>$RelationshipName,
                                                'created_on'=> date("Y-m-d H:i:s")
												]);
                                }
                        return redirect('/relationshipList')->with('message','Success! Your Relationship Added Successfully'); 
               
               
                        
    }
   public function editRelationship($ID) {
        $relationship=Relationship::where([['id',$ID]])->first();
       
       return view('Configuration/Relationship/editRelationship')->with('relationship',$relationship);
   }
   public function updateRelationship(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
           
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                        $id=$input['id'];
                        $RelationshipName=$input['RelationshipName'];
                        Relationship::where('id',$id)->update([
                                   'RelationshipName'=>$RelationshipName,
                                   'created_on'=> date("Y-m-d H:i:s")
						]);
                                        return redirect('/relationshipList')->with('message','Success! Your District Updated Successfully'); 
                      }         
    }
   public function deleteRelationship($ID)
   {  
            Relationship::where('id', $ID)->delete();
               return redirect()->back()->with('message', 'Material Deleted Successfully');
     } 
	 
	 
	 
	   
      public function employersList()
	  {
        $employers=Employers::get();
     return view('Configuration/Employer/employersList')->with('employers',$employers);
   }
   public function addEmployers() {
          return view('Configuration/Employer/addEmployers');
     }
 
  
   public function submitEmployers(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
                'EmployerName' => 'required',
                 ]);
          
                  if ($validator->fails()) {
                    return redirect()->back()->withErrors($validator)->withInput();
                            
                          }
                          else{
                                $EmployerName=$input['EmployerName'];
                                Employers::insertGetId([
                                                'EmployerName'=>$EmployerName,
                                                'created_on'=> date("Y-m-d H:i:s")
												]);
                                }
                        return redirect('/employersList')->with('message','Success! Your Employer Added Successfully'); 
               
               
                        
    }
   public function editEmployers($ID) {
        $employers=Employers::where([['id',$ID]])->first();
       
       return view('Configuration/Employer/editEmployers')->with('employers',$employers);
   }
   public function updateEmployers(Request $request) {
        $input=$request->all();
        $validator = Validator::make($request->all(), [
               
           
            
             ]);
      
              if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
                        
                      }
                      else{
                        $id=$input['id'];
                        $EmployerName=$input['EmployerName'];
                        Employers::where('id',$id)->update([
                                   'EmployerName'=>$EmployerName,
                                   'created_on'=> date("Y-m-d H:i:s")
						]);
                                        return redirect('/employersList')->with('message','Success! Your Employer Updated Successfully'); 
                      }         
    }
   public function deleteEmployers($ID)
   {  
            Employers::where('id', $ID)->delete();
               return redirect()->back()->with('message', 'Material Deleted Successfully');
     } 
	 
	 
}
