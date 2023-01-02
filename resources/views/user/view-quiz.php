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
                    <h5 class="i_t mb-0">Course</h5>
                </a>
            </div>
        </div>

        <div class="row text-center text-md-left">
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 mb-4 mb-md-0 bold">
                <label for="" class="en-labl">Course Name</label>
                <p class="en-p">Course A</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 mb-4 mb-md-0 bold">
                <label for="" class="en-labl">Passing Criteria</label>
                <p class="en-p">80%</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 mb-4 mb-md-0 bold">
                <label for="" class="en-labl">Points Per Question</label>
                <p class="en-p">02</p>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-12 mb-4 mb-md-0 bold">
                <label for="" class="en-labl">User's Number Of Attempts</label>
                <p class="en-p">01</p>
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
                        <div class="quest_wrap mb-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="ww">
                                        <div class="w">
                                            <p class="blue">Question 1</p>
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
                                                <input type="radio" checked="checked" name="radio-1">
                                                <span class="checkmark-quiz"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="container-quiz">Option 2
                                                <input type="radio" name="radio-1">
                                                <span class="checkmark-quiz"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="container-quiz">Option 3
                                                <input type="radio" name="radio-1">
                                                <span class="checkmark-quiz"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="container-quiz">Option 4
                                                <input type="radio" name="radio-1">
                                                <span class="checkmark-quiz"></span>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="quest_wrap mb-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="ww">
                                        <div class="w">
                                            <p class="blue">Question 2</p>
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
                                                <input type="radio" checked="checked" name="radio-2">
                                                <span class="checkmark-quiz"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="container-quiz">Option 2
                                                <input type="radio" name="radio-2">
                                                <span class="checkmark-quiz"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="container-quiz">Option 3
                                                <input type="radio" name="radio-2">
                                                <span class="checkmark-quiz"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="container-quiz">Option 4
                                                <input type="radio" name="radio-2">
                                                <span class="checkmark-quiz"></span>
                                            </label>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="quest_wrap mb-4">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="ww">
                                        <div class="w">
                                            <p class="blue">Question 3</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('footer.php') ?>