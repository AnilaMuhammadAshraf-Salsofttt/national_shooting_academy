<?php

$title = " add-license-management";

$activeNav = 'license';


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
                                            <h1 class="in-heading">Add New License</h1>
                                            <!-- <a href="blocked-users-v1.php" class="bluee-btn mt-2 mt-md-0">Blocked Users</a> -->
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Create Quiz</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="post" action={{ url('license_insert') }}>

                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Select Category </label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1" name="category_id">
                                                                    <option>Select</option>
                                                                    @foreach ($category as $item)
                                                                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">No of Attempts </label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="attempts">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Description*</label>
                                                            <textarea class="form-control" name="description"
                                                                id="exampleFormControlTextarea1" rows="3"></textarea>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">License Fee</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="fee">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Quiz Title </label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="quiz_title">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Duration</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="duration">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Times</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option>Minute(s)</option>
                                                                    <option> Hour(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Passing Criteria </label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="passing_criteria">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Points per Question</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="points_per_question">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                        <div id="dynamic_field">

                                            <div class="row">
                                                <div class="col-lg-12">
                                                        <div class="form-row align-items-end">
                                                            <div class="form-group col-md-9">
                                                                <label for="inputEmail4">Question Form </label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="question[]">
                                                            </div>
                                                            <div class="form-group col-md-3">
                                                                <button type="button" class="bluee-btn" id="add">Add New</button>
                                                            </div>
                                                        </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="col-lg-10">
                                                        <div class="form-group">
                                                            <label for="inputEmail4">Answer form</label>
                                                            <select class="form-control" id="exampleFormControlSelect1" name="form[]">
                                                                <option>Checkbox</option>
                                                                <option>Radio Button</option>
                                                                <option>Dropdown</option>
                                                                <option>Date</option>
                                                                <option>Time</option>
                                                                <option>Location</option>
                                                                <option>Paragrap</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>

                                        <div id="dynamic_field1">

                                            {{-- <div class="row">
                                                <div class="col-lg-10">
                                                        <div class="form-row align-items-center">
                                                            <div class="form-group col-md-1">
                                                                <label for="inputEmail4">Value </label>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="ans1[]">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio1"
                                                                        name="customRadio1[]" class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="customRadio1">Correct ans</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div> --}}
                                        </div>
                                            {{-- <div class="row">
                                                <div class="col-lg-10">
                                                        <div class="form-row align-items-center">
                                                            <div class="form-group col-md-1">
                                                                <label for="inputEmail4">Value </label>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4"  name="ans2[]">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio2"
                                                                        name="customRadio2[]" class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="customRadio2">Correct ans</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                        <div class="form-row align-items-center">
                                                            <div class="form-group col-md-1">
                                                                <label for="inputEmail4">Value </label>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4"  name="ans3[]">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio3"
                                                                        name="customRadio3[]" class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="customRadio3">Correct ans</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-10">
                                                        <div class="form-row align-items-center">
                                                            <div class="form-group col-md-1">
                                                                <label for="inputEmail4">Value </label>
                                                            </div>
                                                            <div class="form-group col-md-5">
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4"  name="ans4[]">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <div class="custom-control custom-radio">
                                                                    <input type="radio" id="customRadio4"
                                                                        name="customRadio4[]" class="custom-control-input">
                                                                    <label class="custom-control-label"
                                                                        for="customRadio4">Correct ans</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div> --}}
                                            <div class="row">
                                                <div class="col-lg-12 pt-2">
                                                    <button type="button"  class="bluee-btn add" id="add" onclick="get_inner(1)">Add New Question</button>
                                                </div>
                                            </div>

                                        </div>

                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 pt-2">
                                                <a href="#" class="bluee-btn">Reset </a>
                                                <button  type="submit" class="bluee-btn" data-toggle="modal"
                                                    data-target="#block-modal">Create </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                    
{{-- <div class="table-responsive">  
    <table class="table table-bordered" >  
     <tr>  
     <td><input type="text" name="addmore[][learn]" placeholder="Enter learn" class="form-control name_list" required="" /></td>  
    </tr>  
 </table>  
   </div> --}}

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
<script type="text/javascript">
    $(document).ready(function(){      
      var i=1;  
   
   
      $('#add').click(function(){  
           i++;  
  

           $('#dynamic_field').append("<div class=\"row_learn"+i+"\"   id=\"dynamic_field\">"+
            "  <div class=\"row \">"+
                "       <div class=\"col-lg-12\">"+
                    "         <div class=\"form-row align-items-end\">"+
                        "           <div class=\"form-group col-md-9\">"+
                            "              <label for=\"inputEmail4\">Question Form </label>"+
                            "   <input type=\"text\" class=\"form-control\" id=\"inputEmail4\" name=\"question[]\">"+
                            "    <div class=\"form-group col-md-3\">"+
                                "                        <button type=\"button\" class=\"bluee-btn btn_remove_learn\" id=\""+i+"\"  >Remove</button>"+
                                "                  </div>"+
                            "    </div>"+
                         
                                "  </div>"+
                                "  </div>"+
                                "   </div>"+
                                       "<div class=\"row\">"+
                                        "<div class=\"col-lg-10\">"+
                                            "<div class=\"form-group\">"+
                                                "<label for=\"inputEmail4\">Answer form</label>"+
                                                    "<select class=\"form-control\" id=\"exampleFormControlSelect1\" name=\"form[]\">"+
                                                        "<option>Checkbox</option>"+
                                                        "<option>Radio Button</option>"+
                                                        "<option>Dropdown</option>"+
                                                        "<option>Date</option>"+
                                                        " <option>Time</option>"+
                                                        "<option>Location</option>"+
                                                        " <option>Paragrap</option>"+
                                                        "  </select>"+
                                                        "  </div>"+
                                                        "</div>"+
                                                        " <div class=\"col-lg-2\"></div>"+
                                                        "   </div>"+
                                                        "   <div id=\"dynamic_field"+i+"\">"+
                                                                  

                                                       
                                                            "     <div class=\"row\">"+ 
                                                "  <div class=\"col-lg-12 pt-2\">"+ 
                             
                                                    "    <button type=\"button\"  class=\"bluee-btn add1\" id=\"add1\" onclick=\"get_inner("+i+")\">Add New Question</button>"+ 
                                                    "    </div>"+ 
                                                    "   </div>   "+                                                              

                                                            " </div>"+   
                                                            "  </div>");  
      });
  

      $(document).on('click', '.btn_remove_learn', function(){  
           var button_id = $(this).attr("id");   
           $('.row_learn'+button_id+'').remove();  
      });  
  
    });  

    function get_inner(iteration){
        $(document).ready(function(){    
      var  j=0;

            j++;  
            $('#dynamic_field'+iteration+'').append("<div   id=\"dynamic_field"+iteration+"\">"+
    
    " <div class=\"row\">"+
                    " <div class=\"col-lg-10\">"+
                        " <div class=\"form-row align-items-center\">"+
                            " <div class=\"form-group col-md-1\">"+
                                " <label for=\"inputEmail4\">Value </label>"+
                                " </div>"+
                                " <div class=\"form-group col-md-5\">"+
                                    " <input type=\"text\" class=\"form-control\" id=\"inputEmail4\"  name=\"ans"+iteration+"[]\">"+
                                    " </div>"+
                                    " <div class=\"form-group col-md-6\">"+
                                        " <div class=\"custom-control custom-radio\">"+
                                            " <input type=\"radio\" value=\"0\"  name=\"customRadio"+iteration+"[]\" class=\"custom-control-input customRadio\">"+
                                            " <label class=\"custom-control-label\" for=\"customRadio1\">Correct ans</label>"+
                                            " </div>"+
                                            " </div>"+
                                            " </div>"+
                                            " </div>"+
                        " <div class=\"col-lg-2\"></div>"+
                    " </div>"+       
                         
                    "  </div>");  

        });  
  
    }

 
</script>

{{-- $('#dynamic_field').append('<tr id="row_learn'+i+'" class="dynamic-added"><td><input type="text" name="addmore[][learn]" placeholder="Enter learn" class="form-control name_list" required /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove_learn">X</button></td></tr>');   --}}

{{-- 
                                                    "<div class=\"row\">"+
                                                        " <div class=\"col-lg-10\">"+

                                                            "<div class=\"form-row align-items-center\">"+
                                                                "<div class=\"form-group col-md-1\">"+
                                                                    "<label for=\"inputEmail4\">Value </label>"+
                                                                "</div>"+
                                                                "<div class=\"form-group col-md-5\">"+
                                                                     "<input type=\"text\" class=\"form-control\" id=\"inputEmail4\">"+
                                                                "</div>"+
                                                                "<div class=\"form-group col-md-6\">"+
                                                                    "<div class=\"custom-control custom-radio\">"+
                                                                          "<input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\">"+
                                                                    "<label class=\"custom-control-label\" for=\"customRadio1\">Correct ans <a href="" class=\"\"></a></label>"+
                                                                    "</div>"+
                                                                "</div>"+
                                                                "</div>"+
                                                                "</div>"+
                                                            "<div class=\"col-lg-2\"></div>"+
                                                        "</div>"+
                                                " <div class=\"row\">"+
                                                    " <div class=\"col-lg-10\">"+
                                                    " <div class=\"form-row align-items-center\">"+
                                                            " <div class=\"form-group col-md-1\">"+
                                                            "   <label for=\"inputEmail4\">Value </label>"+
                                                            " </div>"+
                                                            " <div class=\"form-group col-md-5\">"+
                                                            " <input type=\"text\" class=\"form-control\" id=\"inputEmail4\">"+
                                                            " </div>"+
                                                            " <div class=\"form-group col-md-6\">"+
                                                            "   <div class=\"custom-control custom-radio\">"+
                                                            " <input type=\"radio\" id=\"customRadio1\" name=\"customRadio\" class=\"custom-control-input\">"+
                                                            "  <label class=\"custom-control-label\" for=\"customRadio1\">Correct ans <a href="" class=\"\"></a></label>"+
                                                            "   </div>"+
                                                        " </div>"+
                                                        " </div>"+
                                                    "  </div>"+
                                                "  <div class=\"col-lg-2\"></div>"+
                                                " </div>"+

                                            "   <div class=\"row\">"+
                                                "  <div class=\"col-lg-12 pt-2\">"+
                                                "   <a href="" class=\"bluee-btn\">Remove </a>"+
                                                "   <a href="" class=\"bluee-btn\" data-toggle=\"modal\" data-target=\"#block-modal\">Add New </a>"+
                                                "     </div>"+
                                            "   </div> --}}
                                            {{-- "     <div class=\"row\">"+ 
                                                "  <div class=\"col-lg-12 pt-2\">"+ 
                             
                                                    "    <button type=\"button\"  class=\"bluee-btn add1\" id=\"add1\" onclick=\"get_inner()\">Add New 1</button>"+ 
                                                    "    </div>"+ 
                                                    "   </div>   "+  --}}
{{-- 
                                                    " <div class=\"row\">"+
                                                        " <div class=\"col-lg-10\">"+
                                                            " <div class=\"form-row align-items-center\">"+
                                                                " <div class=\"form-group col-md-1\">"+
                                                                    " <label for=\"inputEmail4\">Value </label>"+
                                                                    " </div>"+
                                                                    " <div class=\"form-group col-md-5\">"+
                                                                        " <input type=\"text\" class=\"form-control\" id=\"inputEmail4\"  name=\"ans1[]\">"+
                                                                        " </div>"+
                                                                        " <div class=\"form-group col-md-6\">"+
                                                                            " <div class=\"custom-control custom-radio\">"+
                                                                                " <input type=\"radio\" id=\"customRadio"+a+"\" name=\"customRadio1[]\" class=\"custom-control-input\">"+
                                                                                " <label class=\"custom-control-label\" for=\"customRadio"+a+"\">Correct ans</label>"+
                                                                                " </div>"+
                                                                                " </div>"+
                                                                                " </div>"+
                                                                                " </div>"+
                                                            " <div class=\"col-lg-2\"></div>"+
                                                        " </div>"+    
                                                        " </div>"+   --}}