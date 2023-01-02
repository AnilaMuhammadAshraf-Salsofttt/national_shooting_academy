<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
    <title> National Shooting Academy - <?php echo ((isset($title)) ? $title : 'Home'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
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
    <link rel="stylesheet" href="{{ asset('user_asset/css/style.css') }}" type="text/css" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
</head>

<body>
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

                        <div class="toggle">
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
                                        <div class="badge badge-orange">{{ \Cart::getContent()->count() }}</div>
                                        @endif

                                    </a>
                                </li>
                                <li><a href="{{ url('user_login') }}" class="link">Login</a></li>
                                <li><a href="{{  url('user_inner_category_filter') }}" class="link">Shop</a></li>
                                <li><a href="{{ url('user_course') }}" class="link">Training</a></li>
                                <li><a href="{{  route('web.blog') }}" class="link">Blog</a></li>
                                <li><a href="{{  url('user_about') }}" class="link">About</a></li>
                                <li><a href="{{  url('user_contact') }}" class="link">Contact</a></li>
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
                    <li class="link"><a href="{{ route('web.license') }}">License</a>
                    </li>
                    <li class="link"><a href="{{ url('user_contact') }}">contact us</a>
                    </li>
                    <li class="link"><a href="{{ url('user_about') }}">About</a>
                    </li>
                    {{-- <li class="link"><a href="contact.php">Contact</a>
          </li> --}}
                    <li class="link"><a href="{{ url('user_login') }}">Login</a></li>
                    <li class="link"><a href="{{  url('register_1') }}">Register</a></li>
                    <li class="link"><a href="{{  route('trainer.register') }}">Become Trainer</a></li>
                    </li>
                </ul>
            </div>
        </div>
    </header>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
       <h3>signup now to get <strong>20% off</strong></h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
    <!-- Modal -->
    <div class="modal fade submodal" id="myModal"  role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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

