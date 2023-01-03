<?php

$title = 'Categories';
$activeNav = 'user-dash';
?>



@extends('user.layouts.master')
<style>
   .box{ width: 80px;
 height: 70px;
 margin: 0;
 border: 2px solid black;
 padding: 5px;
   }
    </style>
@section('content')
    <section class="banner inner_banner">
        @include('user.layouts.video')

        <!-- <img src="images/banner-bg.png" class="banner_1" alt="N/A"> -->
        <img src="{{ asset('user_asset/images/banner-bg-inner-2.png') }}" class="banner_2" alt="N/A">
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
                <div class="col-md-12">
                    @if (Session::has('message'))
                        <div class="alert alert-success">
                            <strong>{{ Session::get('message') }}</strong>
                        </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-danger">
                            <strong>{{ Session::get('error') }}</strong>
                        </div>
                    @endif
                </div>
                <div class="col-12">
                    <a href="{{ url('user_inner_category/' . $product->category->id) }}" class="pi-backLink"><i
                            class="fas fa-angle-left mr-1"></i> Category {{ ucfirst($product->category->name) }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <div class="one-product">
                        <div class="one-product__slider_navigation">

                            @foreach ($product->multi_images as $multi_images)
                                <div class="item">
                                    <img onclick="change_image_url('{{ $multi_images->image }}')"
                                        src="{{ $multi_images->image }}" alt="" />
                                </div>
                            @endforeach

                        </div>
                        <div class="one-product__slider">
                            <div class="item">

                                @if ($product->wishlist == '')
                                    <a class="wishlist-item" href="{{ url('add_to_wishlist/' . $product->id) }}"
                                        class="wishlist">
                                        <i class="far fa-heart" style="color:red;"></i></a>
                                @else
                                    <a class="wishlist-item" href="{{ url('remove_to_wishlist/' . $product->id) }}"
                                        class="wishlist">
                                        <i style="color:red;" class="fa fa-heart"></i></a>
                                @endif

                                  <div id="display"></div>

                                <img id="show_image" src="{{asset('storage/banner_image/'.$product->base_image) }}" alt="" />
                                <span class="check-markd"><i class="fas fa-check-circle mr-2"></i> In Stock</span>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mt-5 mt-lg-0">


                    <h3 class="product-title">{{ ucfirst($product->name) }}</h3>
                      @php
                            $percent=20/100;
                             $newprice=$product->price * $percent;
                            @endphp

                    <h3 class="product__price"><del>${{ $product->price }}</del>  ${{ $newprice }}</h3>
                    <p class="prod__desc">{{ $product->description }}</p>
                    <div class="row py-4 align-items-center">
                        <div class="col-lg-4">
                            <p class="p-txt">Color</p>
                               @foreach($product->color_images as $color)
                               <div class="col-sm-4">
                          <div class="box mt-3" onclick="showimg({{$color->id}});" style="background-color:{{$color->color}};"></div></div>
                         @endforeach
                        </div>
                    </div>
                    <div class="size-wrapper" id="shirtsize">
                        <p>Sizes Available</p>
                        <div class="wrapper">
                            
                                 <p id="small" class="p-3">Small</p>
                                    
                                 <p  id="medium" class="p-3">Medium </p>
                                
                                 <p id="large" class="p-3">Large </p>
                                
                                 <p id="xlarge" class="p-2">XLarge </p>
                                
                                 <p  id="xxlarge" class="p-2">XXLarge </p>
                              
                        </div>
                    </div>
                     <div class="size-wrapper">
                        <p>Quantity</p>
                        <div class="wrapper">
                            <div class="plus-minus-div">
                                <div class="value-button" id="decrease" onclick="decreaseValue('{{ $product->id }}')"
                                    value="Decrease Value">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </div>
                                <div class="value-button" id="increase" onclick="incval('{{ $product->id }}')"
                                    value="Increase Value">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </div>
                                <input type="number" id="number-{{ $product->id }}" value="0">

                            </div>
                        </div>
                    </div>
                    <form action="{{ url('addToCart') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $product->id }}" name="id">
                        <input type="hidden" value="{{ $product->name }}" name="name">
                        <input type="hidden" value="{{ $product->price }}" name="price">
                        <input type="hidden" value="{{ $product->description }}" name="description">
                        <input type="hidden" value="{{ $product->base_image }}" name="base_image">
                        <input type="hidden" value="1" name="quantity">
                        <button class="button-blue">Add To Cart</button>
                    </form>


                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-5">
                    <div class="nav nav-tabs product-info" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">description</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Additional information</a>
                    </div>
                    <div class="tab-content product-info py-3 px-3 px-sm-0" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <p class="site-text product-text mb-2">{{ $product->description }}
                            </p>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-12">
                                    <span class="black-1">Label</span>
                                    <span class="blue-1">ABC</span>
                                </div>
                                <div class="col-12 mt-3">
                                    <span class="black-1">Label</span>
                                    <span class="blue-1">ABC</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12 mb-4">
                    <h4 class="blue-h">Recommended Products</h4>
                </div>
                @foreach ($recomended_product as $recomended_products)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <a class="prod-a2c"
                            href="{{ url('user_inner_product/' . $recomended_products->id . '/' . $recomended_products->category->id) }}">
                            <object>
                                <div class="product-div">

                                    @if ($recomended_products->wishlist == '')
                                        <a class="prod-wishlist"
                                            href="{{ url('add_to_wishlist/' . $recomended_products->id) }}"
                                            class="wishlist">
                                            <i class="far fa-heart" style="color:red;"></i></a>
                                    @else
                                        <a class="prod-wishlist"
                                            href="{{ url('remove_to_wishlist/' . $recomended_products->id) }}"
                                            class="wishlist">
                                            <i style="color:red;" class="fa fa-heart"></i></a>
                                    @endif

                                    <a class="prod-a2c"
                                        href="{{ url('user_inner_product/' . $recomended_products->id . '/' . $recomended_products->category->id) }}"><i
                                            class="fas fa-shopping-cart"></i></a>

                                             <img src="{{asset('storage/banner_image/'.$recomended_products->base_image)}}" alt="n/a">
                                    <p class="product-title">{{ $recomended_products->name }}</p>
                                    <p class="product__price">${{ $recomended_products->price }}</p>
                                </div>
                            </object></a>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
    
        $(document).ready(function() {
            $('#shirtsize').hide();
            $('#small').hide();
            $('#medium').hide();
            $('#large').hide();
            $('#xlarge').hide();
            $('#xxlarge').hide();
        });
        function showimg(id){
             window.asset = "{{ asset('') }}";
             var path='';
            var color_id=id;
            // alert(color_id);
        $.ajax({
       type:'GET',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       url:"{{ route('color.image') }}",
       data:{id:color_id},
       success:function(data){
           if(data.image){
           console.log(data.image);
           path='storage/banner_image/'+data.image;
           console.log('path:'+window.asset+path)
             document.getElementById('display')
    .innerHTML = '<img src="'+window.asset+path+'" />';
           }
           if(data.size){
            $('#shirtsize').show();
            if(data.size.small==1){
                $('#small').show();
            }else{
                $('#small').hide();
            }
            if(data.size.medium==1){
                $('#medium').show();
            }else{
                $('#medium').hide();
            }
            if(data.size.large==1){
                $('#large').show();
            }else{
                $('#large').hide();
            }
            if(data.size.xlarge==1){
                $('#xlarge').show();
            }else{
                $('#xlarge').hide();
            }
            if(data.size.xxlarge==1){
                $('#xxlarge').show();
            }else{
                $('#xxlarge').hide();
            }
           }
        // console.log('done');

       }
    });


        }
    //     function colorproduct(color,id){
    //          var path='';

    //     window.asset = "{{ asset('') }}";
    //         if(color==1){
    //              if(id=1){
    //           path='user_asset/images/shirt/red.jpg'
    //          }else if(id=2){
    //              alert('cap'+id)
    //           path='user_asset/images/cap/red.jpg'
    //          }

    //            document.getElementById('display')
    // .innerHTML = '<img src="'+window.asset+path+'" />';

    //         }else if(color==2){
    //            if(id=1){
    //           path='user_asset/images/shirt/maroon.jpg'
    //          }else if(id=2){
    //           path='user_asset/images/cap/maroon.jpg'
    //          }

    //            document.getElementById('display')
    // .innerHTML = '<img src="'+window.asset+path+'" />';

    //         }else if(color==3){
    //        if(id=1){
    //           path='user_asset/images/shirt/white.jpg'
    //          }else if(id=2){
    //           path='user_asset/images/cap/white.jpg'
    //          }

    //            document.getElementById('display')
    // .innerHTML = '<img src="'+window.asset+path+'" />';
    //         }else if(color==4){
    //   if(id=1){
    //           path='user_asset/images/shirt/black.jpg'
    //          }else if(id=2){
    //           path='user_asset/images/cap/black.jpg'
    //          }

    //            document.getElementById('display')
    // .innerHTML = '<img src="'+window.asset+path+'" />';
    //         }

    //     }
    //     function change_image_url(input) {

    //         $('#show_image').attr('src', input);

    //     }

        function incval(id) {
            var value = parseInt(document.getElementById("number-" + id).value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById("number-" + id).value = value;
            console.log(value);
        }
    </script>
@endsection
