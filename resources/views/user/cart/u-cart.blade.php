<?php

$title = "Cart";
$activeNav = 'user-dash';
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
                <h5 class="i_t mb-0">Your Shopping Cart</h5>
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItem as $cartItems)
                                
                            <tr>
                                <td class="pt-4 pb-4">
                                    <div class="img-wrap"> 
                                            <img src="{{ $cartItems->attributes->image }}" class="img-fluid mr-4" alt="" style="max-width: 50%;"> 
                                            <div class="product-description">
                                                <p class="text-muted mt-0">{{ $cartItems->name }}</p>
                                            </div>
                                    </div>
                                </td>
                                <td class=""><small class="text-muted">${{ $cartItems->price }}</small></td>
                                <td>
                                    <div class="plus-minus-div mb-0">
                                        <div class="value-button" id="decrease" onclick="decreaseValue('{{ $cartItems->id }}')" value="Decrease Value">
                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                        </div>
    
                                        <div class="value-button" id="increase" onclick="increaseValue('{{ $cartItems->id }}')" value="Increase Value">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </div>


                                    {{-- cart update --}}
                                    <form action="{{ url('updateCart') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $cartItems->id}}" >
                                        <input type="number" name="quantity" id="number-{{ $cartItems->id }}" value="{{ $cartItems->quantity }}">
                                    
                                        <button type="submit" class="btn btn-info"><i class="fas fa-redo"></i></button>
                                    </form>
                                    {{-- cart update --}}


                                    </div>
                                </td>
                                <td class=""><small class="text-muted">${{ $cartItems->quantity*$cartItems->price }}</small></td>
                                <td class="">
                                   
                                {{-- cart remove --}}
                                
                                <form action="{{ url('removeCart') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $cartItems->id }}" name="id">
                                    <button type="submit" onclick="return confirm('Are you sure want to remove from cart..?')" class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
                                </form> 
                                {{-- cart remove --}}

                            
                            </td>
                              
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-xl-3 ml-auto col-lg-4 col-12">
                <div class="row">
                    <div class="col-6">
                        <p class="color__black semi-bold">Sub Total</p>
                        <p class="color__black semi-bold">Total</p>
                    </div>
                    <div class="col-6">
                        <p class="color__black semi-bold">${{ $sub_total }}</p>
                        <p class="color__black semi-bold">${{ $sub_total }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 ml-auto mr-lg-5">
                <div class="row mt-4">
                    <div class="col-md-4">
                        <a href="{{ url('/') }}" class="btn-cc-1 text-center px-0 w-100">continue shopping</a>
                    </div>
                    <div class="col-md-4">
                        @if ($cartItem->count() > 0 && !Auth::user())
                        <a href="{{ url('checkout') }}" class="btn-cc-2 text-center px-0 w-100">Guest checkout</a>
                        @elseif (Auth::user())
                        <a href="{{ url('checkout') }}" class="btn-cc-2 text-center px-0 w-100">checkout</a>
                        @endif
                    </div>
                    <div class="col-md-4">

                    <form action="{{ url('clearAllCart') }}" method="POST">
                        @csrf
                        <button class="btn btn-warning">Remove All Cart</button>
                    </form>
                </div>

                </div>
            </div>     
        </div>
    </div>
</section>

@endsection