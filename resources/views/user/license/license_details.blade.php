<?php

$title = "License Categories";
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
        <div class="row mb-4">
            <div class="col-12">
                <a href="{{ route('license.view') }}" class="pi-backLink"><i class="fas fa-angle-left mr-1"></i> Category {{ $license->category->name }}</a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="{{ asset('user_asset/images/laycaanse.png') }}" class="licesnce-ban" alt="">
            </div>
            <div class="col-lg-6">
                <h5 class="lic-1attmp">No of Attempts Allowed:  {{ $license->attempts }}</h5>
                {{-- <h5 class="lic-1attmp">No of Attempts Availed:  {{ $license->license_attempt->count() }}</h5>
                <h5 class="lic-1attmp">No of Attempts Remaining:  {{ $license->attempts-$license->license_attempt->count() }}</h5> --}}
                <h5 class="lic-1attmp">License Fee ${{ $license->fee }}</h5>

                <p class="lic-1desc">{{ $license->description }}</p>
                @if($license->payment)
                    <a href="#" class="btn-blue">Already Applied</a>
                    @else
                <a href="#" class="btn-blue" data-toggle="modal" data-target="#make-payment">Apply</a>
                @endif
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h6 class="bb-1">Description</h6>
                <p class="lic-1desc">{{ $license->description }}</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h6 class="bb-1">License Details</h6>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Category</span>
                <span class="lic-blu">{{ $license->category->name }}</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Attempts</span>
                <span class="lic-blu">{{ $license->attempts }}</span>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Description</span>
                <span class="lic-blu">{{ $license->description }}</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Fee</span>
                <span class="lic-blu">{{ $license->quiz_title}}</span>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Quiz title</span>
                <span class="lic-blu">{{ $license->quiz_title }}</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Duration</span>
                <span class="lic-blu">{{ $license->duration}}</span>
            </div>
        </div>
        <div class="row justify-content-center justify-content-lg-start">
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Passing Criteria</span>
                <span class="lic-blu">{{ $license->passing_criteria }}</span>
            </div>
            <div class="col-md-2 text-center text-md-left">
                <span class="lic-b">Points Per Question</span>
                <span class="lic-blu">{{ $license->points_per_question}}</span>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="make-payment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content national_modal_generic">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body nmg xpading">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="i_t mb-4">Card Details</h5>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-sm-row">
                        <div class="text-center text-md-left">
                            <p class="llt m-0">Category: {{  $license->category->name }}</p>
                            <p class="llt m-0">No Of Attempts: {{ $license->attempts }}</p>
                        </div>
                        <p class="llt m-0">Charges: ${{ $license->fee }}</p>
                    </div>
                </div>
                <form id=payment_form>
                    @csrf()
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cardholderName" class="active">Cardholder name*</label>
                                <input type="text" name="name" placeholder="Enter Card Holder Name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cardNumber" class="active">card number*</label>
                                <input type="text" name="card_number" id="card_number" placeholder="Enter Card Number*" maxlength="16" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cvv" class="active">CVV Code*</label>
                                <input type="text" name="cvv" id="cvv" placeholder="-" maxlength="4" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="expiry" class="active">Expiry Month/Year*</label>
                                <div role="wrapper" class="gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
                                    <input type="text" name="exp_month_year" id="exp_month_year"  maxlength="5" placeholder="/*" class="form-control">
                                    {{-- <span class="input-group-append" role="right-icon">
                                        <button class="btn btn-outline-secondary border-left-0" type="button">
                                            <i class="gj-icon">event</i>
                                        </button>
                                    </span> --}}
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-row mt-4">
                        <div class="col-12">
                            <a href="#" class="login__button w-50 mx-auto d-table" data-dismiss="modal">Pay</a>
                        </div>
                    </div> --}}
                    <div class="row mt-5 mb-3  show_button">
                        <div class="col-12 button_remove">
                            <div class="form-field text-center">
                                <input type="submit" class="login__button w-50 mx-auto d-table" value="confirm" >
                            </div>
                        </div>
                        <div class="col-12 d-none" id="loader" style="margin-left: 110px;">

                            <div class="form-field text-center">

                            <img  class="rounded float-left" src="{{ asset('user_asset/images/loader.gif') }}" style="width:350px;height:300px;margin-left: -50px;" alt="">
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="paymentsuccesfully" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="pr-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="10.843" height="10.843" viewBox="0 0 10.843 10.843">
                    <path id="Icon_awesome-times" data-name="Icon awesome-times" d="M7.477,11.046l3.082-3.082a.969.969,0,0,0,0-1.37l-.685-.685a.969.969,0,0,0-1.37,0L5.421,8.991,2.339,5.909a.969.969,0,0,0-1.37,0l-.685.685a.969.969,0,0,0,0,1.37l3.082,3.082L.284,14.129a.969.969,0,0,0,0,1.37l.685.685a.969.969,0,0,0,1.37,0L5.421,13.1,8.5,16.184a.969.969,0,0,0,1.37,0l.685-.685a.969.969,0,0,0,0-1.37Z" transform="translate(0 -5.625)" fill="#ccc"/>
                  </svg>
              </span>
          </button>
          <div class="modal-body text-center pt-3 pb-4">
              <div class="svg-container">
                  <svg xmlns="http://www.w3.org/2000/svg" width="62" height="56.915" viewBox="0 0 62 56.915">
                    <g id="checkmark" transform="translate(0.5 0.492)">
                      <path id="Path_2488" data-name="Path 2488" d="M27.958,55.923a27.957,27.957,0,1,1,15.082-51.5,1.907,1.907,0,0,1-2.061,3.21A24.141,24.141,0,1,0,52.1,27.966c0-.8-.038-1.584-.112-2.359a1.906,1.906,0,0,1,3.795-.369q.129,1.346.129,2.727A27.99,27.99,0,0,1,27.958,55.923Zm0,0" transform="translate(0 0)" fill="#ed1c24" stroke="#ed1c24" stroke-width="1"/>
                      <path id="Path_2489" data-name="Path 2489" d="M162.682,53.117a1.892,1.892,0,0,1-1.347-.559L149.9,41.121a1.907,1.907,0,0,1,2.7-2.7l10.09,10.09,26.608-26.608a1.907,1.907,0,0,1,2.7,2.7L164.032,52.56a1.91,1.91,0,0,1-1.35.557Zm0,0" transform="translate(-131.548 -18.797)" fill="#ed1c24" stroke="#ed1c24" stroke-width="1"/>
                    </g>
                  </svg>
              </div>
              <h4 class="font-16 color-grey mb-3 font-semibold">Payment has been made successfully...!</h4>
          </div>
      </div>
    </div>
  </div>
@endsection

@section('js')

    <script>
        $(document).ready(function () {

            $('#payment_form').on('submit', function (e) {
                e.preventDefault();

                var card_number = $('#card_number').val();
                var exp_month_year = $('#exp_month_year').val();
                var cvv = $('#cvv').val();
                var license_id = "{{ Request::segment(2) }}";

                $.ajax({
                    url: "{{ route('license.book') }}",
                    method: "post",
                    data: {
                        card_number: card_number,
                        exp_month_year: exp_month_year,
                        cvv: cvv,
                        license_id: license_id,
                        _token: "{{ csrf_token() }}"
                    },
                    beforeSend: function () {
                        $('#loader').removeClass('d-none');
                        $('.button_remove').addClass('d-none');

                    },
                    success: function (data) {
                        $('#loader').addClass('d-none');

                        $('#paymentsuccesfully').modal('show');
                        $('#make-payment').modal('hide');

                    }
                })
            });

            $("#exp_month_year").keyup(function () {
                if ($(this).val().length == 2) {
                    $(this).val($(this).val() + "/");
                }
            });
        });

    </script>

@endsection
