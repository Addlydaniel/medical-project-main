@extends('layout')

@section('content')
<div class="container-fluid">
               <div class="row">
                  
                  <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Hospital</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                
                                
                                
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="uname">Hospital Name</label>
                                       <input type="text" class="form-control" id="uname" placeholder="Hospital Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pass">Hospital Code</label>
                                       <input type="password" class="form-control" id="pass" placeholder="Hospital Code">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pass">Hospital Email</label>
                                       <input type="password" class="form-control" id="email" placeholder="Hospital Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pass">Hospital Contact</label>
                                       <input type="password" class="form-control" id="contact" placeholder="Hospital Contact">
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label for="pass">Hospital Address</label>
                                       <input type="password" class="form-control" id="address" placeholder="Hospital Address">
                                    </div>
                                   
                                 </div>
								 <br>
                                
                                 <button type="submit" class="btn btn-primary">Add Hospital</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
@endsection

