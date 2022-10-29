@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Income Detail</h4>

                  <div class="col-10">
               <a href="{{ URL('/addbasic/'.$id )}}"> <button type="button" class="btn btn-warning waves-effect waves-light">Basic Details</button></a>
               <a href="{{ URL('/addpersonal/'.$id )}}"> <button type="button" class="btn btn-primary waves-effect waves-light">Personal Details</button></a>
               <a href="{{ URL('/addfamily/'.$id )}}"> <button type="button" class="btn btn-danger waves-effect waves-light">Family Details</button></a>
               <a href="{{ URL('/addkyc/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">KYC Details</button></a>
               <a href="{{ URL('/addbank/'.$id )}}"> <button type="button" class="btn btn-info waves-effect waves-light">Bank Details</button></a>
               <a href="{{ URL('/addincome/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">Income Details</button></a>
                                    
                  

                </div>
              </div>
             
</div>
                       
                        <!-- end page title -->
                        @if ($errors->any())
			<div class="alert alert-warning">
			@foreach ($errors->all() as $error)
					
						<li>{{ $error }}</li>
						@endforeach	
					</div>
		@endif
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitIncome/' )}}">
																@csrf
                                                                     <div class="row">                                                                      
																			
													<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Nature and Source of Income</label>
														<input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
															<select class="form-select" name="IncomeNature" required="">
															<option selected>Select Income Source</option>
															<option value="Salaried">Salaried</option>
															<option value="Self Employed">Self Employed</option>
															<option value="Both">Both</option>
															</select>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Income Source</label>
															<select class="form-select" name="IncomeSource" required="">
															<option selected>Select Income Source</option>
															<option value="Income from Salaried">Income from Salaried</option>
															<option value="Income from Self Employed">Income from Self Employed</option>
															<option value="Rental Income">Rental Income</option>
															<option value="Other Sources">Other Sources</option>
															</select>
														</div>
													</div>
                                                                    </div>
                                                                  
															<div class="row">                                                                      
																			
													<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Wage Type</label>
															<select class="form-select" name="WageType" required="">
															<option selected>Select Income Source</option>
															<option value="Daily">Daily</option>
															<option value="Weekly">Weekly</option>
															<option value="Fortnightly">Fortnightly</option>
															<option value="Monthly">Monthly</option>
															<option value="Seasonal">Seasonal</option>
															</select>
														</div>
													</div>
													     </div>
                                                                  			
																	
																	
																
                                                                
																
														
                                                               
                                                                    
                                                              <div>
                     <a href="{{URL('/bankList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
                                            </div>
                                                        </form></div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-xl-2"></div>
                            <!-- end col -->

                          
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                       
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    
@endsection

