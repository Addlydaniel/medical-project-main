@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Scheme</h4>

                  

                </div>
              </div>
              <div class="col-2">
           
                                  <a href="{{URL('/schemeList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitScheme/' )}}">
                                   @csrf
                                            <div class="mb-3">
                                                    <label for="formrow-firstname-input" class="form-label">Loan Category</label>
                                                    
                                                    <select class="form-select"  name="loanCategory" id="loanCategory" required="">
                                                            <option  value="0" selected>Choose...</option>
                                                            @foreach($loan_category as $loan_category_data)
                                                        
                                                            <option  value="{{$loan_category_data->id}}">{{$loan_category_data->loanName}}</option>
                                                        
                                                            @endforeach
                                                            
                                                        </select>
                                                </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Scheme Name</label>
                                             
                                                <input type="text" class="form-control" id="schemeName" name="schemeName" value="{{old('schemeName')}}" placeholder="Scheme Name" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Scheme Code</label>
                                             
                                                <input type="text" class="form-control" id="schemeCode" name="schemeCode" value="{{old('schemeCode')}}" placeholder="Scheme Code" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Total Amount</label>
                                             
                                                <input type="number" class="form-control" id="totalAmount" name="totalAmount" value="{{old('totalAmount')}}" placeholder="Ex:100000" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Interest(%)</label>
                                             
                                                <input type="text" class="form-control" id="interest" name="interest" value="{{old('interest')}}" placeholder="Ex:2" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Tenture(In Months)</label>
                                              
                                                <input type="number" class="form-control" id="tenture" name="tenture" value="{{old('tenture')}}" placeholder="Ex:12" required="">
                                            </div>
                                            <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Scheme Type</label>
                                             
                                                        
                                              <select class="form-select"  name="schemeMethod" id="schemeMethod" required="">
                                                            <option  value="0" selected>Choose...</option>
                                                            @foreach($scheme_type as $scheme_type_data)
                                                        
                                                            <option  value="{{$scheme_type_data->value}}">{{$scheme_type_data->scheme_type_name}}</option>
                                                        
                                                            @endforeach
                                                            
                                                        </select> 
                                                        
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

