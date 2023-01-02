<?php
$title = "category Edit";
$activeNav = 'category';
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
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <h1 class="in-heading">Category </h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Add New Category </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <form method="post" action="{{ url('category_update') }}"  enctype= "multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{ $category->id }}">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="inputEmail4">Category Name*</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="name" required value="{{ $category->name }}">
                                                            </div>
                                                       
                                                            <div class="form-group col-md-4">
                                                                <label for="inputAddress">Status*</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="status" required>
                                                                <option value="active" @if ($category->status == 'active') Selected
                                                                    
                                                                @endif>Active </option>
                                                                <option value="inactive" @if ($category->status == 'inactive') Selected
                                                                    
                                                                    @endif> Inactive </option>

                                                            </select>
                                                            </div>
                                                        </div>
                                                      

                                                   
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 pt-2">
                                                <button class="bluee-btn" type="submit">Update  </button>
                                                {{-- <a href="#" class="bluee-btn" data-toggle="modal" data-target="#block-modal">Create </a> --}}
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
