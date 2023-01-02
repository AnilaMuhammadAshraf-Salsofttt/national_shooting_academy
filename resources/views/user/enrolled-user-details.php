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
                                <div class="media align-items-center inner-media">
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

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <label for="" class="cc">Description</label>
                                <p class="p-course-details">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum doloribus saepe consectetur necessitatibus natus corporis incidunt dolorem? Esse neque eveniet facere praesentium quibusdam dolores cupiditate similique! Similique itaque iure aliquam.</p>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-12">
                                <label for="" class="cc">Features of Courses</label>
                            </div>
                        </div>
                        <div class="row mt-2">

                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">Label</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">Abc</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">Label</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">Abc</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">Label</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">Abc</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">Label</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">Abc</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">Label</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">Abc</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">Label</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">Abc</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">Label</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">Abc</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <p class="p-course-details">Label</p>
                                    </div>
                                    <div class="col-6">
                                        <p class="p-course-details">Abc</p>
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