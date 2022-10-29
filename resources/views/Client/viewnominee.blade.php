@extends('layout')
@section('content')
<div class="main-content">
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
                            <div class="col-8">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">View Nominee Details  </h4>
                              </div>
                                  
                            </div>
                            <div class="col-2">
                              <div class="d-flex flex-wrap gap-2">
                               
                              
                                  <a href="{{URL('/nomineeList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                                        
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
                                        <th scope="row">Name :</th>
                                        <td>{{$nominee->NomineeName}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Applicant's Name as per Bank Record :</th>
                                        <td>{{$nominee->NomineeBankNameRecord}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Relationship to the Applicant :</th>
                                        <td>{{$nominee->NomineeRelation}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Gender :</th>
                                        <td>{{$nominee->NomineeGender}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">DOB :</th>
                                        <td>{{$nominee->NomineeDOB}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Age :</th>
                                        <td>{{$nominee->NomineeAge}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Aadhar :</th>
                                        <td>{{$nominee->NomineeAadhar}}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th scope="row">Address :</th>
                                        <td>{{$nominee->NomineeAddress}}</td>
                                    </tr>
                                   
                                    <tr>
                                        <th scope="row">Bank Name :</th>
                                        <td>{{$nominee->NomineeBankName}}</td>
                                    </tr>                                   
                                    <tr>
                                        <th scope="row">Account Number :</th>
                                        <td>{{$nominee->NomineeAccountNo}}</td>
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
