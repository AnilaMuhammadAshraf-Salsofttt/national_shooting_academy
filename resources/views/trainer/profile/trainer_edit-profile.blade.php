<?php

$title = "User Dashboard";
$activeNav = 'user-dash';
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

    <div class="container">

        <div class="row mb-5">
            <div class="col-12">
                <h5 class="i_t mb-0">Edit Profile</h5>
            </div>
        </div>

        <form action="{{ url('trainer/trainer_front_update') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="row mb-5">
            <div class="col-12 d-flex align-items-center flex-column flex-md-row">
                <p class="user-p">Trainer Id 001</p>
                <div class="media align-items-center mx-auto inner-media">
                    <div class="media-body">

                        <div class="attached"> 
                            <img src="{{  Auth::user()->userimage ? Auth::user()->userimage:  asset('images/avatar.jpg') }}" class="mr-3"  id="user_image" alt="">
                            <button type="button"  name="file"  class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                            <input type="file"  accept="image/*"  onchange="readURL(this, 'user_image')" id="upload" name="user_image">
                           
                            <input type="hidden" id="personal_img_base64" name="image">
                          </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                    <div class="card profile-card">
                        <div class="card-header">
                            <p>Personal Information</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">First Name</p>
                                    <input type="text" name="first_name" value="{{ Auth::user()->first_name }}" class="cc" placeholder="First Name">
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">Last Name</p>
                                    <input type="text" name="last_name" value="{{ Auth::user()->last_name }}" class="cc" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 col-12 phone_edit">
                                    <p class="user-p mb-2">Phone Number</p>
                                    <input type="tel" name="phone" class="cc" id="phone" placeholder="Phone Number" value="{{ Auth::user()->phone }}">
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">Email</p>
                                    <p class="user-meta">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-header">
                            <p>Address Details</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">Address</p>
                                    <input type="text" name="address" class="cc" placeholder="Address" value="{{ Auth::user()->address }}">
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">Country</p>
                                    <input type="text" name="country" class="cc" placeholder="Country Name" value="{{ Auth::user()->country }}">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">State</p>
                                    <input type="text" name="state" class="cc" placeholder="State Name" value="{{ Auth::user()->state }}">
                                </div>
                                <div class="col-md-6 col-12">
                                    <p class="user-p mb-2">City</p>
                                    <input type="text" name="city" class="cc" placeholder="City Name" value="{{ Auth::user()->city }}">
                                </div>
                                <div class="col-md-6 col-12 mt-4">
                                    <p class="user-p mb-2">Zip Code</p>
                                    <input type="number" name="zipcode" class="cc" placeholder="Zip Name" value="{{ Auth::user()->zipcode }}">
                                </div>
                            </div>
                            {{-- <div class="row mt-4">
                            <button type="submit" class="login__button">Update</button>
                            </div> --}}

                               <div class="form-row">
                                <div class="col-6">
                                    <button type="submit" class="login__button">Update</button>
                                </div>
                                <div class="col-6">
                                    <a href="{{ url('user_front_change_password') }}" class="login__button">Change Password</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </form>
            </div>
        </div>




    </div>
</section>


<!-- Modal -->
<div class="modal fade" id="change-password" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content national_modal_generic">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body nmg">
                <div class="row">
                    <div class="col-12">
                        <h5 class="change-head">Change Password</h5>
                        <form action="">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="login_password" class="active">current password*</label>
                                        <input type="password" class="form-control" id="login_password" placeholder="Enter Password">
                                        <button class="see_password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="login_password" class="active">new password*</label>
                                        <input type="password" class="form-control" id="login_password" placeholder="Enter Password">
                                        <button class="see_password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="login_password" class="active">Retype password*</label>
                                        <input type="password" class="form-control" id="login_password" placeholder="Enter Password">
                                        <button class="see_password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                    </div>
                                </div>
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

@section('js');

<script src="{{ asset('user_asset/js/phone_script.js') }}"></script>


    <script>
     
        function readURL(input, target) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#'+target).attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script>
@endsection