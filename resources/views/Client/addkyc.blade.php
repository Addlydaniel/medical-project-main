@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Kyc</h4>

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
                                  

                                    <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{URL('/submitKyc/' )}}">
																@csrf
                                                                    <div class="row">
																	<div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">UID No</label>
																				<input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
                                                                                <input type="text" class="form-control" id="UIDNo" name="UIDNo" placeholder="UID No" >
                                                                            </div>
                                                                    </div>
																	</div>
                                                                    <div class="row">
                                                                      
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">UID Front Image</label>
                                                                                <input type="file"  id="photo" name="UIDFrontUpload" required="true" >
                                                                            </div>
                                                                    </div>
                                                                       <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">UID Back Image</label>
                                                                                <input type="file"  id="photo1" name="UIDBackUpload" required="true" >
                                                                            </div>
                                                                    </div>
                                                                        
                                                                    </div>
																	<div class="row">
																	<div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Pan No</label>
                                                                                <input type="text" class="form-control" id="PanNo" name="PanNo" placeholder="Pan No">
																				
                                                                            </div>
                                                                        </div>
																	</div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Pan Frond Image</label>
                                                                                
																				  <input type="file"  id="photo2" name="PanFrontUpload" required="true" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Pan Back Image</label>
                                                                             
																				  <input type="file"  id="photo3" name="PanBackUpload" required="true" >
                                                                </div>  
                                                                </div>
																<div class="row">
																	<div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Voter ID</label>
                                                                                <input type="text" class="form-control" id="VoterID" name="VoterID" placeholder="Voter ID">
                                                                            </div>
                                                                        </div>
																	</div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Voter Front Image</label>
                                                                               
																				  <input type="file"  id="photo4" name="VoterFrontUpload" required="true" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Voter Back Image</label>
                                                                                
																				  <input type="file"  id="photo5" name="VoterBackUpload" required="true" >
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Ration ID</label>
                                                                                <input type="text" class="form-control" id="RationID" name="RationID" placeholder="Ration ID">
                                                                            </div>
                                                                        </div>
                                                                        </div>
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Ration Upload</label>
                                                                              
																				  <input type="file"  id="photo6" name="RationUpload" required="true" >
                                                                            </div>
                                                                        </div>
																		 <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Driving License Upload</label>
                                                                              
																				  <input type="file"  id="photo7" name="DrivingUpload" required="true" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                            <div class="modal-footer">
                                                            
                                                                 <div>
                     <a href="{{URL('/kycList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
                                            </div>
                                                            </div>
                                                        </form>
                                    </div>
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

