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
            <div class="row">
                <div class="col-12 text-center text-md-left">
                    <h5 class="i_t">notifications</h5>
                </div>
            </div>


            @foreach ($notification as $notifications)
                <div class="row">
                    <div class="col-12">
                        <div class="notif_wrap shadow-sm">
                            <div class="left">

                                <div @if (!empty($notifications->read_at))
                                     class="alert alert-success"
                                     @else
                                     class="alert alert-danger"
                                    @endif >

                                    @php
                                        $data = json_decode($notifications->data, false);
                                    @endphp
                                    <strong class="default"> {{ $data->subject  }}
                                        @if(is_object($data->product))
                                            @if($notifications->type == 'license_book')
                                                ({{$data->product->quiz_title}})
                                            @endif
                                        @else
                                            Of {{ $data->product  }} in
                                        @endif

                                        <span class="text-success">
                                            ${{ $data->subtotal  }}
                                        </span>
                                    </strong>
                                </div>

                            </div>
                            <div class="right">
                                <p>{{ \Carbon\Carbon::createFromTimeStamp(strtotime($notifications->created_at))->diffForHumans() }}</p>

                                @if (!empty($notifications->read_at))
                                    <a href="#">Read</a>
                                @else
                                    <a href="{{ url('read_notification/'.$notifications->id) }}">Read</a>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        </div>
    </section>

@endsection
