@extends('layout')
@section('content')
<div class="main-content">
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
                            <div class="col-10">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">View Employee Details  </h4>
                              </div>
                                  
                            </div>
                            <div class="col-2">
                              <div class="d-flex flex-wrap gap-2">
                               
                              
                                  <a href="{{URL('/employeeList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                                        
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
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                                </div>
                                <h5 class="font-size-15 text-truncate">{{$employee->employeeName}}</h5>
                                <p class="text-muted mb-0 text-truncate"></p>
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
                                        <th scope="row">Employee ID :</th>
                                        <td>{{$employee->employeeId}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Employee Name :</th>
                                        <td>{{$employee->employeeName}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Category :</th>
                                        <td>{{$employee->employeeCategory}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Type of loan :</th>
                                        <td>{{$employee->employeeLoantype}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Contact Number :</th>
                                        <td>{{$employee->employeePhone}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Alternative Contact Number :</th>
                                        <td>{{$employee->employeeAlternativeNo}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Address :</th>
                                        <td>{{$employee->employeeAddress}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Service Type :</th>
                                        <td>{{$employee->employeeServiceType}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Designation :</th>
                                        <td>{{$employee->employeeDesignation}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Work Since :</th>
                                        <td>{{$employee->employeeWorkSince}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Total Years of Experience :</th>
                                        <td>{{$employee->employeeExp}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">GST Number if Self Employed :</th>
                                        <td>{{$employee->employeeGST}}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Business PAN :</th>
                                        <td>{{$employee->employeeBusinessPAN}}</td>
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
