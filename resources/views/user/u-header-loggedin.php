<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> National Shooting Academy - <?php echo ((isset($title)) ? $title : 'Home'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/hover-min.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/gif" sizes="32x32" href="images/fav.png">
    <link rel="stylesheet" href="css/animate.css">
    <link href="fonts/fontawesome/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="css/ion.rangeSlider.min.css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link rel="stylesheet" href="css/mega-menu.css" type="text/css">
    <link rel="stylesheet" href="css/circle.css">
    <link rel="stylesheet" href="css/datatables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body>
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
    <!--header start here-->
    <!-- <div class='preloader'>
        <div class="preloader-circle"></div>
    </div> -->
    <div class="top_head">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul>
                        <li>
                            <a class="link m-0" href="u-wishlist.php">
                                <i class="fas fa-heart"></i>
                            </a>
                        </li>
                        <li>
                            <a class="link m-0" href="u-cart.php">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell"></i>
                                </a>
                                <div class="dropdown-menu notification-dd" aria-labelledby="dropdownMenuLink">
                                    <div class="header">
                                        <p>Notifications</p>
                                    </div>

                                    <div class="notif_wrapper">
                                        <a class="dropdown-item" href="#">
                                            <div class="wrapper">
                                                <div class="top">
                                                    <i class="fas fa-bell"></i>
                                                    <p>New user registered</p>
                                                </div>
                                                <div class="bot">
                                                    <p>Today 8:53 AM</p>
                                                    <p>May 2, 2020</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="wrapper">
                                                <div class="top">
                                                    <i class="fas fa-bell"></i>
                                                    <p>New user registered</p>
                                                </div>
                                                <div class="bot">
                                                    <p>Today 8:53 AM</p>
                                                    <p>May 2, 2020</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="wrapper">
                                                <div class="top">
                                                    <i class="fas fa-bell"></i>
                                                    <p>New user registered</p>
                                                </div>
                                                <div class="bot">
                                                    <p>Today 8:53 AM</p>
                                                    <p>May 2, 2020</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <div class="wrapper">
                                                <div class="top">
                                                    <i class="fas fa-bell"></i>
                                                    <p>New user registered</p>
                                                </div>
                                                <div class="bot">
                                                    <p>Today 8:53 AM</p>
                                                    <p>May 2, 2020</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="not_footer text-center">
                                        <a href="notifications.php">View All</a>
                                    </div>


                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="dropdown">
                                <a class="dropdown-toggle user-head" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="images/avatar.png" class="nav-avatar" alt=""> Jogan Max
                                </a>
                                <div class="dropdown-menu user-dd" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="profile.php"><i class="fas fa-user"></i> Profile</a>
                                    <a class="dropdown-item" href="pay_logs.php"><i class="fas fa-credit-card"></i> Payment Log</a>
                                    <a class="dropdown-item" href="subscription_logs.php"><i class="fas fa-envelope"></i> Subscription Log</a>
                                    <a class="dropdown-item" href="course_log.php"><i class="fas fa-clipboard-list"></i> Courses</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="header_area login-header">
        <div class="container">
            <div class="main_header_area animated">
                <nav id="navigation1" class="navigation">
                    <div class="nav-header">
                        <a class="nav-brand" href="index.php">
                            <img src="images/logo.png" class="img-fluid" alt="">
                        </a>

                        <div class="toggle logged-In">
                            <ul>
                                <li>
                                    <a class="link m-0" href="u-wishlist.php">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="link m-0" href="u-cart.php">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle link ml-0" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-bell"></i>
                                        </a>
                                        <div class="dropdown-menu notification-dd" aria-labelledby="dropdownMenuLink">
                                            <div class="header">
                                                <p>Notifications</p>
                                            </div>

                                            <div class="notif_wrapper">
                                                <a class="dropdown-item" href="#">
                                                    <div class="wrapper">
                                                        <div class="top">
                                                            <i class="fas fa-bell"></i>
                                                            <p>New user registered</p>
                                                        </div>
                                                        <div class="bot">
                                                            <p>Today 8:53 AM</p>
                                                            <p>May 2, 2020</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <div class="wrapper">
                                                        <div class="top">
                                                            <i class="fas fa-bell"></i>
                                                            <p>New user registered</p>
                                                        </div>
                                                        <div class="bot">
                                                            <p>Today 8:53 AM</p>
                                                            <p>May 2, 2020</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <div class="wrapper">
                                                        <div class="top">
                                                            <i class="fas fa-bell"></i>
                                                            <p>New user registered</p>
                                                        </div>
                                                        <div class="bot">
                                                            <p>Today 8:53 AM</p>
                                                            <p>May 2, 2020</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <div class="wrapper">
                                                        <div class="top">
                                                            <i class="fas fa-bell"></i>
                                                            <p>New user registered</p>
                                                        </div>
                                                        <div class="bot">
                                                            <p>Today 8:53 AM</p>
                                                            <p>May 2, 2020</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>

                                            <div class="not_footer text-center">
                                                <a href="notifications.php">View All</a>
                                            </div>


                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown">
                                        <a class="dropdown-toggle user-head link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="images/avatar.png" class="nav-avatar" alt=""> Jogan Max
                                        </a>
                                        <div class="dropdown-menu user-dd" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item link" href="profile.php"><i class="fas fa-user"></i> Profile</a>
                                            <a class="dropdown-item link" href="pay_logs.php"><i class="fas fa-credit-card"></i> Payment Log</a>
                                            <a class="dropdown-item link" href="subscription_logs.php"><i class="fas fa-envelope"></i> Subscription Log</a>
                                            <a class="dropdown-item link" href="course_log.php"><i class="fas fa-clipboard-list"></i> Courses</a>
                                            <a class="dropdown-item link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                                        </div>
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
                    <li class="link"><a href="index.php">Home</a>
                    </li>
                    <li class="link"><a href="about.php">features</a>
                    </li>
                    <li class="link"><a href="about-us.php">about</a>
                    </li>
                    <li class="link"><a href="contact-us.php">Services</a>
                    </li>
                    <li class="link"><a href="brochures.php">shop</a>
                    </li>
                    <li class="link"><a href="material.php">instructor shirts & hats</a>
                    </li>
                    <li class="link"><a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>


    <!--header end here-->