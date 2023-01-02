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
                <a href="{{ url('booked_course_view/'.Request::segment(2)) }}"><h5 class="i_t mb-0"><i class="fas fa-angle-left"></i> Courses</h5></a> 

            </div>
        </div>
        <div class="course-inner">
            <div class="course-inner-header p-4 d-flex justify-content-between">
                <p class="sidebar-heading my-0">Trainer's Details</p>
                <p class="sidebar-heading my-0">Status: Inprogress</p>
            </div>
            <div class="p-4">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <img src="images/trainer-icon.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <p class="black-text">Trainer Name</p>
                        <p class="mt-0">Abc</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <p class="black-text">Trainer Email</p>
                        <p class="mt-0">abc@xyz.com</p>
                    </div>
                </div>
            </div>


            <div class="course-inner-header p-4">
                <p class="sidebar-heading my-0">Lecture Details</p>
            </div>
            <div class="p-4">

                
           

                {{-- <div class="row justify-content-between mt-3">
                    <div class="col-lg-6 col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#_" class="btn-cc-1 w-100 text-center">Previous</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#_" class="btn-cc-2 w-100 text-center">Mark Complete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xl-3">
                        <a href="u-booked-courseDetails-4.php" class="btn-cc-1 w-100 text-center">Next</a>
                    </div>
                </div> --}}

                <div class="card quiz_card">
                    <div class="card-body">
                        <form id="msform">
                            @php
                                $id=1;
                                $iteration=0;
                               
                            @endphp
                            @foreach ($booked_course->syllabus as $syllabuses)
                            @php
                                $iteration++;
                            @endphp
                            <fieldset>
                                <div class="row">
                                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                                        <p class="black-text mt-0">Lecture No</p>
                                        <p class="mt-0">{{ $id++ }}</p>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                                        <p class="black-text mt-0">Lecture Title</p>
                                        <p class="mt-0">{{ $syllabuses->title }}</p>
                                    </div>
                                    <div class="col-xl-2 col-lg-3 col-sm-4 mt-3">
                                        <p class="black-text mt-0">Lecture Duration</p>
                                        <p class="mt-0">{{ $syllabuses->duration }} mins</p>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <video width="100%" height="auto" controls>
                                            <source src="{{ url($syllabuses->video) }}" type="video/mp4">
                                          </video>
                                        {{-- <a href="#_"><img src="{{ asset('user_asset/images/course-video.png') }}" alt="" class="img-fluid"></a> --}}
                                    </div>
                                </div>
                              @if ($iteration > '1')

                                <input type="button" name="previous" class="previous site-btn mt-3 px-5 py-3" value="Previous" />
                                  
                              @endif

                                <input type="button" name="next" class="next quiz_next mt-3 site-btn l-blue-btn px-5 py-3" value="Next" />
                                <input type="button" name="next" class="next quiz_next mt-3 site-btn l-blue-btn px-5 py-3" value="skip" />
                                <a  href="javascript:void(0)" onclick="mark_completed('{{ $syllabuses->id }}')"  name="mark_completed" 
                                    class="mt-3 site-btn l-blue-btn px-5 py-3"  >
                                    Mark Completed
                                </a>
                                {{-- <a href="#_" class="quiz_skip mt-3">Skip</a> --}}
                            </fieldset>

                            @endforeach


                            {{-- <fieldset>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="ww">
                                            <div class="w">
                                                <p class="blue">Question 1</p>
                                            </div>
                                            <div class="c">
                                                <p class="time">0:07:02</p>
                                            </div>
                                            <div class="r">
                                                <p class="blue">Question: 1/10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 ">
                                        <p class="texty">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 1
                                                    <input type="radio" checked="checked" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 2
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 3
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 4
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next quiz_next mt-3 site-btn l-blue-btn px-5 py-3" value="Continue" />
                                <a href="#_" class="quiz_skip mt-3">Skip</a>
                            </fieldset> --}}
                            <fieldset>

                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p class="cleared">Congratulations You Have Cleared The Lectures </p>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-12">
                                        <div class="quiz-wrper">
                                            <img src="images/quiz-img.png" alt="">
                                            <a href="" class="license">Download License</a>
                                        </div>
                                    </div>
                                </div>    --}}
                                
                                
                                {{-- <input type="button" name="previous" class="previous site-btn px-5 mt-3 py-3" value="Previous" /> --}}
                            </fieldset>

                        </form>
                    </div>
                </div>



            </div>



        </div>
    </div>
</section>

@endsection




@section('js')

<script>

function mark_completed(syllabi_id){

           var course_id = "{{ Request::segment(2) }}";
    
          $.ajax({
              url: "{{ route('syllabi.complete.mark') }}",
              method: "post",
              data:{syllabi_id:syllabi_id,
                course_id:course_id,
                _token: "{{ csrf_token() }}" },
			
              success:function(data){
                $.notify(data.task, data.completed);
              }
          })
    
        }
  
     

</script>

@endsection