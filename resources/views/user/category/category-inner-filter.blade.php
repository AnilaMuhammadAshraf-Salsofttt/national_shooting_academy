<?php

$title = "Category inner";
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
    <img src="{{ asset('user_asset/images/inner_target.png') }}" class="target inner-target" alt="" srcset="">

    <div class="container">


        <form action="{{ url('user_inner_category_filter') }}" method="get" >

        <div class="row mb-5">
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


            <div class="col-12 d-flex justify-content-between align-items-center  ">
                <a href="{{ url('user_category') }}" class="back-link"><i class="fas fa-angle-left"></i>Back</a>
                <div class="sort-f-w">
                    <label for="sbf">Sort By:</label>
                    <select name="sort_by" id="sbf" class="sortByFilter">
                        <option ></option>
                        <option value="1000">Price low to high</option>
                        <option value="1">Price high to low</option>
                        <option value="A-Z">A-Z</option>
                        <option value="Z-A">Z-A</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3 col-12">
                <div class="side-panel">
                    <h4 class="heading">Categories</h4>
                    <div class="side-panel-inner border-bottom">
                        @foreach ($category as $categories)

                        <p class="site-text black-text">
                            <input type="checkbox" class="cat_clas" id="test{{ $categories->id }}" value="{{ $categories->id }}" name="radio_group[]">
                            {{-- <input type="checkbox" class="cat_clas" onclick="myfunction('{{ $categories->id }}')" id="test{{ $categories->id }}" value="{{ $categories->id }}" name="radio-group[]"> --}}
                            <label for="test{{ $categories->id }}">{{ ucfirst($categories->name) }}</label>
                        </p>
                        @endforeach


                    </div>
                    <div class="side-panel-inner">
                        <p class="sidebar-heading mb-4">Price Range</p>
                        <div id="demo_1"></div>
                        <div class="price-range-value text-center">
                            <p class="price-range-amount">

                                <input type="hidden" id="start_amount" value="{{ Request::get('start_amount') }}" name="start_amount">
                                <input type="hidden" id="end_amount" value="{{ Request::get('end_amount') }}" name="end_amount">

                            </p>
                        </div>
                        <div class="sidepanel-btn-div">
                            <button type="submit" href="#" class="login__button">apply filter</button>
                        </div>
                    </div>
                </div>
            </div>


        </form>


            <div class="col-lg-9 col-12">

                <div class="row mt-4 show_product">
                    @foreach ($product as $products)

                    <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                          <a class="prod-a2c" href="{{ url('user_inner_product/'.$products->id.'/'.$products->category_id) }}">
                        <object>
                        <div class="product-div">

                            @if ($products->wishlist == '')

                                <a  class="prod-wishlist" href="{{ url('add_to_wishlist/'.$products->id)  }}" class="wishlist">
                                    <i class="far fa-heart" style="color:red;"  ></i></a>
                            @else
                                <a class="prod-wishlist" href="{{ url('remove_to_wishlist/'.$products->id)  }}" class="wishlist">
                                    <i  style="color:red;" class="fa fa-heart"></i></a>
                            @endif

                            <a class="prod-a2c" href="{{ url('user_inner_product/'.$products->id.'/'.$products->category_id) }}"><i class="fas fa-shopping-cart"></i></a>
                            <img src="{{asset('storage/banner_image/'. $products->base_image) }}" alt="n/a">
                            <p class="product-title">{{ ucfirst($products->name) }}</p>
                              @php
                            $percent=20/100;
                             $newprice=$products->price * $percent;
                            @endphp
                            <p class="product__price"><del>${{ $products->price }}</del>  ${{ $newprice }}  </p>
            
                        </div>
                        </object>
                    </a>
                    </div>
                    @endforeach


                </div>

            </div>
        </div>

        <div class="row dataTables_wrapper">
        {{ $product->render() }}

        </div>
    </div>
</section>

@endsection
