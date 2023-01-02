<?php

$title = "Wishlist";
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
            <div class="col-12">
                <h5 class="i_t mb-0">Wishlist</h5>
            </div>
        </div>
        <div class="row">
            @foreach ($wishlist as $wishlists)
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-div">

                @if ($wishlists == '')

                    <a  class="prod-wishlist" href="{{ url('add_to_wishlist/'.$wishlists->product_id)  }}" class="wishlist">
                        <i class="far fa-heart" style="color:red;"  ></i></a>
                @else
                    <a class="prod-wishlist" href="{{ url('remove_to_wishlist/'.$wishlists->product_id)  }}" class="wishlist">
                        <i  style="color:red;" class="fa fa-heart"></i></a>
                @endif




                    <a class="prod-a2c" href="{{ url('user_inner_product/'.$wishlists->product_id.'/'.$wishlists->product->category_id) }}"><i class="fas fa-shopping-cart"></i></a>
                    <img src="{{ $wishlists->product->base_image }}" alt="n/a">
                    <p class="product-title">{{ $wishlists->product->name }}</p>
                    <p class="product__price">${{ $wishlists->product->price }}</p>
                </div>
            </div>
            @endforeach

            {{-- <div class="col-lg-3 col-md-6 col-12">
                <div class="product-div">
                    <button class="prod-wishlist"><i class="fas fa-heart"></i></button>
                    <a class="prod-a2c" href="u-productInner.php"><i class="fas fa-shopping-cart"></i></a>
                    <img src="images/merch-1.png" alt="n/a">
                    <p class="product-title">Lorem Ipsum Product</p>
                    <p class="product__price">$205.00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-div">
                    <button class="prod-wishlist"><i class="far fa-heart"></i></button>
                    <a class="prod-a2c" href="u-productInner.php"><i class="fas fa-shopping-cart"></i></a>
                    <img src="images/merch-1.png" alt="n/a">
                    <p class="product-title">Lorem Ipsum Product</p>
                    <p class="product__price">$205.00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-div">
                    <button class="prod-wishlist"><i class="far fa-heart"></i></button>
                    <a class="prod-a2c" href="u-productInner.php"><i class="fas fa-shopping-cart"></i></a>
                    <img src="images/merch-1.png" alt="n/a">
                    <p class="product-title">Lorem Ipsum Product</p>
                    <p class="product__price">$205.00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-div">
                    <button class="prod-wishlist"><i class="far fa-heart"></i></button>
                    <a class="prod-a2c" href="u-productInner.php"><i class="fas fa-shopping-cart"></i></a>
                    <img src="images/merch-1.png" alt="n/a">
                    <p class="product-title">Lorem Ipsum Product</p>
                    <p class="product__price">$205.00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-div">
                    <button class="prod-wishlist"><i class="far fa-heart"></i></button>
                    <a class="prod-a2c" href="u-productInner.php"><i class="fas fa-shopping-cart"></i></a>
                    <img src="images/merch-1.png" alt="n/a">
                    <p class="product-title">Lorem Ipsum Product</p>
                    <p class="product__price">$205.00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-div">
                    <button class="prod-wishlist"><i class="far fa-heart"></i></button>
                    <a class="prod-a2c" href="u-productInner.php"><i class="fas fa-shopping-cart"></i></a>
                    <img src="images/merch-1.png" alt="n/a">
                    <p class="product-title">Lorem Ipsum Product</p>
                    <p class="product__price">$205.00</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="product-div">
                    <button class="prod-wishlist"><i class="far fa-heart"></i></button>
                    <a class="prod-a2c" href="u-productInner.php"><i class="fas fa-shopping-cart"></i></a>
                    <img src="images/merch-1.png" alt="n/a">
                    <p class="product-title">Lorem Ipsum Product</p>
                    <p class="product__price">$205.00</p>
                </div>
            </div> --}}
        </div>
        <div class="row dataTables_wrapper">
            <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
            </div>
            <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                    <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                        <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                        <li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection