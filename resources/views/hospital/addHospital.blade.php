@extends('layout')

@section('content')<div class="container-fluid">
               <div class="row">
               
                 
                  <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Doctor Information</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                 <div class="row">
                                    <div class="form-group col-md-4">
                                       <label for="fname">Hospital Name:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="Hospital Name">
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="lname">Phone:</label>
                                       <input type="text" class="form-control" id="lname" placeholder="phone">
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="add1">Mail:</label>
                                       <input type="mail" class="form-control" id="add1" placeholder="....@gmail.com">
                                    </div>
                                    <div class="form-group col-md-4">
                                       <label for="add2">Address :</label>
                                       <input type="text" class="form-control" id="add2" placeholder=" Address ">
                                    </div>
                                    
                                    <div class="form-group col-sm-6">
                                       <label>Category:</label>
                                       <select class="form-control" id="selectcountry">
                                          <option>Select Country</option>
                                          <option>Caneda</option>
                                          <option>Noida</option>
                                          <option>USA</option>
                                          <option>India</option>
                                          <option>Africa</option>
                                       </select>
                                    </div>
                                    </div>
                                
                                 
                                 <div class="form-group col-md-4">
									<div class="col-2">

									<button type="button" data_id='{{$id}}' class="myModal_btn btn btn-primary waves-effect waves-light"
									data-bs-toggle="modal" id="">Add Branch</button>

									</div>
                      
								 
								                 <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Branch
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="form-horizontal" method="post" action="{{ URL('/submitBranch/' )}}">
																@csrf
                                                                   
                                                    	           
														<div class="row">
															<div class="col-lg-6">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Address line 1</label>
																<input type="hidden" class="form-control" id="hospital_id" value="{{$id}}"name="hospital_id">
																<input type="text" class="form-control" id="address_line1" name="address_line1" placeholder="Address line 1">
																</div>
															</div>
															
																<div class="col-lg-6">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Address line 2</label>
																<input type="text" class="form-control" id="address_line2" name="address_line2" placeholder="Address line 2">
																</div>
															</div>
														</div>
														
															 
                                                            <div class="modal-footer">
                                                            
                                                                <button  id="intermidiateBtn"
                                                                    class="btn btn-primary waves-effect waves-light">Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>  											

								 
								 
                                 <button type="submit" class="btn btn-primary">Add Doctor</button>
								  </div>
								  <div class="form-group col-md-4">
                                 <button type="submit" class="btn btn-success">submit</button>
								  </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			
			<script>

$(document).ready(function(){
       $('.myModal_btn').click(function(e){
          
           e.preventDefault();
      
          $("#applicantID3").val( $(this).attr('data_id'));
           $('#myModal').modal('show');
       })
    })
	
	</script>
    
	
            @endsection
			
			