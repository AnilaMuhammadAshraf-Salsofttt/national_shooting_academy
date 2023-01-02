<?php

$title = ' inventory-management';
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
                                        <div
                                            class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
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
                                                <h3>Add New Product </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                    <form method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Product Name*</label>
                                                                <input type="text" class="form-control"
                                                                    id="name" name="name" required>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Product Category*</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1" name="category_id"
                                                                    required>
                                                                    <option disabled>Select Product Category</option>
                                                                    @foreach ($category as $item)
                                                                        <option id="category_id" value="{{ $item->id }}">
                                                                            {{ $item->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Product Price*</label>
                                                                <input type="number" class="form-control"
                                                                    id="price" placeholder="$5" name="price">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">In Stock*</label>
                                                                <input type="text" class="form-control"
                                                                    id="stock" name="stock" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Description*</label>
                                                            <textarea class="form-control" id="des" rows="3" name="description" required></textarea>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Product Primary Image</label>
                                                                <div class="upload-btn-wrapper">
                                                                    <img src="" id="baseimg">
                                                                    <button class="btn-3"><i
                                                                            class="fas fa-plus"></i></button>
                                                                    <input type="file" id="base_img" onchange="changeImage(this,'baseimg');" name="base_img"
                                                                     required />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $i = 1;
                                                        @endphp
                                                        @while ($i <= 4)
                                                            <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <div class="upload-btn-wrapper">
                                                                    <img src="" id="preview{{$i}}">
                                                                    <button class="btn-3"><i
                                                                            class="fas fa-plus"></i></button>
                                                                    <input type="file" onchange="changeImage(this,'preview{{$i}}');" name="banner_image[]"
                                                                        id="banner_image" required />
                                                                </div>

                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="colorpicker">Color Picker:</label>
                                                                <input type="color" class="colorclass" id="colorpicker{{$i}}" onchange="push('colorpicker{{$i}}')" name="color"
                                                                    value="#000000" required>
                                                            </div>
                                                        </div>
                                                            @php
                                                                $i++;
                                                            @endphp
                                                        @endwhile
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label>Side Images</label>
                                                                <div class="upload-btn-wrapper">

                                                                    <button class="btn-3"><i
                                                                            class="fas fa-plus"></i></button>
                                                                    <input type="file" id="imageupload" name="multi_image[]"
                                                                        multiple required />

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Status*</label>
                                                            <select class="form-control"
                                                                id="exampleFormControlSelect1status" name="status"
                                                                required>
                                                                <option value="active">Active </option>
                                                                <option value="inactive"> Inactive </option>

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
                                                <button class="sub bluee-btn" type="button">Create </button>
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
    <script>
        $(document).ready(function() {

        });
    </script>
    <script>
        var arraydata = [];
        var arr_img=[];
          let formData = new FormData();
        function push(id){
          var data=document.getElementById(id).value;
        //   alert('color:'+data)
            arraydata.push(data);

//  console.log('data form:'+formData.get('colors[]'));


        }

        function changeImage(input,imgId) {
            var reader;
            if (input.files && input.files[0]) {
                reader = new FileReader();
                reader.onload = function(e) {
                     $('#'+imgId)
              .attr('src', e.target.result);
                    // ('#'+imgId).setAttribute('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
                if(imgId=='baseimg'){
formData.append('baseimg',input.files[0]);
                }else{
                   arr_img.push(input.files[0]);
                    for (var i=0, iLen=arr_img.length; i<iLen; i++) {
               formData.append('imgs[]',arr_img[i]);
                //   console.log('data inserted:');
                }
            }


            }
        }

        $('#imageupload').change(function (e) {
               e.preventDefault();
    let TotalImages = $('#imageupload')[0].files.length;  //Total Images
    let images = $('#imageupload')[0];
     for (let i = 0; i < TotalImages; i++) {
            formData.append('multi_image[]', images.files[i]);
        }
        //  alert('form'+image_upload.get('images[]'));

        });

        $(".sub").click(function(e){
             e.preventDefault();
               for (var i=0, iLen=arraydata.length; i<iLen; i++) {
                  console.log('loop data: '+arraydata[i]);

  }
  if(arraydata.length == 0){
data="#000000";
for(var k=0; k<4; k++){
      arraydata.push(data);
}
console.log({arraydata})
// alert(arraydata)
  }

   for (var i=0, iLen=arraydata.length; i<iLen; i++) {
                  formData.append('id[]',i);
               formData.append('colors[]',arraydata[i]);
                //   console.log('data inserted:');
                }

            console.log('testing');
        console.log({arraydata});
         var cid=document.getElementById('exampleFormControlSelect1').value;
        var name=document.getElementById('name').value;
         var price=document.getElementById('price').value;
          var stock=document.getElementById('stock').value;
         var des=document.getElementById('des').value;
         var status=document.getElementById('exampleFormControlSelect1status').value;

        formData.append('name', name);
        formData.append('price', price);
        formData.append('stock', stock);
        formData.append('des', des);
        formData.append('cid', cid);
        formData.append('status', status);
        // console.log('colorimg'+formData.get('colorimg'));

// alert('button submit ');

 $.ajax({
       type:'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       url:"{{ route('create_product') }}",
       data: formData,
       contentType : false,
       processData : false,
       success:function(data){
           if(data.success){
               console.log('redirect');
            window.location.href = "inventory_management";
           }
        console.log('done');

       }
    });
    });

    </script>

    </section>
</div>
</div>
</div>


<!--block Modal -->
<div class="modal fade blocked-modal" id="block-modal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="images/check-blu.png" alt="">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="modal-h1">System Message</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="txt">Product has been successfully added!</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@include('admin.footer')
