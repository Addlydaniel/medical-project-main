@extends('layout')

@section('content')
<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit Category</h4>

                  

                </div>
              </div>
              <div class="col-4">
           
                                  <a href="{{URL('/category')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                   

                                    <form class="form-horizontal" method="post" action="{{ URL('/updateHospitalCategory/' )}}">
                                   @csrf
                                            
									<div class="mb-3">
										<label for="formrow-firstname-input" class="form-label">Category Name</label>
										<input type="hidden" class="form-control" id="id" name="id" value="{{$category->id}}" placeholder="Category Name" required="">
										<input type="text" class="form-control" id="category_name" name="category_name" value="{{$category->category_name}}" placeholder="Category Name" required="">
									</div>
									<div class="mb-3">
										<label for="formrow-firstname-input" class="form-label">Category Description</label>
										<input type="text" class="form-control" id="category_description" name="category_description" value="{{$category->category_description}}" placeholder="Category Description" required="">
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

