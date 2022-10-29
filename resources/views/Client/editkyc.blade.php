

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
                                    <h4 class="mb-sm-0 font-size-18">Bank Details</h4>

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
                                             <h3>Bank Details</h3>
                                            <section>
                                                
                                                    <form  class="form-horizontal" method="post" action="{{ URL('/updateKyc/' )}}">
													 	@csrf
                                                                    <div class="row">
																	<div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">UID No</label>
																				<input type="hidden" class="form-control" id="basicpill-lastname-input" name="id" value="{{$id}}" placeholder="UID No" required="">
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="clientID" value="{{$kyc->id}}" placeholder="UID No" required="">
                                                                                <input type="text" class="form-control" id="UIDNo" name="UIDNo" value="{{$kyc->UIDNo}}" placeholder="UID No" >
                                                                            </div>
                                                                    </div>
																	</div>
                                                                    <div class="row">
                                                                      
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">UID Front Image</label>
                                                                                <input type="file"  id="photo" value="{{$kyc->UIDFrontUpload}}" name="UIDFrontUpload" required="true" >
                                                                            </div>
                                                                    </div>
                                                                       <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">UID Back Image</label>
                                                                                <input type="file"  id="photo1" value="{{$kyc->UIDBackUpload}}" name="UIDBackUpload" required="true" >
                                                                            </div>
                                                                    </div>
                                                                        
                                                                    </div>
																	<div class="row">
																	<div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Pan No</label>
                                                                                <input type="text" class="form-control" value="{{$kyc->PanNo}}" id="PanNo" name="PanNo" placeholder="Pan No">
																				
                                                                            </div>
                                                                        </div>
																	</div>
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Pan Frond Image</label>
                                                                                
																				  <input type="file"  id="photo2" value="{{$kyc->PanFrontUpload}}" name="PanFrontUpload" required="true" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Pan Back Image</label>
                                                                             
																				  <input type="file"  id="photo3" value="{{$kyc->PanBackUpload}}" name="PanBackUpload" required="true" >
                                                                </div>  
                                                                </div>
																<div class="row">
																	<div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Voter ID</label>
                                                                                <input type="text" class="form-control" value="{{$kyc->VoterID}}" id="VoterID" name="VoterID" placeholder="Voter ID">
                                                                            </div>
                                                                        </div>
																	</div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Voter Front Image</label>
                                                                               
																				  <input type="file"  id="photo4" value="{{$kyc->VoterFrontUpload}}" name="VoterFrontUpload" required="true" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Voter Back Image</label>
                                                                                
																				  <input type="file"  id="photo5" value="{{$kyc->VoterBackUpload}}" name="VoterBackUpload" required="true" >
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Ration ID</label>
                                                                                <input type="text" class="form-control" value="{{$kyc->RationID}}" id="RationID" name="RationID" placeholder="Ration ID">
                                                                            </div>
                                                                        </div>
                                                                        </div>
																		
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Ration Upload</label>
                                                                              
																				  <input type="file"  id="photo6" value="{{$kyc->RationUpload}}" name="RationUpload" required="true" >
                                                                            </div>
                                                                        </div>
																		<div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Driving License Upload</label>
                                                                              
																				  <input type="file"  id="photo7" value="{{$kyc->DrivingLicenseUpload}}" name="DrivingLicenseUpload" required="true" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                            <div class="modal-footer">
                                                            
                                                                 <div>
                     <a href="{{URL('/kycList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
                                            </div>
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