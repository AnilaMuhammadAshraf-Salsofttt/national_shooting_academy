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

        <form action="{{ url('user_front_update_password') }}" method="post" enctype="multipart/form-data">
            @csrf
     
        <div class="row">
            <div class="col-12">
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
                    <div class="card profile-card">
                        <div class="card-header">
                            <p>Change Password</p>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="login_password" class="active">current password*</label>
                                    <input type="password" name="current_password" class="form-control" id="login_password" placeholder="Enter Password">
                                    <button class="see_password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="login_password" class="active">new password*</label>
                                    <input type="password" name="password" class="form-control" id="login_password" placeholder="Enter Password">
                                    <button class="see_password"><i class="fa fa-eye" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                     
                       
                        <div class="card-body">
                        

                               <div class="form-row">
                                <div class="col-12">
                                    <button type="submit" class="login__button">Update</button>
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