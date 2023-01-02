<?php
$title = "Login";
$activeNav = 'Login';
?>

@extends('user.layouts.master')
@section('content')

<section class="banner inner_banner">
    @include('user.layouts.video')

    <!-- <img src="images/banner-bg.png" class="banner_1" alt="N/A"> -->
    <img src="{{ asset('user_asset/images/banner-bg-inner-2.png')}}" class="banner_2" alt="N/A">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 col-lg-12">
                    <div class="item banner">
                        <h1 class="banner_heading">
                            The Tactical<br>
                            Skills To Respond<br>
                            With Confidence
                        </h1>
                    </div>
            </div>
        </div>
    </div>
</section>


<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">
    <img src="images/membership-man.png" class="member-ship-man inner" alt="">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="form__wrapper">
                    <div class="row mb-4">
                        <div class="col-12">
                            <p class="auth__heading">Login</p>
                            <p class="auth__sub">Login to your account</p>
                        </div>
                    </div>
                    <form action="{{ url('user_auth') }}" method="post">
                        @csrf
                        <div class="form-row">
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
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="login_email" class="active">email:</label>
                                    <input type="email" name="email" class="form-control" id="login_email" placeholder="Enter Email Address">
                                    <i class="fa fa-envelope active" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="login_password" class="active">password:</label>
                                    <input type="password" name="password" class="form-control" id="logininput" placeholder="Enter Password">
                                    <i class="fa fa-lock active" aria-hidden="true"></i>
                                    <a href="javascript:void(0)" class="see_password"><i class="fa fa-eye" aria-hidden="true" onclick="ToggleEye()"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12 d-flex justify-content-between align-items-center mobile-flex">
                                <div class="text_wrapp">
                                    <span>Don't have an account?</span> <a href="{{ url('register_1') }}">Sign Up</a>
                                </div>
                                <a href="recover-password.php" class="forgot_link">Forgot Password?</a>
                            </div>
                        </div>

                        <div class="form-row mt-4">
                            <div class="col-12">
                                <button type="submit" class="login__button">Login</button>
                            </div>
                        </div>

                        <div class="form-row mt-4 mb-4">
                            <div class="col-12 text-center">
                                <a href="index.php" class="back"><i class="fas fa-arrow-left"></i> Back to home</a>
                            </div>
                        </div>




                    </form>
                </div>
            </div>
        </div>

    </div>


</section>



@endsection

@section('js')


<script>

    function ToggleEye() {
      var x = document.getElementById("logininput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>

@endsection