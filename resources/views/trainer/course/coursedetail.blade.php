<?php

$title = "Course Details";
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



<section class="login bg-page position-relative text-center text-sm-left">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                <a href="{{ url('user_course') }}"><h5 class="i_t mb-0"><i class="fas fa-angle-left"></i> Courses</h5></a> 
            </div>
        </div>
        <div class="course-inner">
            <div class="course-inner-header p-4">
                <p class="sidebar-heading my-0">Trainer's Details</p>
            </div>
            <div class="p-4">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <img src="{{ $course->user->userimage?$course->user->userimage:asset('user_asset/images/trainer-icon.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <p class="black-text">Trainer Name</p>
                        <p class="mt-0">{{ $course->user->first_name." ".$course->user->last_name }}</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <p class="black-text">Trainer Email</p>
                        <p class="mt-0">{{ $course->user->email }}</p>
                    </div>
                </div>
            </div>
            <div class="course-inner-header p-4">
                <p class="sidebar-heading my-0">Course Details</p>
            </div>
            <div class="p-4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-7">
                        <div class="row">
                            <div class="col-7">
                                <p class="black-text mt-0">Course Name</p>
                                <p class="mt-0">{{ $course->name }}</p>
                            </div>
                            <div class="col-5">
                                <p class="black-text mt-0">Charges</p>
                                <p class="mt-0">${{ $course->charges }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 mt-3 mt-sm-0 col-sm-5">
                        <a href="#_" class="btn-cc-2" data-toggle="modal" data-target="#paynow">Book</a>
                    </div>
                    
                    <div class="col-12 mt-4">
                        <h6 class="medium"><span class="blue-text">Course Overview </span> Syllabus</h6>
                    </div>
                    <div class="col-xl-9 col-lg-10">
                        <p class="black-text mt-3">Description</p>
                        <p class="p-sm">{{ $course->description }}</p>
                    </div>
                    <div class="col-xl-9 col-lg-10 mt-4">
                        <p class="black-text">Features of Course</p>
                        <div class="row">
                            @foreach ($course->features as $features)
                                
                            <div class="col-sm-3 col-6">
                                <p class="p-sm">{{ $features->title }}</p>
                              
                            </div>
                            @endforeach

                            {{-- <div class="col-sm-3 col-6">
                                <p class="p-sm">Abc</p>
                                <p class="p-sm">Abc</p>
                                <p class="p-sm">Abc</p>
                                <p class="p-sm">Abc</p>
                                <p class="p-sm">Abc</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <p class="p-sm">Label</p>
                                <p class="p-sm">Label</p>
                                <p class="p-sm">Label</p>
                                <p class="p-sm">Label</p>
                                <p class="p-sm">Label</p>
                            </div>
                            <div class="col-sm-3 col-6">
                                <p class="p-sm">Abc</p>
                                <p class="p-sm">Abc</p>
                                <p class="p-sm">Abc</p>
                                <p class="p-sm">Abc</p>
                                <p class="p-sm">Abc</p>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
<div class="modal fade" id="paynow" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
       
          <form  id=payment_form>
              @csrf()
              
                  <div class="form-group">
          <div class="modal-body">
              <div class="row mb-4">
                  <div class="col-12 text-center">
                      <div class="modal-title">
                          <h5 class="font-5 color-red mb-0 font-semibold">Please complete your Payment</h5>
                      </div>
                  </div>
              </div>
           
                  <div class="row mb-3">
                      <div class="col-12">
                          <div class="form-field">
                              <label class="font-11 color-grey mb-0 font-normal">Enter Card Holder Name*</label>
                              <input type="text" name="name" placeholder="Enter Card Holder Name" class="form-control"> 
                          </div>
                      </div>
                  </div>
                  <div class="row mb-2">
                      <div class="col-12">
                          <div class="form-field">
                              <label class="font-11 color-grey mb-0 font-normal">Enter Card Number*</label>
                              <input type="text" name="card_number" id="card_number" placeholder="Enter Card Number*" maxlength="16" class="form-control">
                          </div>
                      </div>
                  </div>
                  <div class="row mb-2">
                      <div class="col-6">
                          <div class="form-field">
                              <label class="font-11 color-grey mb-0 font-normal">CVV*</label>
                              <input type="text" name="cvv" id="cvv" placeholder="-" maxlength="4" class="form-control">
                          </div>
                      </div>
                      <div class="col-6">
                          <div class="form-field">
                              <label class="font-11 color-grey mb-0 font-normal">Expiry Month/Year*</label>
                              <input type="text" name="exp_month_year" id="exp_month_year"  maxlength="5" placeholder="/*" class="form-control">
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-12">
                          <div class="form-field">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1" required class="form-control">
                              <label class="form-check-label" for="exampleCheck1">Terms and conditions</label>
                          </div>
                      </div>
                  </div>
                  <div class="row mt-5 mb-3  show_button">
                      <div class="col-12 button_remove">
                          <div class="form-field text-center">
                              <input type="submit" class="btn-cc-2" value="confirm" >
                          </div>
                      </div>
                      <div class="col-12 d-none" id="loader" style="margin-left: 110px;">

                          <div class="form-field text-center">

                          <img  class="rounded float-left" src="{{ asset('user_asset/images/loader.gif') }}" style="width:350px;height:300px;margin-left: -50px;" alt="">
                          </div>
                      </div>

                  </div>
          </div>		
        </div>		
      </form>

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
$(document).ready(function(){

$('#payment_form').on('submit', function(e) {
           e.preventDefault(); 
    
           var card_number = $('#card_number').val();
           var exp_month_year = $('#exp_month_year').val();
           var cvv = $('#cvv').val();
           var course_id = "{{ Request::segment(2) }}";
    
          $.ajax({
              url: "{{ route('course.book') }}",
              method: "post",
              data:{card_number:card_number,
                exp_month_year:exp_month_year,
                cvv:cvv,
                course_id:course_id,
                _token: "{{ csrf_token() }}" },
				beforeSend: function(){
              $('#loader').removeClass('d-none');
              $('.button_remove').addClass('d-none');
			  
                 },
              success:function(data){
				  $('#loader').addClass('d-none');

               $('#paymentsuccesfully').modal('show'); 
               $('#paynow').modal('hide'); 
                // setInterval(function() {
                // reload_data()
                // }, 3000);
              }
          })
    
       });

	   $("#exp_month_year").keyup(function(){
                if ($(this).val().length == 2){
                    $(this).val($(this).val() + "/");
                }
            });
       });

</script>

@endsection