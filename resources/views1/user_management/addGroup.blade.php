@extends('layout')

@section('content')
<div class="container-fluid">
               <div class="row">
                  <div class="col-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add New User</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form>
                              <div class="form-group">
                                 <div class="add-img-user profile-img-edit">
                                    <img class="profile-pic img-fluid" src="images/user/11.png" alt="profile-pic">
                                    <div class="p-image">
                                       <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                       <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                 </div>
                                 <div class="img-extension mt-3">
                                    
                                 </div>
                              </div>
                              
                             
                           
                              
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-9">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">New User Group</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                
                                
                                
                                 <div class="row">
                                    <div class="form-group col-md-12">
                                       <label for="uname">User Group Name</label>
                                       <input type="text" class="form-control" id="uname" placeholder="User Group Name">
                                    </div>
                                    <div class="form-group col-md-12">
                                       <label for="pass">User Group Code</label>
                                       <input type="password" class="form-control" id="pass" placeholder="User Group Code">
                                    </div>
                                   
                                 </div><br>
                                
                                 <button type="submit" class="btn btn-primary">Add New User</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
@endsection

