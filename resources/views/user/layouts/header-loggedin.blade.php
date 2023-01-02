<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <title> National Shooting Academy - <?php echo ((isset($title)) ? $title : 'Home'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user_asset/css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('user_asset/css/hover-min.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('user_asset/css/bootstrap.min.css') }}">
  <link rel="icon" type="image/gif" sizes="32x32" href="{{ asset('user_asset/images/fav.png') }}">
    <link rel="stylesheet" href="{{ asset('user_asset/css/animate.css') }}">
    <link href="{{ asset('user_asset/fonts/fontawesome/css/all.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('user_asset/css/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/intlTelInput.css') }}">
    <link rel="stylesheet" href="{{ asset('user_asset/css/mega-menu.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('user_asset/css/circle.css') }}">
    <link rel="stylesheet" href="{{ asset('user_asset/css/datatables.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}" type="text/css" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />







</head>

<body>
 @php
     use App\Models\Notification;
    $notification =  Notification::whereNotifiableId(auth()->user()->id)->whereReadAt(null)->get();
 @endphp
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!--header start here-->
    <div class='preloader'>
        <div class="preloader-circle"></div>
    </div>

    <header class="header_area login-header">
        <div class="container">
            <div class="main_header_area animated">
                <nav id="navigation1" class="navigation">
                    <div class="nav-header">
                        <a class="nav-brand" href="{{ url('/') }}">
                            <img src="{{ asset('user_asset/images/logo.png') }}" class="img-fluid" alt="">
                        </a>

                        <div class="toggle logged-In">
                            <ul>
                                <li>
                                    <a class="link m-0" href="{{ url('wishlist') }}">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="link m-0" href="{{ url('view_cart') }}">
                                        <i class="fas fa-shopping-cart"></i>
                                        @if (\Cart::getContent()->count() > 0)
                                        <div class="badge badge-orange" >{{ \Cart::getContent()->count() }}</div>
                                        @endif
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown">

                                        <a class="dropdown-toggle link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bell"></i>
                                        <div class="badge badge-orange">{{ $notification->count() }}</div>

                                        </a>
                                        <div class="dropdown-menu notification-dd" aria-labelledby="dropdownMenuLink">

                                            <div class="header">
                                                <p>Notifications</p>
                                            </div>

                                            <div class="notif_wrapper">
                                              @foreach ($notification as $notifications)

                                                <a class="dropdown-item" href="#">
                                                    <div class="wrapper">
                                                        <div class="top">
                                                            <i class="fas fa-bell"></i>
                                                            <p>{{ $notifications->type }}</p>
                                                        </div>
                                                        <div class="bot">
                                                            <p>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($notifications->created_at))->diffForHumans() }}</p>

                                                        </div>
                                                    </div>
                                                </a>
                                              @endforeach


                                            </div>

                                            <div class="not_footer text-center">
                                                <a href="{{ url('notification') }}">View All</a>
                                            </div>


                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle user-head link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                            <img src="{{ Auth::user()->userimage?Auth::user()->userimage: asset('user_asset/images/avatar.png') }}" class="nav-avatar" alt="">

                                            {{ Auth::user()->first_name." ".Auth::user()->last_name }}
                                        </a>
                                        @if (Auth::user()->type == 'trainer')
                                        <div class="dropdown-menu user-dd" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item link" href="{{ url('trainer/home') }}"><i class="fas fa-home"></i> Home</a>
                                            <a class="dropdown-item link" href="{{ url('trainer/trainer_front_profile') }}"><i class="fas fa-user"></i> Profile</a>
                                            <a class="dropdown-item link" href="{{ url('trainer/trainer_subscription_logs') }}"><i class="fas fa-envelope"></i> Subscription Log</a>
                                            <a class="dropdown-item link" href="{{ url('trainer/pay_logs') }}"><i class="fas fa-clipboard-list"></i> Payment Log</a>
                                            <a class="dropdown-item link" href="{{ url('trainer/trainer_course_logs') }}"><i class="fas fa-clipboard-list"></i> Courses Log</a>
                                            <a class="dropdown-item link" href="{{ url('user_front_logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                        </div>

                                        @else

                                        <div class="dropdown-menu user-dd" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item link" href="{{ url('user_front_profile') }}"><i class="fas fa-user"></i> Profile</a>
                                            {{-- <a class="dropdown-item link" href="{{ route('pay.logs') }}"><i class="fas fa-credit-card"></i> Payment Log</a> --}}
                                            <a class="dropdown-item link" href="{{ url('user_course') }}"><i class="fas fa-envelope"></i> Training </a>
                                            <a class="dropdown-item link" href="{{ route('subscription.logs') }}"><i class="fas fa-envelope"></i> Subscription Log</a>
                                            <a class="dropdown-item link" href="{{ route('course.logs') }}"><i class="fas fa-clipboard-list"></i> Courses</a>
                                            <a class="dropdown-item link" href="{{ route('license.logs') }}"><i class="fas fa-clipboard-list"></i> License logs</a>
                                            <a class="dropdown-item link" href="{{ route('order.logs') }}"><i class="fas fa-clipboard-list"></i> Order logs</a>
                                            <a class="dropdown-item link" href="{{ url('user_front_logout') }}"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                        </div>

                                        @endif

                                    </div>
                                </li>

                            </ul>
                            <div class="toggler-wrap" onclick="openNav()">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div id="mySidenav" class="sidenav" style="width: 0px;">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <div class="offcanvas-wrpper">
                <ul>
                    <li class="link"><a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="link"><a href="{{ url('user_course') }}">Course</a>
                    </li>
                    <li class="link"><a href="{{ url('user_category') }}">Categories</a>
                    </li>
                    <li class="link"><a href="{{ route('license.view') }}">License</a>
                    </li>
                    <li class="link"><a href="{{ url('user_contact') }}">contact us</a>
                    </li>
                    <li class="link"><a href="{{ url('user_about') }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content national_modal_generic">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body nmg">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="modal_h4">WHEN YOU SIGN UP FOR NATIONAL SHOOTING ACADEMY MEMBERSHIP PROGRAM, YOU GET 20 % OFF ON ONLINE TRAININGS AND MERCHANDIZE.</h4>
                        <a href="#" data-dismiss="modal" class="modal__btn my-2">Subscribe</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

    <!--header end here-->
