<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        National Shooting - Login </title>
        <link rel="shortcut icon" href="{{ url('admin_asset/images/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/vendors.css') }}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN STACK CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/app.css') }}">
    <!-- END STACK CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/plugins/calendars/fullcalendar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/vendors/css/calendars/fullcalendar.min.css') }}">
    <!-- BEGIN Custom CSS-->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/css/jquery.mCustomScrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/css/CustomScrollbar.css" type="text/css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    <!-- END Custom CSS-->

    <style>
    body {
        font-family: 'Poppins' !important;
    }
    </style>
</head>

<body>


    <section class="login-main">
        <div class="container">
            <div class="login-inner">
                <div class="row ">
                    <div class="col-lg-6 col-12 p-0">
                        <div class="left">
                            <img src="{{ url('admin_asset/images/login-pic-2.png') }}" class="img-fluid" alt="">

                        </div>
                    </div>
                    <div class="col-lg-6 col-12 ">
                        <div class="right">
                            <div class="row">
                                <div class="col-md-12">
                                     @if(Session::has('message'))
                                            <div class="alert alert-success">
                                                <strong>{{ Session::get('message')  }}</strong>
                                            </div>
                                        @endif
                                        @if(Session::has('error'))
                                            <div class="alert alert-danger">
                                              <strong>{{ Session::get('error')  }}</strong>
                                            </div>
                                        @endif
                                </div>
                            </div>
                            <!-- <img src="images/logo-login.png" class="login-logo" alt=""> -->
                            <h2>Login</h2>
                            <p>Login To Your Account</p>
                            <form action="{{ url('login') }}" method="post">

                                @csrf

                                <div class="row">
                                    <div class="col-12 form-group mb-2">
                                        <input type="email" class="form-control" placeholder="Enter Email Address" name="email">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="col-12 form-group position-relative mb-2">
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                        <i class="fa fa-lock"></i>
                                        <button class="view-btn position-absolute"><i class="fa fa-eye"></i></button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between mob_l">
                                            <div class="">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                                </div>
                                            </div>
                                            <div class=""> <a href="{{ url('password_recovery') }}" class="forgot" 
                                                   > Forgot Password?</a> </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="row mt-2 mt-md-4 ">
                                    <div class="col-12">
                                        <button type="submit" class="yel-btn"> login</button>
                                    </div>
                                </div>

                              

                            </form>

                            <!--login modal start here-->

                            <!-- Modal -->
                            <div class="modal fade modal-1" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span> </button>
                                        <div class="forget-pass">

                                            <div class="modal-body">
                                                <h1>Password Recovery</h1>
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-12 form-group">
                                                            <label for="exampleInputEmail1">Email Address*</label>
                                                            <input type="text" placeholder="Enter Email Address"
                                                                class="form-control">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button" class="form-control yel-btn" id="cont"
                                                                data-dismiss="modal" aria-label="Close"
                                                                data-toggle="modal" data-target=".modal-2"> Continue
                                                            </button>
                                                        </div>

                                                        <a href="#" class="bcktologin modala" data-dismiss="modal"
                                                            aria-label="Close"> <img src="{{ url('admin_asset/images/right-arrow.png') }}"
                                                                alt=""> back to login</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--login modal end here-->

                            <!--forgot step 2 start here-->

                            <!-- Button trigger modal -->

                            <!-- Modal -->
                            <div class="modal fade modal-2" id="exampleModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span> </button>
                                        <div class="forget-pass">

                                            <div class="modal-body">
                                                <h1>Password Recovery</h1>
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-12 form-group">
                                                            <label for="exampleInputEmail1">Verification Code*</label>
                                                            <input type="number" placeholder="Enter verification code"
                                                                class="form-control">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </div>
                                                        <div class="col-12 text-right">
                                                            <button type="button" class="code-txt">Didn’t receive code?
                                                                send it again </button>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button" class="form-control yel-btn"
                                                                id="count-2" data-dismiss="modal" aria-label="Close"
                                                                data-toggle="modal" data-target=".modal-3"> Continue
                                                            </button>
                                                        </div>

                                                        <a href="#" class="bcktologin modala" data-dismiss="modal"
                                                            aria-label="Close"> <img src="{{ url('admin_asset/images/right-arrow.png')}} "
                                                                alt=""> back to login</a>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade modal-3" id="password-modal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span> </button>
                                        <div class="forget-pass">

                                            <div class="modal-body">
                                                <h1>Password Recovery</h1>
                                                <form action="">
                                                    <div class="row">
                                                        <div class="col-12 form-group">
                                                            <label for="exampleInputEmail1">New Password*</label>
                                                            <input type="password" placeholder="Enter New Password"
                                                                class="form-control">
                                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                                            <button type="button" class="view-btn position-absolute"><i
                                                                    class="fa fa-eye"></i> </button>
                                                        </div>
                                                        <div class="col-12 form-group">
                                                            <label for="exampleInputEmail1">Confirm Password*</label>
                                                            <input type="password" placeholder="Retype Password"
                                                                class="form-control">
                                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                                            <button type="button" class="view-btn position-absolute"><i
                                                                    class="fa fa-eye"></i> </button>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button" class="form-control yel-btn"
                                                                data-dismiss="modal" aria-label="Close"> Update
                                                            </button>
                                                        </div>

                                                        <a href="#" class="bcktologin modala" data-dismiss="modal"
                                                            aria-label="Close"> <img src="images/right-arrow.png"
                                                                alt=""> back to login</a>

                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--forgot step 2 end here-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="{{ asset('admin_asset/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js"></script>
    <script src="{{ asset('admin_asset/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('admin_asset/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
    <script src="{{ asset('admin_asset/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('admin_asset/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
    <script src="{{ asset('admin_asset/app-assets/js/scripts/tables/datatables/datatable-basic.js') }}"></script>
    <script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/echarts.js') }}"></script>
    <script src="{{ asset('admin_asset/app-assets/vendors/js/extensions/moment.min.js') }}"></script>
    <script src="{{ asset('admin_asset/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('admin_asset/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('admin_asset/assets/js/jquery.exzoom.js') }}"></script>
    <script src="{{ asset('admin_asset/assets/js/function.js') }}"></script>
    <script src="{{ asset('admin_asset/assets/js/chart.js') }}"></script>
    <script src="{{ asset('admin_asset/app-assets/js/scripts/modal/components-modal.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>




</body>

</html>