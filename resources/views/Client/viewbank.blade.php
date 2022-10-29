@extends('layout')
@section('content')
<div class="main-content">
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
                            <div class="col-10">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">View Bank Details  </h4>
                              </div>
                                  
                            </div>
                            <div class="col-2">
                              <div class="d-flex flex-wrap gap-2">
                               
                              
                                  <a href="{{URL('/bankList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                                        
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
                                        <th scope="row">Account Type :</th>
                                        <td>{{$bank->AccountType}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Operating Mode :</th>
                                        <td>{{$bank->OperatingMode}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Account Number :</th>
                                        <td>{{$bank->AccountNumber}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Account IFSC :</th>
                                        <td>{{$bank->AccountIFSC}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Account MICR :</th>
                                        <td>{{$bank->AccountMICR}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Income Source :</th>
                                        <td>{{$bank->IncomeSource}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">HighestEducation :</th>
                                        <td>{{$bank->HighestEducation}}</td>
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
