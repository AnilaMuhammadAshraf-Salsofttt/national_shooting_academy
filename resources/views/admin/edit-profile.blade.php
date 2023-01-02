<?php

$title = "Profile";
$activeNav = 'Profile';
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
                                        <div class="col-12">
                                            <h1 class="in-heading"> Admin profile </h1>
                                        </div>
                                    </div>
                                    <form method="post" action="{{ url('update_admin') }}"  enctype= "multipart/form-data" >
                                        @csrf

                                    <div class="row">
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                                            <div>
                                            </div>
                                            <div class="text-center">
                                                <h1 class=""> profile </h1>
                                                <div class="col-12 form-group">
                                                    <div class="attached"> 
                                                      <img src="{{  Auth::guard('admin')->user()->image ? Auth::guard('admin')->user()->image:  asset('images/avatar.jpg') }}" id="user_image" alt="">
                                                      <button type="button"  name="file"  class="camera-btn" onclick="document.getElementById('upload').click()"><i class="fa fa-camera"></i></button>
                                                      <input type="file"  accept="image/*"  onchange="readURL(this, 'user_image')" id="upload" name="user_image">
                                                     
                                                      <input type="hidden" id="personal_img_base64" name="image">
                                                    </div>
                                                  </div>
                                                {{-- <img src="{{ asset('admin_asset/images/avtr-2.png') }}" alt=""> --}}
                                            </div>
                                            <div>
                                                <h4>Admin ID {{ Auth::guard('admin')->user()->id }} </h4>
                                                <h4>Admin Name: {{ Auth::guard('admin')->user()->name }} </h4>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Personal Information</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                        <input type="hidden" value="" name="id">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">First name</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" value="{{ Auth::guard('admin')->user()->first_name  }}" name="first_name">
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Last name</label>
                                                                <input type="text" class="form-control" id="inputEmail4"
                                                                    placeholder="Abc" value="{{ Auth::guard('admin')->user()->last_name  }}" name="last_name">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Email</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputPassword4" value="{{ Auth::guard('admin')->user()->email  }}" name="email">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Phone</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputPassword4" value="{{ Auth::guard('admin')->user()->phone  }}" name="phone">
                                                            </div>
                                                            {{-- <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Password</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputPassword4" value="" name="stock">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">New Password</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputPassword4" value="" name="stock">
                                                            </div> --}}
                                                        </div>
                                                        


                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-2">
                                                {{-- <h3>Address Details</h3> --}}
                                                <button  type="submit"  class="bluee-btn mt-2 mt-md-0">Update Profile</button>

                                        </div>
                                    </div>
                                </form>

                                    {{-- <div class="for-gray-bg">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Address</h5>
                                                        <p>Abc street 123 road</p>
                                                    </li>
                                                    <li>
                                                        <h5>State</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                    <li>
                                                        <h5>Zip Code</h5>
                                                        <p>1223</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="user-pro">
                                                    <li>
                                                        <h5>Country</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                    <li>
                                                        <h5>City</h5>
                                                        <p>Abc</p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-4"></div>

                                        </div>
                                    </div> --}}
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
<script>
// let file_input = document.querySelector('#files');
// let image_preview = document.querySelector('.image-preview');

// const handle_file_preview = (e) => {
//   let files = e.target.files;
//   let length = files.length;

//   for(let i = 0; i < length; i++) {
//       let image = document.createElement('img');
//       // use the DOMstring for source
//       image.src = window.URL.createObjectURL(files[i]);
//       image_preview.appendChild(image);
//   }
// }

// file_input.addEventListener('change', handle_file_preview);
function readURL(input, target) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#'+target).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>