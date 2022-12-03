<!doctype html>
<html lang="en">
<head>
        
        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                        <div  style="background-color:#3ede69">
                        @if ($errors->any())
                            <div class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                                        
                                        <li>{{ $error }}</li>  <br>
                                        @endforeach	
                                    </div>
                        @endif
                        @if(session()->has('message'))
                      <div class="alert alert-success">
                      
                      <i class="icon-ok-sign"></i><strong>Warning!</strong> User Updated successfully
                    </div>
                      @endif
                        @if (session('login_error'))
                            <div class="alert alert-danger">
                                 
                                {{ session('login_error') }}
                            </div>
                        @endif
                        <br>
                        <br>
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-sucess p-4">
                                            <h5 style="color:white">Login</h5>
                                            <p style="color:white">Welcome to ZONDUO</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="index.html" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                   
                                </div>
                                <div class="p-2">
                                   <form class="form-horizontal" autocomplete="off"  id="staff_login" action="{{ route('login.user') }}" autocomplete="off" >

                                                                    <div class="mb-3">
                                                                        <label for="username" class="form-label">Username</label>
                                                                        <input type="text" autocomplete="off" class="form-control" name="user_name"  placeholder="Enter username" autocomplete="off">
                                                                    </div>

                                                                    <div class="mb-3">
                                                                        <label class="form-label">Password</label>
                                                                        <div class="input-group auth-pass-inputgroup">
                                                                            <input type="password" autocomplete="off" class="form-control viewerPassword" name="user_password" autocomplete="off"  placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="staff_password">

                                                                        </div>
                                                                    </div>

                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="checkbox" id="showPassword" >
                                                                        <label class="form-check-label" for="remember-check">
                                                                           Show Password
                                                                        </label>
                                                                    </div>
                                                                    <div class="mb-3 ">

                                                                 <div class="captcha_stafflogin">
                                                                    <span></span><br>
                                                                        <button type="button" class="btn btn-success refresh-cpatcha-staff"><i class="fa fa-refresh"></i></button>
                                                                    </div>
                                                                   
                                                                </div>
                                                                    <div class="mt-3 d-grid">
                                                                        <button type="button" id="staff_btn" class="btn btn-primary btn-all aplyonline"> Login</button>
                                                                    </div>




                                                                </form>
                                </div>
            
                            </div>
                        </div>
                       

                    </div>
                </div>
            </div>
        </div>
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
