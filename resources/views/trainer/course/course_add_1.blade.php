
<?php

$title = "Course add";
$activeNav = 'course-add';
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
                <a href="{{ url('trainer/trainer_course_logs') }}" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Course Logs</h5>
                </a>
            </div>
        </div>

     <form action="{{ route('course.course_insert') }}"  method="post" >
         @csrf
        <div class="row">
            <div class="col-md-6 col-12">
                <p class="blue">Product Details</p>
                <label class="course_lbl">Select Category</label>
                <select class="cat_slct" name="product_id">
                    @foreach ($product as $products)
                    <option value="{{ $products->id }}">{{ $products->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 col-12">
                {{-- <p class="blue">Quiz</p>

                <div class="quiz_side">
                    <div class="row">
                        <div class="col-12">
                            <p class="m">Total Questions</p>
                            <p class="m">10 Questions</p>
                        </div>
                        <div class="col-12">
                            <p class="m">Time</p>
                            <p class="m"><i class="far fa-clock"></i> 00:10:00</p>
                        </div>
                    </div>
                </div> --}}

                <div class="row">
                    <div class="col-12 text-right">
                        <button type="submit" class="strt_quiz">Start</button>
                    </div>
                </div>

            </div>
        </div>
    </form>

    </div>
</section>


@endsection
