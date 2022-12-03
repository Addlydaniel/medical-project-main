@extends('layout')

@section('content')
<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit BloodGroup</h4>

                  

                </div>
              </div>
              <div class="col-4">
           
                                  <a href="{{URL('/blood_groupList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                   

                                    <form class="form-horizontal" method="post" action="{{ URL('/updateBloodGroup/' )}}">
                                   @csrf
                                            
									<div class="mb-3">
										<label for="formrow-firstname-input" class="form-label">Blood Group Name</label>
										<input type="hidden" class="form-control" id="id" name="id" value="{{$blood_group->id}}" placeholder="BloodGroup Name" required="">
										<input type="text" class="form-control" id="blood_group_name" name="blood_group_name" value="{{$blood_group->blood_group_name}}" placeholder="Blood Group Name" required="">
									</div>
                                           <div class="mb-3">
										<label for="formrow-firstname-input" class="form-label">Blood Group description</label>
										<input type="hidden" class="form-control" id="id" name="id" value="{{$blood_group->id}}" placeholder="BloodGroup Name" required="">
										<input type="text" class="form-control" id="blood_group_description" name="blood_group_description" value="{{$blood_group->blood_group_description}}" placeholder="Blood Group description" required="">
									</div>
                                        
                                            <div>
                                            <button type="submit" class="btn btn-primary w-md"> Submit</button>
                                                
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

