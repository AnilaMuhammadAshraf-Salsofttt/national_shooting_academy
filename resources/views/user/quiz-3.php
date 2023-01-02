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
                <p class="blue">Category A</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <img src="images/category-banner.png" alt="" class="cat_banner">
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <p class="blue">Quiz</p>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 overflow-x">
                <div class="card quiz_card">
                    <div class="card-header">
                        <p>Total Questions</p>
                        <p>10 Questions</p>
                        <p>Time</p>
                        <p><i class="far fa-clock"></i> 00:10:00</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="cleared">Congratulations You Have Cleared The Quiz </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="quiz-wrper">
                                    <img src="images/quiz-img.png" alt="">
                                    <a href="" class="license">Download License</a>
                                </div>
                            </div>
                        </div>
                   

                     
                    </div>
                </div>





            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center text-md-right">
                <a href="" class="quiz_next">Continue to create course</a>

            </div>
        </div>







    </div>
</section>


<?php include('footer.php') ?>