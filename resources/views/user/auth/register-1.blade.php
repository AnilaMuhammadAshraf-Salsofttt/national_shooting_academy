<?php
$title = "Login";
$activeNav = 'Login';
?>

@extends('user.layouts.master')
@section('content')

    <section class="banner inner_banner">
    @include('user.layouts.video')

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
        <img src="{{ asset('user_asset/images/inner_target.png') }}" class="target inner-target" alt="" srcset="">
        <img src="{{ asset('user_asset/images/membership-man.png')}}" class="member-ship-man inner" alt="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form__wrapper">
                        <div class="row mb-4">
                            <div class="col-12">
                                <p class="reg-b mb-0">Don't have an account? Create new</p>
                                <p class="auth__heading reg mt-3">Personal Information</p>
                            </div>
                        </div>
                        @if ($errors->any())
                            @foreach ($errors->all() as $error)
                                <span class="alert-danger">{{$error}}</span><br><br>
                            @endforeach
                        @endif
                        <form action="{{ url('register_1_insert') }}" method="post">
                            @csrf

                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="fname" class="active">First Name*</label>
                                        <input value="{{ old('first_name') }}" type="text" name="first_name" class="@error('first_name') is-invalid @enderror form-control" id="fname"
                                               placeholder="Enter First Name">
                                        @error('first_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="lname" class="active">Last Name*</label>
                                        <input value="{{ old('last_name') }}" type="text" name="last_name" class="@error('last_name') is-invalid @enderror form-control" id="lname"
                                               placeholder="Enter Last Name">
                                        @error('last_name')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="phone" class="active">Phone Number*</label>
                                        <input value="{{ old('phone') }}" type="tel" name="phone" class="@error('phone') is-invalid @enderror form-control" id="phone"
                                               placeholder="Enter Phone Number">

                                        @error('phone')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email" class="active">Email*</label>
                                        <input value="{{ old('email') }}" type="email" name="email" class="@error('email') is-invalid @enderror form-control" id="email"
                                               placeholder="Enter Email Address">
                                        @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-12">
                                    <p class="reg-b">Note: Prefer to use your Professional Email Address</p>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="login_password" class="active">password*</label>
                                        <input type="password" name="password" class="@error('password') is-invalid @enderror form-control" id="pass"
                                               placeholder="Enter Password">
                                        <i class="fa fa-lock active" aria-hidden="true"></i>
                                        <a href="javascript:void(0)" class="see_password"><i class="fa fa-eye"
                                                                                             aria-hidden="true"
                                                                                             onclick="ToggleEye1()"></i></a>
                                        @error('password')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="login_password" class="active">Confirm password*</label>
                                        <input type="password" name="confirm_password" class="form-control" id="c_pass"
                                               placeholder="Enter Password">
                                        <i class="fa fa-lock active" aria-hidden="true"></i>
                                        <a href="javascript:void(0)" class="see_password">
                                            <i class="fa fa-eye" aria-hidden="true" onclick="ToggleEye2()"></i>
                                            </a>

                                    </div>
                                </div>
                            </div>


                            <div class="form-row mt-4">
                                <div class="col-12">
                                    <button type="submit" class="login__button">Continue</button>
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

    <script src="{{ asset('user_asset/js/phone_script.js') }}"></script>


    <script>

        function ToggleEye1() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        function ToggleEye2() {
            var x = document.getElementById("c_pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
@endsection

