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
                <div class="form__wrapper sub_form">
                    <div class="reg-header text-left">
                        <h4>card details</h4>
                    </div>

                    <form action="{{ url('trainer/trainer_register_4_insert') }}" method="post">
                        @csrf

                        <input type="hidden" name="register_id" value="{{ $register_id }}">
                        <input type="hidden" name="package_id" value="{{ $package_id }}">

                    <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cardholderName" class="active">Cardholder name*</label>
                                    <input type="text"  class="form-control" id="cardholderName" placeholder="Enter cardholder name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cardNumber" class="active">card number*</label>
                                    <input type="number" name="card_number" class="form-control" id="cardNumber" placeholder="Enter card number">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="cvv" class="active">CVV Code*</label>
                                    <input type="number" name="cvv_code" class="form-control" id="cvv" placeholder="Enter CVV Code">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="expiry" class="active">Expiry Month/Year*</label>
                                    <input type="text" name="exp_month_year" class="form-control" id="expiry" placeholder="Enter Expiry Month/Year">
                                </div>
                            </div>
                        </div>
                        <div class="form-row mt-4">
                            {{-- <div class="col-lg-6 col-md-6 col-12 mb-2 mb-md-0">
                                <a href="register-3.php" class="login__button">Previous</a>
                            </div> --}}
                            <div class="col-lg-6 col-md-6 col-12">
                                <button type="submit" class="login__button" >Sign Up</button>
                                {{-- <button href="" class="login__button" data-toggle="modal" data-target="#r_succ">Sign Up</button> --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>





<!-- Modal -->
<div class="modal fade" id="r_succ" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content national_modal_generic">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body nmg">
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/check.png" alt="">
                <h4 class="modal_h4">System Message</h4>
                <p class="modal_p">Registration successfull!</p>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection