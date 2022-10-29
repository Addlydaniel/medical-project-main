@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit District</h4>

                  

                </div>
              </div>
              <div class="col-4">
           
                                  <a href="{{URL('/districtList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                   

                                    <form class="form-horizontal" method="post" action="{{ URL('/updateDistrict/' )}}">
                                   @csrf
                                            
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">District ID</label>
                                             
                                                <input type="text" class="form-control" id="DistrictID" name="DistrictID" value="{{$district->DistrictID}}" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">District Name</label>
                                             
                                                <input type="text" class="form-control" id="DistrictName" name="DistrictName" value="{{$district->DistrictName}}" >
                                            </div>
                                            

                                   
                                            
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">District Code</label>
                                             
                                                <input type="text" class="form-control"  id="DistrictCode" name="DistrictCode" value="{{$district->DistrictCode}}" >
                                            </div>
                                            
                    

                                                                                    <br>
                                          
                                       
                                           
                                          
                                            <br>
                                            <br>
                                             <div>
                     <a href="{{URL('/districtList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
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

