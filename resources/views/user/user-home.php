<?php
include('header-loggedin.php');
$title = "User Dashboard";
$activeNav = 'user-dash';
?>

<?php include('banner.php') ?>



<section class="login bg-page position-relative">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">
    <div class="container">

        <div class="row d-margin">
            <div class="col-12">
                <div class="ticker">
                    <p>Your subscription package will expire within 10 days </p>
                </div>
                <div class="ticker ticker_expired mt-2">
                    <p>Your subscription package has expired. Please subscribe again </p>
                    <a href="#" data-toggle="modal" data-target="#select_package">Click here</a>
                </div>
            </div>
        </div>


        <div class="row d-margin">
            <div class="col-12">
                <div class="card">
                    <div class="card-body card-dash">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="basic-heading-3">Quick stats</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                <div class="c100 p80 l-blue center_item"> <span>80%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                <p class="stats_text light_blu">Average courses created / Month</p>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                <div class="c100 p80 blue center_item"> <span>80%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                <p class="stats_text drk_blu">Average courses created / Year</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-margin justify-content-center">
            <div class="col-md-6 col-12">
                <div class="card course_card">
                    <div class="card-body text-center">
                        <img src="images/course-ico.png" alt="N/A">
                        <div>
                            <p>Total Courses created</p>
                            <p>50</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row d-margin">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-main">
                            <div class="chart-top">
                                <select name="year" id="select_year" class="my-sel">
                                    <option value="" selected disabled>Select Year</option>
                                    <option value="1">1</option>
                                </select>
                                <h4>Courses Created Per Month</h4>
                                <h5>Courses</h5>
                            </div>
                            <div id="chart-1" style="height: 400px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row d-margin">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <p class="tb-t text-center text-md-left">Activity log</p>

                    </div>
                    <div class="col-12 p-0">
                        <div class="maain-tabble table-responsive act-log">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S.no</th>
                                        <th>Activity</th>
                                        <th>Time</th>
                                        <th>date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>001</td>
                                        <td>abc Session</td>
                                        <td>May 2, 2020</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>001</td>
                                        <td>abc Session</td>
                                        <td>May 2, 2020</td>
                                    </tr>
                                    <tr>
                                        <td>01</td>
                                        <td>001</td>
                                        <td>abc Session</td>
                                        <td>May 2, 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="select_package" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                        <p class="text_pck">Please select subscription package in order
                            to avail the platform services.</p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="pckg_p">Select Package</p>
                    </div>
                    <div class="col-12 text-center">
                        <div class="card__Wrap sel_pck">
                            <div class="reg-header-inner">
                                <p>yearly</p>
                            </div>
                            <div class="body_pckg">
                                <h4><sub>$</sub>123</h4>
                                <p>2 chats</p>
                                <p>2 audio calls</p>
                                <p>2 video calls</p>
                                <a href="#">Select</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center mt-4">
                        <a href="card_details.php" class="login__button w-75 mx-auto" >Continue</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('footer.php') ?>
<script src="js/chart.js"></script>