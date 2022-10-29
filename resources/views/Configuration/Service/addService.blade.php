@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Service</h4>

                  

                </div>
              </div>
              <div class="col-2">
           
                                  <a href="{{URL('/serviceList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitService/' )}}">
                                   @csrf
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Service Name</label>
                                             
                                                <input type="text" class="form-control" id="serviceName" name="serviceName" value="{{old('serviceName')}}" placeholder="Service Name" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Service Code</label>
                                             
                                                <input type="text" class="form-control" id="serviceCode" name="serviceCode" value="{{old('serviceCode')}}" placeholder="Service Code" required="">
                                            </div>
                                            <div class="mb-3">
                                                        <label for="formrow-firstname-input" class="form-label">Description</label>
                                                        <textarea class="form-control" id="serviceDescription" name="serviceDescription" >{{old('serviceDescription')}}</textarea>
                                                    
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

