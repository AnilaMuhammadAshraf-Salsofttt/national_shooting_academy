<?php

$title = "Cart";
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
        <div class="row">
            <div class="col-lg-8 col-12">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <span class="alert-danger">{{$error}}</span><br><br>
                    @endforeach
                @endif
                @if(session()->has('message'))
                    <div class="alert alert-info">
                        {{ session()->get('message') }}
                    </div>
                @endif
            <form id="msform" class="basic-form" method="post" action="{{ url('checkout_insert') }}">
                @csrf
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active">
                            <h3>Address </h3>
                            <img src="{{ asset('user_asset/images/user-card.png') }}" class="img-fluid">
                        </li>
                        <li>
                            <h3>Payment</h3>
                            <img src="{{ asset('user_asset/images/cards.png') }}" class="img-fluid">
                        </li>
                        <li>
                            <h3>Confirm</h3>
                            <img src="{{ asset('user_asset/images/check-tick.png') }}" class="img-fluid">
                        </li>
                    </ul>
                    <!-- fieldsets -->
                    <fieldset>
                        <h5 class="blue-text text-uppercase">Address</h5>
                        <h6 class="mt-2">Personal Information </h6>
                        <div class="row mt-3">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Email Address*</label>
                                    <input value="{{old('email')}}" type="email" name="email" id="email" class="bantu-input w-100" placeholder="Enter Email Address" required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Phone*</label>
                                    <input value="{{old('phone')}}" type="number" name="phone" class="bantu-input w-100" placeholder="Enter Phone Number " required>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <h5 class="blue-text my-3 text-uppercase">Billing Address</h5>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">First Name*</label>
                                    <input value="{{old('first_name')}}" type="text" name="first_name" class="bantu-input w-100" placeholder="Enter First Name " required>
                                    @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Last Name*</label>
                                    <input value="{{old('last_name')}}" type="text" name="last_name" class="bantu-input w-100" placeholder="Enter Last Name " required>
                                    @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-field">
                                    <label for="">Address*</label>
                                    <input value="{{old('address1')}}" type="text" name="address1" class="bantu-input w-100" placeholder="Enter Address Line 1 " required>
                                    @error('address1')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-field">
                                    <input value="{{old('Address2')}}" type="text" name="address2" class="bantu-input w-100" placeholder="Enter Address Line 2 " >
                                    @error('address2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">City*</label>
                                    <input value="{{old('city')}}" type="text" name="city" class="bantu-input w-100" placeholder="Enter City" required>
                                    @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">State*</label>
                                    <input value="{{old('state')}}" type="text" name="state" class="bantu-input w-100" placeholder="Enter State " required>
                                    @error('state')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Zip Code*</label>
                                    <input value="{{old('zip')}}" type="text" name="zip" class="bantu-input w-100" placeholder="Enter Zip Code " required>
                                    @error('zip')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Country*</label>
                                    <input value="{{old('country')}}" type="text" name="country" class="bantu-input w-100" placeholder="Enter Country" required>
                                    @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <p class="black-text">
                                    <input type="checkbox" id="shipAd" name="radio-group" class="">
                                    <label for="shipAd" class="bordered">Ship to a different location</label>
                                </p>
                            </div>
                            <div class="shipping-address-div different_address_form d-none" >
                                <div class="row ml-0 mr-0">
                                    <div class="col-12">
                                        <h5 class="fs-subtitle">Shipping Address </h5>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="shipping_first_name" placeholder="Enter First Name ">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="shipping_last_name" placeholder="Enter Last Name ">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="shipping_address1" placeholder="Enter Address Line 1 ">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="shipping_address2" placeholder="Enter Address Line 2">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="shipping_city" placeholder="Enter City">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="shipping_state" placeholder="Enter State">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">

                                            <input type="number" class="bantu-input w-100" name="shipping_zip" placeholder="Enter Zip Code">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="form-field">
                                            <input type="text" class="bantu-input w-100" name="shipping_country" placeholder="Enter Country">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="next" id="next" class="next btn-cc-1" value="Continue">
                    </fieldset>
                    <fieldset>
                        <h5 class="blue-text mb-4 text-uppercase">Payment </h5>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Card Holder Name*</label>
                                    <input value="{{old('card_name')}}" type="text" name="card_name" class="bantu-input w-100" placeholder="Enter Card Holder's Name" required>
                                    @error('card_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">Card Number*</label>
                                    <input value="{{old('card_number')}}" type="number" name="card_number" class="bantu-input w-100" placeholder="Enter Card Number" required maxlength="16" >
                                    @error('card_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field">
                                    <label for="">CVV Number*</label>
                                    <input type="number" name="cvc" class="bantu-input w-100" placeholder="Enter CVV Number" required maxlength="4" >
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-field expiry-field">
                                    <label for="">Expiry Date*</label>
                                    <input type="text" name="expiry"   id="exp_month_year" class="bantu-input w-100"  placeholder="Enter Expiry Date" required>
                                </div>
                            </div>
                        </div>
                        <input type="button" name="previous" class="previous btn-cc-1" value="Previous">
                        <input type="button" name="next" class="next btn-cc-1" value="Continue">
                    </fieldset>
                    <fieldset>
                        <div class="row">
                            <div class="col-12">
                                <h5 class="blue-text text-uppercase mb-3">Item Number</h5>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive cart-table px-3">
                                    <table class="table shopping-cart-wrap cart m-0">
                                        <thead class="text-muted border-0">
                                            <tr>
                                                <th scope="col">Product</th>
                                                <th scope="col" width="200" class="">Price</th>
                                                <th scope="col" width="120">Quantity</th>
                                                <th scope="col" width="200" class="">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($cartItem as $cartItems)

                                            <tr>
                                                <td class="pt-4 pb-4">
                                                    <div class="img-wrap">
                                                            <img src="{{ $cartItems->attributes->image }}" class="img-fluid mr-4" alt=""  style="max-width: 50%;">
                                                            <div class="product-description">
                                                                <p class="text-muted mt-0">{{ $cartItems->name }}</p>
                                                            </div>
                                                    </div>
                                                </td>
                                                <td class=""><small class="text-muted">${{ $cartItems->price }}</small></td>
                                                <td class=""><small class="text-muted">{{ $cartItems->quantity }}</small></td>
                                                <td class=""><small class="text-muted">${{ $cartItems->quantity*$cartItems->price }}</small></td>
                                            </tr>
                                    @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ml-auto col-xl-4 col-lg-6 col-12">
                                @php
                                    $taxAmount = $sub_total * (7 / 100);
                                @endphp
                                <div class="row">
                                    <div class="col-6">
                                        <p class="color__black semi-bold">Sub Total</p>
                                        <p class="color__black semi-bold"><small>Sales Tax</small></p>
                                        <p class="color__black semi-bold">Total</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="color__black semi-bold">${{ $sub_total }}</p>
                                        <p class="color__black semi-bold">{{$taxAmount}} <small>(7%)</small></p>
                                        <p class="color__black semi-bold">${{ $sub_total + $taxAmount}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="button" name="previous" class="previous btn-cc-1" value="Previous">
                        <input type="submit" name="submit" class="submit btn-cc-1" value="Place Order">
                        <!-- Button trigger modal -->
                        <!-- <button type="button" class="btn-cc-1" data-toggle="modal" data-target="#exampleModal">
                            Continue </button> -->
                    </fieldset>
                </form>
            </div>
            <div class="col-lg-4 col-12">
                <div class="cart-wrapper shop-cart">
                    <div class="cart-head">
                        <h5>Cart Summary</h5>
                    </div>
                    <div class="cart-list">
                        <ul>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <div class="sub-total">
                                        <p>Sub Total</p>
                                    </div>
                                    <div class="amount">
                                        <p>${{ $sub_total }}</p>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <div class="d-flex justify-content-between">
                                    <div class="sub-total">
                                        <p>Sales Tax</p>
                                    </div>
                                    <div class="amount">
                                        <p>%7</p>
                                    </div>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <div class="d-flex justify-content-between mt-3 align-items-center">
                                    <div class="total">
                                        <h6>Total</h6>
                                    </div>
                                    <div class="amount">
                                        @php
                                            $taxAmount = $sub_total * (7 / 100);
                                        @endphp
                                        <p class="red-text">${{ $sub_total + $taxAmount}}</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <p class="black-text px-2 mb-4">
                        <input type="checkbox" id="term1" name="radio-group">
                        <label for="term1" class="bordered">I agree to the Terms and Conditions</label>
                    </p>
                    <div class="go-to-payment text-center">
                        <a class="btn-cc-1" data-toggle="modal" data-target="#checkOut">Checkout</a>
                    </div>
                    <!-- Cart-list -->
                </div>


            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="checkOut" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content national_modal_generic">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body px-4 nmg">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <img src="images/check.png" alt="">
                    <h4 class="modal_h4">System Message</h4>
                    <p class="modal_p">Congratulations your order has been placed</p>
                </div>
                <div class="text-center">
                    <a href="#" data-dismiss="modal" class="modal__btn">got it</a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection


@section('js')

    <script>
        $(document).ready(function () {
            $("#card_number").attr('maxlength', '6');
            $(".msform").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    email: "Please enter Email",
                    name: "Please enter Name"
                },
                submitHandler: function (form) {
                    form.submit();
                },
            });

            $("#shipAd").change(function () {
                $('.different_address_form').toggleClass('d-none');
            });
            $("#exp_month_year").keyup(function () {
                if ($(this).val().length == 2) {
                    $(this).val($(this).val() + "/");
                }
            });
        })
    </script>

{{-- <script>
$(document).ready(function(){

$(".msform").validate({
  rules: {
    // simple rule, converted to {required:true}

    // compound rule
    email: {
      required: true,
      email: true
    }
  }
});
// $("#msform").multiStepForm({
//         activeIndex : 0,
//         allowClickNavigation : true,
//         allowUnvalidatedStep : false,
//         hideBackButton : false,
//         validate: {
//             rules : {
//                 name : "required",
//                 email : {
//                     required : true,
//                     email : true
//                     }
//                 }
//             }
//         });

//     if ( $('#msform')[0].checkValidity() ) {
//         true
//     // the form is valid
// }
// $("#next").click(function(){
// 		var form = $("#msform");
// 		form.validate({
// 			rules: {
//                 email: {
//                 required: true,
//                 email: true
//                 }
// 			},
// 			messages: {
// 				email: {
// 					required: "email required",
// 				},
// 			}
// 		});
// 		});
		});

</script> --}}


@endsection
