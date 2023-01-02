<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>
        National Shooting - Password Recovery </title>
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
                            <!-- <img src="images/logo-login.png" class="login-logo" alt=""> -->
                            <h2>Password Recovery</h2>
                            <form action="{{ url('forgotPassword') }}" method="post">

                                @csrf

                                <div class="row">
                                    <div class="col-12 form-group mb-2">
                                        <input type="email" class="form-control" placeholder="Enter Email Address" name="email">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                 
                                </div>

                            
                                <div class="row mt-2 mt-md-4 ">
                                    <div class="col-12">
                                        <button type="submit" class="yel-btn"> Continue</button>
                                    </div>
                                </div>

                                <a href="{{ url('/admin') }}" class="bcktologin"> <img src="{{ url('admin_asset/images/right-arrow.png') }}" alt=""> back to
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