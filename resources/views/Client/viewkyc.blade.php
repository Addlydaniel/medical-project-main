@extends('layout')
@section('content')
<div class="main-content">
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
                            <div class="col-10">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">View Kyc Details</h4>
                              </div>
                                  
                            </div>
                            <div class="col-2">
                              <div class="d-flex flex-wrap gap-2">
                               
                              
                                                     
                                </div>
                            </div>
                        </div>
        <!-- end page title -->

        <div class="row">
        <div class="col-xl-2"></div>
            <div class="col-xl-8">
                <div class="card overflow-hidden">
                    <div class="bg-primary bg-soft">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-3">
                                
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- end card -->

                <div class="card">
                    <div class="card-body">
                       

                    
                        <div class="table-responsive">
                            <table class="table table-nowrap mb-0">
                                <tbody>
                                    <tr>
                                        <th scope="row">UID No :</th>
                                        <td>{{$kyc->UIDNo}}</td>
                                    </tr>
                                    <tr> 
                                        <th scope="row">UID Front Image :</th>
                                        <td><img src="{{ asset('images/'.$kyc->UIDFrontUpload) }}" alt="UIDFrontUpload"></td>
										
                                    </tr>
                                    <tr>
                                        <th scope="row">UID Back Image :</th>
                                        <td><img src="{{ asset('images/'.$kyc->UIDBackUpload) }}" alt="UIDBackUpload"></td>
                                    </tr>
									 <tr>
                                        <th scope="row">Pan No :</th>
                                        <td>{{$kyc->PanNo}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pan Frond Image :</th>
                                        <td><img src="{{ asset('images/'.$kyc->PanFrontUpload) }}" alt="PanFrontUpload"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Pan Back Image :</th>
                                        <td><img src="{{ asset('images/'.$kyc->PanBackUpload) }}" alt="PanBackUpload"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Voter ID :</th>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Voter Front Image :</th>
                                        <td><img src="{{ asset('images/'.$kyc->VoterFrontUpload) }}" alt="VoterFrontUpload"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Voter Back  Image :</th>
                                        <td><img src="{{ asset('images/'.$kyc->VoterBackUpload) }}" alt="VoterBackUpload"></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ration ID :</th>
                                        <td>{{$kyc->RationID}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ration Upload :</th>
                                        <td><img src="{{ asset('images/'.$kyc->RationUpload) }}" alt="RationUpload"></td>
                                    </tr>
									
                                    <tr>
                                        <th scope="row">Driving License Upload :</th>
                                        <td><img src="{{ asset('images/'.$kyc->DrivingUpload) }}" alt="DrivingUpload"></td>
                                    </tr>
									
                                    
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- end card -->

                
                <!-- end card -->
            </div>         
            <div class="col-xl-2"></div>
         
        </div>
        <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->



</div> <!-- end slimscroll-menu-->
</div>

@endsection
