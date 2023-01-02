<?php
include('u-header-loggedin.php');
$title = "License Categories";
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
        <div class="row">
            <div class="col-12">
                <h6 class="qz-b">$30</h6>
                <h6 class="qz-b">Attempt 01</h6>

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
                            <div class="col-12 ">
                                <div class="ww">
                                    <div class="w">
                                        <p class="blue">Question 2</p>
                                    </div>
                                    <div class="c">
                                        <p class="time">0:07:02</p>
                                    </div>
                                    <div class="r">
                                        <p class="blue">Question: 2/10</p>
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

                                <form action="" class="quiz">
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
                                    <div class="row mt-4">
                                        <div class="col-12 quiz-f">
                                            <a href="u-quiz-1.php" class="quiz_next">Previous</a>
                                            <a href="u-quiz-3.php" class="quiz_skip">Next</a>
                                            <a href="u-quiz-3.php" class="quiz_skip">Skip</a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 text-center text-md-right">
                <a href="#" class="quiz_skip" data-toggle="modal" data-target="#comlpeteQuiz">Complete</a>

            </div>
        </div>







    </div>
</section>

<div class="modal fade" id="q-timeout" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content national_modal_generic">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body nmg">
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/eroro.png" alt="">
                <h4 class="modal_h4">System Message</h4>
                <p class="modal_p">Timeout!!</p>
                <a href="#" data-dismiss="modal" class="modal__btn">Try Again</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="comlpeteQuiz" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content national_modal_generic">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body nmg">
        <div class="row">
            <div class="col-12 text-center">
                <img src="images/check.png" alt="">
                <h4 class="modal_h4">System Message</h4>
                <p class="modal_p">Your quiz has been marked as completed</p>
                <a href="#" data-dismiss="modal" class="modal__btn">Got it</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>