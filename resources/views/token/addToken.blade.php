@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Token</h4>

                  

                </div>
              </div>
              <div class="col-2">
           
                                  <a href="{{URL('/tokenList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                            <div class="col-xl-12"></div>
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitToken/' )}}">
                                   @csrf
											<div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                 <div class="row">
                                     <div class="form-group col-sm-4">
                                       <label>City:</label>
                                       <select class="form-control" id="selectcountry">
                                          <option>Select Country</option>
                                          <option>Nagercoil</option>
                                          <option>Thirunelveli</option>
                                          <option>Tenkasi</option>
                                          
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                       <label>Hospital:</label>
                                       <select class="form-control" id="selectcountry">
                                          <option>Select Hospital</option>
                                          <option>sugam hospital</option>
                                          <option>ponjesly hospital</option>
                                         
                                          
                                       </select>
                                    </div>
                                   <div class="form-group col-sm-4">
                                       <label>Doctor:</label>
                                       <select class="form-control" id="selectcountry">
                                          <option>Select Doctor</option>
										  <option>Addly daniel</option>
                                          <option>selva</option>
										  <option>Krishna</option>
                                          <option>Tharshini</option>
                                          
                                          
                                          
                                       </select>
                                    </div>
                                    <div class="form-group col-sm-4">
                                                <label for="formrow-firstname-input" class="form-label"> timimg</label>
                                             
                                                
												<input type="time" class="form-control" id="schedule_time" name="schedule_time" value="{{old('schedule_time')}}" placeholder="Schedule time" required="">
                                           
											</div>
                                    
                                    <div class="form-group col-sm-4">
                                       <label>Token count:</label>
                                       <select class="form-control" id="selectcountry">
                                          <option>Select Country</option>
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                         
                                       </select>
                                    </div>
                                    </div>
                                
                                 
                                 
								  <div class="form-group col-md-12">
                                 <button type="submit" class="btn btn-success">Generate token</button>
								  </div>
                              </form>
                           </div>
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

