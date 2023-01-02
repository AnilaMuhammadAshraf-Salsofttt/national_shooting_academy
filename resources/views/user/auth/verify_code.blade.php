<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        national shooting - Verify code </title>
    <link rel="shortcut icon" href="images/favicon.ico"/>
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
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin_asset/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <!-- END Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin_asset/app-assets/css/plugins/calendars/fullcalendar.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin_asset/app-assets/vendors/css/calendars/fullcalendar.min.css') }}">
    <!-- BEGIN Custom CSS-->
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/css/jquery.mCustomScrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('admin_asset/assets/css/CustomScrollbar.css" type="text/css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('admin_asset/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
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
                        <h2>Verify Code</h2>
                        <form action="{{ route('user.update.password') }}" method="post">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <span class="alert-danger">{{$error}}</span><br><br>
                                @endforeach
                            @endif
                            @csrf
                            <div class="row">
                                <div class="col-12 form-group mb-2">
                                    <input type="hidden" value="{{ Request::segment(2) }}"
                                           placeholder="Enter Email Address" name="email" readonly>
                                    <i class="fa fa-envelope"></i>

                                </div>
                                <div class="col-12 form-group mb-2">
                                    <input type="text" class="@error('token') is-invalid @enderror form-control" placeholder="Enter token" name="token">
                                    <i class="fa fa-envelope"></i>
                                    @error('token')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group mb-2">
                                    <input type="text" class="@error('password') is-invalid @enderror form-control" placeholder="Enter password"
                                           name="password">
                                    <i class="fa fa-envelope"></i>
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-12 form-group mb-2">
                                    <input type="text" class="form-control" placeholder="Enter password confirmation"
                                           name="password_confirmation">
                                    <i class="fa fa-envelope"></i>
                                </div>
                            </div>

                            <div class="row mt-2 mt-md-4 ">
                                <div class="col-12">
                                    <button type="submit" class="yel-btn"> continue</button>
                                </div>
                            </div>

                            <a href="{{ url('/') }}" class="bcktologin"> <img
                                    src="{{ url('admin_asset/images/right-arrow.png') }}" alt=""> back to
                                website</a>

                        </form>

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
