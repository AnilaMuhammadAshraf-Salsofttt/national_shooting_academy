<?php

$title = " inventory-management";
$activeNav = 'inventory-management';
?>
@include('admin.header');
@include('admin.nav');

<!--customer start here-->

<div class="app-content content user view-customer customer-product">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded pad-20">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <a href="#"><i class="fas fa-angle-left mr-2"></i></a>
                                            <h1 class="in-heading">Inventory Management </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Edit Product </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <form method="post" action="{{ url('update_product') }}"  enctype= "multipart/form-data">
                                                    @csrf
                                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Product Name*</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" value="{{ $product->name }}" name="name">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Product Category*</label>
                                                                <select class="form-control"
                                                                id="exampleFormControlSelect1" name="category_id" required>
                                                                <option>Select Product Category</option>
                                                               @foreach ($category as $item)
                                                                <option value="{{ $item->id }}" @if ($item->id == $product->category_id)selected
                                                                    
                                                                @endif>{{ $item->name }}</option>
                                                                   
                                                               @endforeach
                                                            </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Product Price*</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Abc" value="{{ $product->price }}" name="price">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">In Stock*</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputPassword4" value="{{ $product->stock }}" name="stock">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Description*</label>
                                                            <textarea class="form-control"
                                                                id="exampleFormControlTextarea1" rows="3" name="description">{{ $product->description }}</textarea>
                                                        </div>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <div class="upld">
                                                                    <div>
                                                                        <img src="{{ $product->base_image }}" class="img-fluid"
                                                                            alt="">
                                                                        <a href="#_" class="cros">
                                                                            <i class="fas fa-times"></i>
                                                                        </a>
                                                                    </div>
                                                                    <div class="upload-btn-wrapper btm-btn1">
                                                                        <button class="btn-3 btm-btn">upload</button>
                                                                        <input type="file"  name="banner_image" required/>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <div class="upld">
                                                                    @foreach ($image as $item)
                                                                        
                                                                    <img src="{{ $item->image    }}" alt="" class="img-fluid"   >
                                                                    <a href="#_" class="cros">
                                                                        <i class="fas fa-times"></i>
                                                                    </a>
                                                                    @endforeach

                                                                    {{-- <img src="images/upld.png" alt="">
                                                                    <a href="#_" class="cros">
                                                                        <i class="fas fa-times"></i>
                                                                    </a> --}}
                                                                    <div class="upload-btn-wrapper btm-btn1">
                                                                        <button class="btn-3 btm-btn">upload</button>
                                                                        <input type="file"  name="multi_image[]" multiple  required/>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputAddress">Description*</label>
                                                            <select class="form-control" id="exampleFormControlSelect1">
                                                                <option>Active </option>
                                                                <option> Inactive </option>

                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 pt-2">
                                                <a href="#" class="bluee-btn">Reset </a>
                                                {{-- <button href="#" class="bluee-btn" data-toggle="modal"
                                                    data-target="#block-modal">Update </button> --}}

                                                    <button type="submit" class="bluee-btn" >Update </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>
</div>
</div>
</div>

@include('admin.footer')