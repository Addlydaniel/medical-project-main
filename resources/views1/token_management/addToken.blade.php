@extends('layout')

@section('content')
<div class="container-fluid">
               <div class="row">
                  
                  <div class="col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Token</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                
                                
                                
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="uname">Token ID</label>
                                       <input type="text" class="form-control" id="uname" placeholder="Token ID">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pass">Patient Name</label>
                                       <input type="password" class="form-control" id="pass" placeholder="Patient Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pass">Hospital Name</label>
                                       <input type="password" class="form-control" id="email" placeholder="Hospital Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="pass">Doctor Name</label>
                                       <input type="password" class="form-control" id="contact" placeholder="Doctor Name">
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label for="pass">Visibility Hour</label>
                                       <input type="password" class="form-control" id="address" placeholder="Visibility Hour">
                                    </div>
                                   
                                 </div>
								 <br>
                                
                                 <button type="submit" class="btn btn-primary">Add Token</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
@endsection

