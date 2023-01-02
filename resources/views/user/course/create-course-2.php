<?php
include('header-loggedin.php');
$title = "User Dashboard";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-5">
            <div class="col-12">
                <a href="create-course.php" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Create Course</h5>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="card create_course">
                        <div class="card-header">Course Details</div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Product</label>
                                    <p class="cc">Abc</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Course Name*</label>
                                    <input type="text" class="cc" placeholder="Course Name">

                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Status*</label>
                                    <select name="" id="status" class="cc">
                                        <option value="" disabled selected>Select</option>
                                        <option value="">Active</option>
                                        <option value="">InActive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="cc">Description*</label>
                                    <textarea name="" id="" cols="30" rows="10" class="cc"></textarea>
                                </div>
                                <div class="col-12 text-right">
                                    <a href="#" class="cc_btn">Add Feature</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Feature Title*</label>
                                    <input type="text" class="cc" placeholder="Feature Name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Feature Value*</label>
                                    <input type="text" class="cc" placeholder="Feature Name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <a href="" class="cc_btn rsp-margin">Add More</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Feature Title*</label>
                                    <input type="text" class="cc" placeholder="Feature Name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Feature Value*</label>
                                    <input type="text" class="cc" placeholder="Feature Name">
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <a href="" class="cc_btn rsp-margin"><i class="fas fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-header">Syllabus Details</div>
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Lecture Title*</label>
                                    <input type="text" class="cc" placeholder="Lecture Title">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="cc">Upload Video*</label>
                                    <div class="document_wrapper">
                                        <div class="row">
                                            <div class="col-12">
                                                <input name="upload_video" type="file" class="custom-file-input-1" multiple> <span>(1/1)</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="v_wrapper">
                                                    <div class="video_thumb">
                                                        <div class="vid-overlay"></div>
                                                        <img src="images/video-thumb.png" alt="">
                                                        <a href="" class="close-btn"><i class="fas fa-times"></i></a>
                                                        <a href="" class="play"><i class="fas fa-play"></i></a>
                                                    </div>
                                                    <div class="video_thumb">
                                                        <div class="vid-overlay"></div>
                                                        <img src="images/video-thumb.png" alt="">
                                                        <a href="" class="close-btn"><i class="fas fa-times"></i></a>
                                                        <a href="" class="play"><i class="fas fa-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="" class="cc_btn ">Add More</a>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Lecture Title*</label>
                                    <input type="text" class="cc" placeholder="Lecture Title">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="cc">Upload Video*</label>
                                    <div class="document_wrapper">
                                        <div class="row">
                                            <div class="col-12">
                                                <input name="upload_video" type="file" class="custom-file-input-1" multiple> <span>(1/1)</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="v_wrapper">
                                                    <div class="video_thumb">
                                                        <div class="vid-overlay"></div>
                                                        <img src="images/video-thumb.png" alt="">
                                                        <a href="" class="close-btn"><i class="fas fa-times"></i></a>
                                                        <a href="" class="play"><i class="fas fa-play"></i></a>
                                                    </div>
                                                    <div class="video_thumb">
                                                        <div class="vid-overlay"></div>
                                                        <img src="images/video-thumb.png" alt="">
                                                        <a href="" class="close-btn"><i class="fas fa-times"></i></a>
                                                        <a href="" class="play"><i class="fas fa-play"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="" class="cc_btn "><i class="fas fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-header">Quiz Details</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Quiz Title*</label>
                                    <input type="text" class="cc" placeholder="Quiz Title">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Duration</label>
                                    <select name="" id="status" class="cc dd">
                                        <option value="" disabled selected>Select</option>
                                        <option value="">Active</option>
                                        <option value="">InActive</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Quiz Title*</label>
                                    <select name="" id="status" class="cc dd">
                                        <option value="" disabled selected>Minute(s)</option>
                                        <option value="">Active</option>
                                        <option value="">InActive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Passing Criteria</label>
                                    <input type="text" class="cc" placeholder="80%">

                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Points per Question</label>
                                    <input type="text" class="cc" placeholder="2">

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <label for="" class="cc">Add Question</label>
                                    <input type="text" class="cc" placeholder="Add Question">
                                </div>
                                <div class="col-md-2 col-12">
                                    <a href="" class="cc_btn rsp-margin">Add More</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Answer Form</label>
                                    <select name="" id="status" class="cc">
                                        <option value="" disabled selected>Select</option>
                                        <option value="">Checkbox</option>
                                        <option value="">Radio Button</option>
                                        <option value="">Dropdown</option>
                                        <option value="">Date</option>
                                        <option value="">Time</option>
                                        <option value="">Location</option>
                                        <option value="">Paragrah</option>
                                        <option value="">Upload File</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <label for="" class="cc">Value</label>
                                    <input type="text" class="cc mb-0 mb-md-4" placeholder="Value">
                                </div>
                                <div class="col-md-4 col-12 d-flex align-items-center">
                                    <div class="radio mb-4 mb-md-0">
                                        <label><input type="radio" name="optradio" checked>Correct Answer</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <label for="" class="cc">Value</label>
                                    <input type="text" class="cc mb-0 mb-md-4" placeholder="Value">
                                </div>
                                <div class="col-lg-2 col-md-4 col-12 d-flex align-items-center">
                                    <div class="radio mb-1 mb-md-0">
                                        <label><input type="radio" name="optradio">Correct Answer</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-12 d-flex align-items-center">
                                    <a href="" class="cc_btn rsp-margin-top"><i class="fas fa-trash-alt"></i> Delete</a>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8 col-12">
                                    <label for="" class="cc">Value</label>
                                    <input type="text" class="cc mb-0 mb-md-4" placeholder="Value">
                                </div>
                                <div class="col-lg-2 col-md-4 col-12 d-flex align-items-center">
                                    <div class="radio mb-1 mb-md-0">
                                        <label><input type="radio" name="optradio">Correct Answer</label>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 col-12 d-flex align-items-center">
                                    <a href="" class="cc_btn rsp-margin-top"><i class="fas fa-trash-alt"></i> Delete</a>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="#" class="btn-cc-2">Remove</a>
                                    <a href="#" class="btn-cc-2">Add New</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <a href="#" class="btn-cc-1">Reset</a>
                            <button type="submit"  class="btn-cc-3">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>




    </div>
</section>


<?php include('footer.php') ?>