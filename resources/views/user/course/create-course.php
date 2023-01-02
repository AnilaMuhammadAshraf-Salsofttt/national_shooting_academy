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
                <a href="course_log.php" class="h-link"><i class="fas fa-angle-left"></i>
                    <h5 class="i_t mb-0">Course Logs</h5>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-12">
                <p class="blue">Product Details</p>
                <label class="course_lbl">Select Category</label>
                <select class="cat_slct" name="state">
                    <option value="AL">Alabama</option>
                    ...
                    <option value="WY">Wyoming</option>
                </select>
            </div>
            <div class="col-md-6 col-12">
                <p class="blue">Quiz</p>

                <div class="quiz_side">
                    <div class="row">
                        <div class="col-12">
                            <p class="m">Total Questions</p>
                            <p class="m">10 Questions</p>
                        </div>
                        <div class="col-12">
                            <p class="m">Time</p>
                            <p class="m"><i class="far fa-clock"></i> 00:10:00</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 text-right">
                        <a href="quiz-1.php" class="strt_quiz">Start</a>
                    </div>
                </div>

            </div>
        </div>




    </div>
</section>


<?php include('footer.php') ?>