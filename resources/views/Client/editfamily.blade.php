

      @extends('layout')

@section('content')    

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Family Details</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4"></h4>

                                        <div id="basic-example">
                                            <!-- Client Details -->
                                             <h3>Family Details</h3>
                                            <section>
                                                
                                                    <form  class="form-horizontal" method="post" action="{{ URL('/updateFamily/' )}}">
													 @csrf
													 
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Members Name</label>
																				<input type="hidden" class="form-control" id="basicpill-lastname-input" name="id" value="{{$id}}" placeholder="Members Name" required="">
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="clientID" value="{{$family->id}}" placeholder="Members Name" required="">
                                                                                <input type="text" class="form-control" id="MemberName"  value="{{$family->MemberName}}" placeholder="Members Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Gender</label>
                                                                                 <select class="form-select" value="{{$family->Gender}}" required="">
                                                                         <option value="Male" {{ $family->Gender == 'Male' ? 'selected' : ''}}>Male</option>
																		   <option value="Female" {{ $family->Gender == 'Female' ? 'selected' : ''}}>Female</option>
																		   <option value="Third Gender" {{ $family->Gender == 'Third Gender' ? 'selected' : ''}}>Third Gender</option>
                                                                          
                                                                    </select>
																	</div>
                                                                        </div>
                                                                        
                                                                    </div>
                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">DOB</label>
                                                                                <input type="date" class="form-control" id="DOB" value="{{$family->DOB}}" placeholder="DOB">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            
																<div class="mb-3">
														<label for="formrow-firstname-input" class="form-label">Relation to the client</label>

														<select class="form-select"  name="ClientRelation" id="ClientRelation" required="">
														<option  value="0" selected>Choose...</option>
														@foreach($relationship as $relationship_data)

														<option  value="{{$relationship_data->id}}" {{($family->ClientRelation == $relationship_data->id) ? 'selected' : ''}}>{{$relationship_data->RelationshipName}}</option>

														@endforeach
														</select>
														</div>
                                                                </div>
                                                                </div>

                                                     <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Occupation</label>
                                                                                <input type="text" class="form-control" id="Occupation" value="{{$family->Occupation}}" placeholder="Occupation">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Average Monthly Income</label>
                                                                                <input type="text" class="form-control" id="AvgMonthlyIncome" value="{{$family->AvgMonthlyIncome}}" placeholder="Average Monthly Income">
                                                                            </div>
                                                                        </div>
                                                   <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Highest Qualification</label>
                                                                                <input type="text" class="form-control" id="HighestQualification" value="{{$family->HighestQualification}}" placeholder="Highest Qualification">
                                                                            </div>
                                                                        </div>
                                                                       
                                                                </div>
                                                                    
														
														
														
														<br>
														
														
													
													<div>
															
                     <a href="{{URL('/clientList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
                                            </div>
                                                </form>
												
                                            </section>

											
											
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                      
                        <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
            </div>
            <!-- end main content-->
@endsection