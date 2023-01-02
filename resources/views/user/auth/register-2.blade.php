<?php
$title = "Login";
$activeNav = 'Login';
?>

@extends('user.layouts.master')
@section('content')

    <section class="banner inner_banner">
    @include('user.layouts.video')

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
                        <form action="{{ url('register_2_insert') }}" method="post">
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <span class="alert-danger">{{$error}}</span><br><br>
                                @endforeach
                            @endif
                            @csrf
                            <input type="hidden" name="register_id" value="{{ $register_id }}">
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="address" class="active">Address*</label>
                                        <input value="{{ old('address') }}" type="text" name="address"
                                               class="@error('address') is-invalid @enderror form-control" id="address"
                                               placeholder="Enter Address">
                                        @error('address')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="country" class="active">Country*</label>
                                        <input value="{{ old('country') }}" type="text" name="country"
                                               class="@error('country') is-invalid @enderror form-control" id="country"
                                               placeholder="Enter Country Name">
                                        @error('country')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="state" class="active">state*</label>
                                        <input value="{{ old('state') }}" type="text" name="state"
                                               class="@error('state') is-invalid @enderror form-control" id="state"
                                               placeholder="Enter State Name">
                                        @error('state')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="city" class="active">city*</label>
                                        <input value="{{ old('city') }}" type="text" name="city"
                                               class="@error('city') is-invalid @enderror form-control" id="city"
                                               placeholder="Enter city Name">
                                        @error('city')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="zipcode" class="active">zip code*</label>
                                        <input value="{{ old('zipcode') }}" type="text" name="zipcode"
                                               class="@error('zipcode') is-invalid @enderror form-control" id="zipcode"
                                               placeholder="Enter zip code Name">
                                        @error('zipcode')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
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
