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
                                            <a href="{{ url('license') }}"> <i class="fas fa-angle-left"></i></a>
                                            <h1 class="in-heading">Edit License </h1>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="top mt-5">
                                    </div>
                                    <div class="clearfix"></div>

                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg">
                                                <h3>Create Quiz</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <form method="post" action={{ url('license_update') }}>
                                       @csrf
                                       <input type="hidden" name="id" value="{{ $license->id }}">
                                    <div class="for-gray-bg">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-10">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputPassword4">Select Category </label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1" name="category_id">
                                                                    <option>Select</option>
                                                                    @foreach ($category as $item)
                                                                      <option value="{{ $item->id }}" @if ($license->category_id == $item->id) Selected
                                                                          
                                                                      @endif>{{ $item->name }}</option>
                                                                    @endforeach

                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">No of Attempts </label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="attempts" value="{{ $license->attempts }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputAddress">Description*</label>
                                                            <textarea class="form-control" name="description"
                                                                id="exampleFormControlTextarea1" rows="3" value="{{ $license->description }}">{{ $license->description }}</textarea>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">License Fee</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="fee" value="{{ $license->fee }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Quiz Title </label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="quiz_title" value="{{ $license->quiz_title }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Duration</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="duration" value="{{ $license->duration }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Times</label>
                                                                <select class="form-control"
                                                                    id="exampleFormControlSelect1">
                                                                    <option>Minute(s)</option>
                                                                    <option> Hour(s)</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Passing Criteria </label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="passing_criteria" value="{{ $license->passing_criteria }}">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4">Points per Question</label>
                                                                <input type="text" class="form-control"
                                                                    id="inputEmail4" name="points_per_question" value="{{ $license->points_per_question }}">
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="col-lg-2"></div>
                                            </div>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12 pt-2">
                                                    {{-- <a href="#" class="bluee-btn">Reset </a> --}}
                                                    <button  type="submit" class="bluee-btn" data-toggle="modal"
                                                        data-target="#block-modal">Update </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="info-bg d-flex justify-content-between">
                                                <h3>Total Questions</h3>
                                                <h3>{{ $count }} Questions</h3>
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
                                                        <a href="{{ url('license_question_delete/'.$items->id.'/'.Request::segment(2)) }}" class="fas fa-trash-alt blck"></a>
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
{{-- 
                                            <div class="row py-2">
                                                <div class="col-lg-12">
                                                    <div class="d-flex justify-content-between">
                                                        <h5>Question 2 </h5>
                                                        <a href="#_" class="fas fa-trash-alt blck"></a>
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
                                                        <a href="#_" class="fas fa-trash-alt blck"></a>
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
                                                        <a href="#_" class="fas fa-trash-alt blck"></a>
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
