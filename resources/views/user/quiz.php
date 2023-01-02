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
                <div class="quiz-card-header">
                    <p>Total Questions</p>
                    <p>10 Questions</p>
                    <p>Time</p>
                    <p><i class="far fa-clock"></i> 00:10:00</p>
                </div>
                <div class="card quiz_card">
                    <div class="card-body">
                        <form id="msform">
                            <fieldset>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="ww">
                                            <div class="w">
                                                <p class="blue">Question 1</p>
                                            </div>
                                            <div class="c">
                                                <p class="time">0:07:02</p>
                                            </div>
                                            <div class="r">
                                                <p class="blue">Question: 1/10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 ">
                                        <p class="texty">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 1
                                                    <input type="radio" checked="checked" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 2
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 3
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 4
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next quiz_next mt-3 site-btn l-blue-btn px-5 py-3" value="Continue" />
                                <a href="#_" class="quiz_skip mt-3">Skip</a>
                            </fieldset>
                            <fieldset>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="ww">
                                            <div class="w">
                                                <p class="blue">Question 2</p>
                                            </div>
                                            <div class="c">
                                                <p class="time">0:07:02</p>
                                            </div>
                                            <div class="r">
                                                <p class="blue">Question: 1/10</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 ">
                                        <p class="texty">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            Ut enim ad minim veniam Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor?</p>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 1
                                                    <input type="radio" checked="checked" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 2
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 3
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz">Option 4
                                                    <input type="radio" name="radio">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="previous" class="previous site-btn mt-3 px-5 py-3" value="Previous" />
                                <input type="button" name="next" class="next site-btn l-blue-btn mt-3 px-5 py-3" value="Continue" />
                                <a href="" class="quiz_skip">Skip</a>
                            </fieldset>
                            <fieldset>
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
                                <input type="button" name="previous" class="previous site-btn px-5 mt-3 py-3" value="Previous" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12 text-center text-md-right">
                <a href="" class="quiz_skip">Complete</a>

            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>