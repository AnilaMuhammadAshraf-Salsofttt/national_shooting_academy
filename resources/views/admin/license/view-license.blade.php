<?php

$title = " add-license-management";
$activeNav = 'license';



?>
@include('admin.header');
@include('admin.nav');
<!--customer start here-->

<div class="app-content content user view-customer customer-product">
    <div class="content-wrapper">
        <div class="content-body">
            <!-- Basic form layout section start -->
            <section id="configuration">
                <div class="row">
                    <div class="col-12">
                        <div class="card rounded pad-20">
                            <div class="card-content collapse show">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 d-flex">
                                            <h1 class="in-heading">View License</h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="top mt-5">
                                </div>
                                <div class="clearfix"></div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="info-bg">
                                            <h3>Quiz</h3>
                                        </div>
                                    </div>
                                </div>
                          
                                <div class="for-gray-bg">
                                    <div class="container">

                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">Quiz Title</h6>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">{{ $license->quiz_title }}</h6>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">Duration</h6>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">{{ $license->duration }} Minutes</h6>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">Passing Criteria</h6>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">{{ $license->passing_criteria }}</h6>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">Points Per Question</h6>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">{{ $license->points_per_question }}</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2"></div>
                                        </div>
                                 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="info-bg">
                                            <h3> License Details </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="for-gray-bg">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">Category 
                                                            {{-- @foreach ($license->category as $item) --}}
                                                                {{ $license->category->name }}
                                                            {{-- @endforeach --}}
                                                            
                                                           </h6>
                                                        <img src="images/view.png" alt="">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="txt-15">No of Attempts Allowed: {{ $license->attempts }}</h6>
                                                        <h6 class="txt-15"> License Fee ${{ $license->fee }} </h6>
                                                    </div>
                                                    <div class="col-lg-12 pt-2">
                                                        <h6 class="txt-15">Description</h6>
                                                        <p>{{ $license->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="info-bg for-flex ">
                                            <h3>Total Questions</h3>
                                            <h3>{{ $count }} Questions</h3>
                                            <h3>Time</h3>
                                            <h3>{{ $license->duration }} Minutes</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="for-gray-bg">
                                    <div class="container">
                                        @foreach ($license->questions as $items)
                                                
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-between">
                                                    <h5>Question 1 </h5>
                                                    {{-- <a href="{{ url('license_question_delete/'.$items->id.'/'.Request::segment(2)) }}" class="fas fa-trash-alt blck"></a> --}}
                                                </div>
                                                <p>{{ $items->question }}</p>
                                                @foreach ($items->answers as $answers)
                                                    
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Option {{ $answers->answer }}</label>
                                                </div>
                                                @endforeach
                                               
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- <div class="row">
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-between">
                                                    <h5>Question 1 </h5>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut
                                                    labore et dolore magna aliqua?</p>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio1" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio1">Option
                                                        A</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio2" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio2">Option
                                                        B</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio3" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio3">Option
                                                        C</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio4" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio4">Option
                                                        D</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row py-2">
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-between">
                                                    <h5>Question 2 </h5>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut
                                                    labore et dolore magna aliqua?</p>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio11" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio11">Option
                                                        A</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio21" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio21">Option
                                                        B</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio31" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio31">Option
                                                        C</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio41" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio41">Option
                                                        D</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-between">
                                                    <h5>Question 3 </h5>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut
                                                    labore et dolore magna aliqua?</p>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio12" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio12">Option
                                                        A</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio22" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio22">Option
                                                        B</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio32" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio32">Option
                                                        C</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio42" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio42">Option
                                                        D</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row py-2">
                                            <div class="col-lg-12">
                                                <div class="d-flex justify-content-between">
                                                    <h5>Question 4 </h5>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                    eiusmod tempor incididunt ut
                                                    labore et dolore magna aliqua?</p>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio13" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio13">Option
                                                        A</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio23" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio23">Option
                                                        B</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio33" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio33">Option
                                                        C</label>
                                                </div>
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio43" name="customRadio"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="customRadio43">Option
                                                        D</label>
                                                </div>
                                            </div>
                                        </div> --}}
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
</div>
</div>
</div>


@include('admin.footer')
