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
                    <h5 class="i_t mb-0">Courses</h5>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-12">

                <div class="card create_course c-dets">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <p>
                            Course Details
                        </p>
                        <a href="edit-course.php">Edit Course Details</a>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 order-md-1 order-2">
                                <label for="" class="cc">Course Name</label>
                                <p class="p-course-details">Course A</p>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 order-md-1 order-2">
                                <label for="" class="cc">Charges</label>
                                <p class="p-course-details">$123</p>

                            </div>
                            <div class="col-lg-4 col-md-4 col-12 text-left text-md-right order-md-2 order-1 mb-5 mb-md-0">
                                <p class="sstatus m-0">Status : Active</p>
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