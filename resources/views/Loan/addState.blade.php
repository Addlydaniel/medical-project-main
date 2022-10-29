@extends('layout')

@section('content')
<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add State</h4>

                  

                </div>
              </div>
              <div class="col-4">
           
                                  <a href="{{URL('/stateList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitState/' )}}">
                                   @csrf
                                            
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">State ID</label>
                                             
                                                <input type="text" class="form-control" id="StateID" name="StateID"  placeholder="State ID" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">State Name</label>
                                             
                                                <input type="text" class="form-control" id="StateName" name="StateName"  placeholder="State Name" >
                                            </div>
                                            
										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">State Code</label>
                                             
                                                <input type="text" class="form-control" id="StateCode" name="StateCode" placeholder="State Code" >
                                        </div>

                                        <br>
                                            
                                            
                                            <div>
                     <a href="{{URL('/stateList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
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

