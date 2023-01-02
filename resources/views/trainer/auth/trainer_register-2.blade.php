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
                            <p class="auth__heading reg">Address Information </p>
                        </div>
                    </div>
                    <form action="{{ url('trainer/trainer_register_2_insert') }}"  method="post">
                        @csrf
                            <input type="hidden" name="register_id" value="{{ $register_id }}">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="address" class="active">Address*</label>
                                    <input type="text" name="address" class="form-control" id="address" placeholder="Enter Address">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="country" class="active">Country*</label>
                                    <input type="text" name="country" class="form-control" id="country" placeholder="Enter Country Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="state" class="active">state*</label>
                                    <input type="text" name="state" class="form-control" id="state" placeholder="Enter State Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="city" class="active">city*</label>
                                    <input type="text" name="city" class="form-control" id="city" placeholder="Enter city Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="zipcode" class="active">zip code*</label>
                                    <input type="text" name="zip_code" class="form-control" id="zipcode" placeholder="Enter zip code Name">
                                </div>
                            </div>
                        </div>
                  
                  
                

                        <div class="form-row mt-4">
                            {{-- <div class="col-lg-6 col-md-6 col-12 mb-2 mb-md-0">
                                <a href="register-1.php" class="login__button" >Previous</a>
                            </div> --}}
                            <div class="col-lg-6 col-md-6 col-12">
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