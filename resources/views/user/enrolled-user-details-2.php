<?php
include('header-loggedin.php');
$title = "User Dashboard";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-5 text-center text-md-left">
            <div class="col-xl-2 col-lg-3 col-md-4 mb-4 mb-md-0">
                <a href="create-course.php" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Courses</h5>
                </a>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-12 mb-4 mb-md-0">
                <label for="" class="en-labl">Course Name</label>
                <p class="en-p">Course A</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-4 col-12 ">
                <label for="" class="en-labl">Course Id</label>
                <p class="en-p">001</p>
            </div>
        </div>


        <div class="row">
            <div class="col-12">

                <div class="card create_course c-dets">
                    <div class="card-header p-4">

                    </div>
                    <div class="card-body">

                        <div class="row mt-4">
                            <div class="col-12 col-12 d-flex justify-content-center">
                                <div class="media align-items-center">
                                    <img class="mr-3" src="images/profile-img.png" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="mt-0">User Id 001</h5>
                                        <h5 class="mt-0">User Name</h5>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <h5 class="blue"> Course Overview <span>Syllabus</span> </h5>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-12">
                                <div class="course_d_wrap shadow-sm">
                                    <div class="i_w">
                                        <label class="container-chk wot">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark-chk"></span>
                                        </label>
                                    </div>

                                    <div class="i_w">
                                        <p>Lecture 01</p>
                                    </div>
                                    <div class="i_w">
                                        <p>Lecture Title</p>
                                    </div>
                                    <div class="i_w">
                                        <p>Lecture 30 Mins</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="course_d_wrap shadow-sm">
                                    <div class="i_w">
                                        <label class="container-chk wot">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark-chk"></span>
                                        </label>
                                    </div>
                                    <div class="i_w">
                                        <p>Lecture 01</p>
                                    </div>
                                    <div class="i_w">
                                        <p>Lecture Title</p>
                                    </div>
                                    <div class="i_w">
                                        <p>Lecture 30 Mins</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="course_d_wrap shadow-sm">
                                    <div class="i_w">
                                        <label class="container-chk wot">
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark-chk"></span>
                                        </label>
                                    </div>
                                    <div class="i_w">
                                        <p>Quiz</p>
                                    </div>
                                    <div class="i_w">
                                        <p>Quiz Title</p>
                                    </div>
                                    <div class="i_w">
                                        <p>10 Questions</p>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                </div>
            </div>




        </div>
    </div>
</section>


<?php include('footer.php') ?>