<?php

$title = "Course add";
$activeNav = 'course-add';
?>

@extends('user.layouts.master')
@section('content')

    <section class="banner inner_banner">
    @include('user.layouts.video')

    <!-- <img src="images/banner-bg.png" class="banner_1" alt="N/A"> -->
        <img src="{{ asset('user_asset/images/banner-bg-inner-2.png')}}" class="banner_2" alt="N/A">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12">
                    <div class="item banner">
                        <h1 class="banner_heading">
                            The Tactical<br>
                            Skills To Respond<br>
                            With Confidence
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="login bg-page position-relative">
        <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

        <div class="container">
            <div class="row mb-5">
                <div class="col-12">
                    <a href="{{  url('trainer/trainer_course_logs') }}" class="h-link"><i class="fas fa-angle-left"></i>
                        <h5 class="i_t mb-0">Create Course</h5>
                    </a>
                </div>
            </div>


            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <span class="alert-danger">{{$error}}</span><br><br>
                        @endforeach
                    @endif
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <form action="{{ route('course.feature_insert',Request::Segment(3)) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="card create_course">
                            <div class="card-header">Course Details</div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label for="" class="cc">Product</label>
                                        <p class="cc">{{ $courses->product->name }}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label for="" class="cc">Course Name*</label>
                                        <input type="text" class="cc" name="name" placeholder="Course Name"
                                               value="{{ $courses->name }}">

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label for="" class="cc">Status*</label>
                                        <select name="status" id="status" class="cc">
                                            <option value="" disabled selected>Select</option>
                                            <option value="active" @if ($courses->status == 'active') selected @endif >
                                                Active
                                            </option>
                                            <option value="inactive"
                                                    @if ($courses->status == 'inactive') selected @endif>InActive
                                            </option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <label for="" class="cc">Description*</label>
                                        <textarea name="description" id="" cols="30" rows="10" class="cc"
                                                  value="{{ $courses->description }}">{{ $courses->description }}</textarea>
                                    </div>

                                </div>

                                <div id="feature_section">

                                    {{-- <div class="col-lg-4 col-md-4 col-12">
                                        <label for="" class="cc">Feature Title*</label>
                                        <input type="text" class="cc" placeholder="Feature Name">
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <label for="" class="cc">Feature Value*</label>
                                        <input type="text" class="cc" placeholder="Feature Name">
                                    </div> --}}

                                    <div class="col-lg-4 col-md-4 col-12">
                                        <a href="javascript:void(0)" class="cc_btn rsp-margin" id="add_more_feature">Add
                                            Feature(s)</a>
                                    </div>
                                </div>

                                @foreach ($courses->features as $features)
                                    <div class="row feature-remove-{{$features->id}}">
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label for="" class="cc">Feature Title*</label>
                                            <input type="text" class="cc" placeholder="Feature Name"
                                                   value="{{ $features->title }}">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <label for="" class="cc">Feature Value*</label>
                                            <input type="text" class="cc" placeholder="Feature Name"
                                                   value="{{ $features->value }}">
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-12">
                                            <a href="javascript:void(0)" onclick="feature_remove('{{ $features->id }}')"
                                               class="cc_btn rsp-margin"><i class="fas fa-trash-alt"></i> Delete</a>
                                        </div>
                                    </div>
                                @endforeach


                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>

                        <br>
                        <form action="{{ route('course.image_insert',Request::Segment(3)) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">Course Main Image</div>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <label for="" class="cc">Upload Image*</label>
                                    <div class="document_wrapper">
                                        <div class="row">
                                            <div class="col-12">
                                                <input name="image" type="file" class="custom-file-input-1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="v_wrapper">
                                                    <img width="100%" src="{{ url('storage/course/'.$courses->image) }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-right">
                                    <button type="submit" class="btn btn-info "> Update</button>
                                </div>
                            </div>
                            </div>
                        </form>
                        <br>

                    <form action="{{ route('course.lecture_insert',Request::Segment(3)) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="card-header">Syllabus Details</div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="javascript:void(0)" class="cc_btn " id="add_more_lecture">Add Lecture(s)</a>
                            </div>
                        </div>
                        <div id="lecture_section"></div>


                        @foreach ($courses->syllabus as $syllabus)

                            <div class="row lecture-remove-{{ $syllabus->id }}">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Lecture Title*</label>
                                    <input type="text" class="cc" placeholder="Lecture Title" name="lecture_name[]"
                                           value="{{ $syllabus->title }}">
                                </div>
                            </div>

                            <div class="row lecture-remove-{{ $syllabus->id }}">
                                <div class="col-12">
                                    <label for="" class="cc">Upload Video*</label>
                                    <div class="document_wrapper">
                                        <div class="row">
                                            <div class="col-12">
                                                <input name="upload_video[]" type="file" class="custom-file-input-1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="v_wrapper">
                                                    <div class="video_thumb video-remove-{{ $syllabus->id }}">
                                                        {{-- <div class="vid-overlay"></div> --}}

                                                        <video width="220" height="140" controls>
                                                            <source src="{{ url($syllabus->video) }}" type="video/mp4">
                                                        </video>
                                                        {{-- <img src="images/video-thumb.png" alt=""> --}}
                                                        <a href="javascript:void(0)"
                                                           onclick="video_remove('{{ $syllabus->id }}')"
                                                           class="close-btn"><i class="fas fa-times"></i></a>
                                                        {{-- <a href="" class="play"><i class="fas fa-play"></i></a> --}}
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row lecture-remove-{{ $syllabus->id }}">
                                <div class="col-12 text-right">
                                    <a href="javascript:void(0)" onclick="lecture_remove('{{ $syllabus->id }}')"
                                       class="cc_btn "><i class="fas fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-info "> Update</button>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('course.file_insert',Request::Segment(3)) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="card-header">Add Files</div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="javascript:void(0)" class="cc_btn " id="add_more_file">Add File(s)</a>
                            </div>
                        </div>
                        <div id="course_file_section"></div>

                        @foreach ($courses->files as $file)

                            <div class="row course_file-remove-{{ $file->id }}">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Title*</label>
                                    <input type="text" class="cc" placeholder="Title" name="title[]"
                                           value="{{ $file->title }}">
                                </div>
                            </div>

                            <div class="row course_file-remove-{{ $file->id }}">
                                <div class="col-12">
                                    <label for="" class="cc">Upload File*</label>
                                    <div class="document_wrapper">
                                        <div class="row">
                                            <div class="col-12">
                                                <input name="upload_file[]" type="file" class="custom-file-input-1">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="v_wrapper">
                                                    <a target="_blank" href="{{$file->path}}"><h3>{{$file->title}}</h3>
                                                    </a>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row course_file-remove-{{ $file->id }}">
                                <div class="col-12 text-right">
                                    <a href="javascript:void(0)" onclick="course_file_remove('{{ $file->id }}')"
                                       class="cc_btn "><i class="fas fa-trash-alt"></i> Delete</a>
                                </div>
                            </div>
                        @endforeach
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-info "> Update</button>
                            </div>
                        </div>
                    </form>

                    <form action="{{ route('course.quiz_insert',Request::Segment(3)) }}" method="post"
                          enctype="multipart/form-data">
                        @csrf

                        <div class="card-header">Quiz Details</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Quiz Title*</label>
                                    <input type="text" class="cc" placeholder="Quiz Title" name="quiz_title"
                                           value="{{ $courses->quiz_title }}">
                                </div>


                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Duration</label>
                                    <input type="text" class="cc dd" placeholder="Duration" name="duration"
                                           value="{{ $courses->duration }}">

                                </div>

                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Passing Criteria</label>
                                    <input type="text" class="cc" placeholder="80%" name="passing_criteria"
                                           value="{{ $courses->passing_criteria }}">

                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Points per Question</label>
                                    <input type="text" class="cc" placeholder="2" name="points_per_question"
                                           value="{{ $courses->points_per_quesiton }}">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Price</label>
                                    <input type="text" class="cc" placeholder="100" name="charges"
                                           value="{{ $courses->charges }}">

                                </div>
                                <div class="col-lg-4 col-md-4 col-12">
                                    <label for="" class="cc">Attempts</label>
                                    <input type="text" class="cc" placeholder="2" name="attempts"
                                           value="{{ $courses->attempts }}">

                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3 col-12">
                                    <a href="javascript:void(0)" class="cc_btn rsp-margin" id="add_more_question">Add
                                        Quize(s)</a>
                                </div>
                            </div>

                            <div id="question_section"></div>

                            @php
                                $ques_itr = 1;
                            @endphp
                            @foreach ($courses->questions as $questions)

                                <div class="remove_full_tab_of_question_{{$questions->id}}">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="javascript:void(0)"
                                               onclick="remove_quiz_fun('{{ $questions->id }}')" class="btn-cc-2">Remove
                                                Question-{{ $ques_itr++ }}</a>
                                            {{-- <a href="" class="btn-cc-2">Add New</a> --}}
                                            {{-- <a href="" class="cc_btn rsp-margin-top"><i class="fas fa-trash-alt"></i>Delete</a> --}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 col-6">
                                            <label for="" class="cc">Question </label>
                                            <input type="text" class="cc" placeholder="Add Question"
                                                   value="{{ $questions->question }}">
                                        </div>

                                        <div class="col-lg-4 col-md-4 col-6">
                                            <label for="" class="cc">Answer Form</label>
                                            <select id="status" class="cc">
                                                <option value="" disabled selected>Select</option>
                                                <option value="checkbox"
                                                        @if ($questions->form == 'checkbox') selected @endif >Checkbox
                                                </option>
                                                <option value="radio" @if ($questions->form == 'radio') selected @endif>
                                                    Radio Button
                                                </option>
                                                <option value="dropdown"
                                                        @if ($questions->form == 'dropdown') selected @endif>Dropdown
                                                </option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        @foreach ($questions->answers as $answer)
                                            <div class="col-md-8 col-12">
                                                <label for="" class="cc">Value</label>
                                                <input type="text" class="cc mb-0 mb-md-4" placeholder="Value"
                                                       value="{{ $answer->answer }}">
                                            </div>
                                            <div class="col-md-4 col-12 d-flex align-items-center">
                                                <div class="radio mb-4 mb-md-0">
                                                    <label><input type="radio" name="correct_ans[]"
                                                                  value="{{ $answer->correct }}"
                                                                  @if ($answer->correct == '1') checked @endif >Correct
                                                        Answer</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn-cc-3">Update Quiz</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')

    <script>
        $(document).ready(function () {

            var i = 1;
            $('#add_more_feature').click(function () {
                i++;

                $('#feature_section').append("<div class=\"row feature_panel" + i + "\"   id=\"feature_section\">" +

                    " <div class=\"col-lg-4 col-md-4 col-12\">" +
                    "    <label class=\"cc\">Feature Title*</label>" +
                    "     <input type=\"text\" name=\"feature_name[]\" class=\"cc\" placeholder=\"Feature Name\">" +
                    "  </div>" +
                    "   <div class=\"col-lg-4 col-md-4 col-12\">" +
                    "     <label  class=\"cc\">Feature Value*</label>" +
                    "     <input type=\"text\" name=\"feature_value[]\" class=\"cc\" placeholder=\"Feature Name\">" +
                    "  </div> " +
                    "      <div class=\"col-lg-4 col-md-4 col-12\">" +
                    "            <a href=\"javascript:void(0)\" class=\"cc_btn rsp-margin btn_remove_feature\" id=\"" + i + "\" ><i  class=\"fas fa-trash-alt\"></i> Delete</a>" +
                    "           </div>" +
                    "  </div>");
            });

            $(document).on('click', '.btn_remove_feature', function () {
                var button_id = $(this).attr("id");
                $('.feature_panel' + button_id + '').remove();
            });
        });

        function feature_remove(id) {
            $.ajax({
                url: "{{ route('course.feature_remove') }}",
                method: 'post',
                data: {id: id, _token: "{{ csrf_token() }}"},
                success: function (data) {
                    $.notify(data.task, data.completed);
                    $('.feature-remove-' + id).css({'display': 'none'});
                }
            })
        }

        function video_remove(id) {
            $.ajax({
                url: "{{ route('course.video_remove') }}",
                method: 'post',
                data: {id: id, _token: "{{ csrf_token() }}"},
                success: function (data) {
                    $.notify(data.task, data.completed);
                    $('.video-remove-' + id).css({'display': 'none'});
                }
            })
        }

        function lecture_remove(id) {
            $.ajax({
                url: "{{ route('course.lecture_remove') }}",
                method: 'post',
                data: {id: id, _token: "{{ csrf_token() }}"},
                success: function (data) {
                    $.notify(data.task, data.completed);
                    $('.lecture-remove-' + id).css({'display': 'none'});
                }
            })
        }

        function remove_quiz_fun(id) {
            $.ajax({
                url: "{{ route('course.quiz_question_remove') }}",
                method: 'post',
                data: {id: id, _token: "{{ csrf_token() }}"},
                success: function (data) {
                    $.notify(data.task, data.completed);
                    $('.remove_full_tab_of_question_' + id).css({'display': 'none'});
                }
            })
        }

        $(document).ready(function () {
            var i = 1;
            $('#add_more_lecture').click(function () {
                i++;

                $('#lecture_section').append("<div class=\"row lecture_panel" + i + "\"   id=\"lecture_section\">" +

                    "    <div class=\"card-body\">" +
                    "  <div class=\"row\">" +
                    "   <div class=\"col-lg-4 col-md-4 col-12\">" +
                    "       <label for=\"\" class=\"cc\">Lecture Title*</label>" +
                    "        <input type=\"text\" class=\"cc\" placeholder=\"Lecture Title\" name=\"lecture_name[]\">" +
                    "    </div>" +
                    "    </div>" +

                    "    <div class=\"row\">" +
                    "       <div class=\"col-12\">" +
                    "       <label for=\"\" class=\"cc\">Upload Video*</label>" +
                    "         <div class=\"document_wrapper\">" +
                    "            <div class=\"row\">" +
                    "                <div class=\"col-12\">" +
                    "                    <input name=\"upload_video[]\" type=\"file\" class=\"custom-file-input-1\" > <span>(1/1)</span>" +
                    "               </div>" +
                    "           </div>" +
                    "           <div class=\"row\">" +
                    "         <div class=\"col-12\">" +
                    "             <div class=\"v_wrapper\">" +

                    "    </div>" +
                    "    </div>" +
                    "   </div>" +
                    "  </div>" +
                    "  </div>" +
                    "      <div class=\"row\">" +
                    "         <div class=\"col-12 text-right\">" +
                    "           <a href=\"javascript:void:void(0)\" class=\"cc_btn btn_remove_lecture\" id=\"" + i + "\"><i class=\"fas fa-trash-alt \"></i> Delete</a>" +
                    "         </div>" +
                    "       </div>" +
                    "       </div>" +
                    "  </div>"
                );
            });

            $(document).on('click', '.btn_remove_lecture', function () {
                var button_id = $(this).attr("id");
                $('.lecture_panel' + button_id + '').remove();
            });

            var i = 0;
            $('#add_more_question').click(function () {
                i++;

                $('#question_section').append("<div class=\"row question_panel" + i + "\"   id=\"question_section\">" +
                    "  <div class=\"row\">" +

                    "  <div class=\"col-md-8 col-12\">" +
                    " <label  class=\"cc\">Add Question</label>" +
                    "  <input type=\"text\" class=\"cc\" placeholder=\"Add Question\" name=\"question[" + i + "][]\">" +
                    " </div>" +

                    " <div class=\"col-lg-4 col-md-4 col-12\">" +
                    " <label  class=\"cc\">Answer Form</label>" +
                    " <select name=\"question[" + i + "][1]\" id=\"status\" class=\"cc\">" +
                    " <option value=\"\" disabled selected>Select</option>" +
                    " <option value=\"checkbox\">Checkbox</option>" +
                    "<option value=\"radio\">Radio Button</option>" +
                    "     <option value=\"dropdown\">Dropdown</option>" +
                    "   </select>" +
                    " </div>" +
                    " </div>" +
                    " </div>" +


                    "<div class=\"question_panel" + i + "\">" +

                    "   <div  id=\"dynamic_field" + i + "\">" +
                    "  <div class=\"row\">" +
                    "    <div class=\"col-12\">" +
                    "    <a href=\"javascript:void:void(0)\" class=\"btn-cc-2 btn_remove_question\" id=\"" + i + "\">Remove</a>" +
                    "   <a href=\"javascript:void:void(0)\" class=\"btn-cc-2\" onclick=\"add_new_question_ans(" + i + ")\">Add New </a>" +
                    "       <a href=\"javascript:void:void(0)\" class=\"cc_btn rsp-margin-top btn_remove_value_question\" id=\"" + i + "\"><i class=\"fas fa-trash-alt\"></i> Delete</a>" +
                    "   </div>" +
                    "  </div>   " +
                    "</div>"
                );
            });

            $(document).on('click', '.btn_remove_question', function () {
                var button_id = $(this).attr("id");
                $('.question_panel' + button_id + '').remove();
            });
        });

        var j = 0;

        function add_new_question_ans(iteration) {
            j++;
            $(document).ready(function () {

                $('#dynamic_field' + iteration + '').append("<div   id=\"dynamic_field" + iteration + "\">" +

                    "  <div class=\"row ques_value_panel" + iteration + "\">" +
                    "   <div class=\"col-md-8 col-12 \">" +
                    "     <label class=\"cc\">Value</label>" +
                    "    <input type=\"text\" class=\"cc mb-0 mb-md-4\" placeholder=\"Value\" name=\"question[" + iteration + "][value_of_ans][" + iteration + "][]\">" +
                    "   </div>" +
                    "   <div class=\"col-lg-2 col-md-4 col-12 d-flex align-items-center \">" +
                    "      <div class=\"radio mb-1 mb-md-0\">" +
                    "         <label><input type=\"radio\" name=\"question[" + iteration + "][value_of_ans][" + iteration + "][correct_ans][" + j + "]\" value=\"1\">Correct Answer</label>" +
                    "         <input type=\"hidden\" name=\"counting[" + j + "]\" >" +
                    "      </div>" +
                    "    </div>" +
                    "   <div class=\"col-lg-2 col-md-12 col-12 d-flex align-items-center\">" +
                    "    </div>" +
                    "   </div>" +

                    "  </div>");
            });
        }

        $(document).on('click', '.btn_remove_value_question', function () {
            var button_id = $(this).attr("id");
            $('.ques_value_panel' + button_id + '').remove();
        });


        var i = 1;
        $('#add_more_file').click(function () {
            console.log(i);
            i++;

            $('#course_file_section ').append("<div class=\"row file_panel" + i + "\"   id=\"file_section\">" +

                "    <div class=\"card-body\">" +
                "  <div class=\"row\">" +
                "   <div class=\"col-lg-4 col-md-4 col-12\">" +
                "       <label for=\"\" class=\"cc\">Title*</label>" +
                "        <input type=\"text\" class=\"cc\" placeholder=\"Title\" name=\"title[]\">" +
                "    </div>" +
                "    </div>" +

                "    <div class=\"row\">" +
                "       <div class=\"col-12\">" +
                "       <label for=\"\" class=\"cc\">Upload File*</label>" +
                "         <div class=\"document_wrapper\">" +
                "            <div class=\"row\">" +
                "                <div class=\"col-12\">" +
                "                    <input name=\"upload_file[]\" type=\"file\" class=\"custom-file-input-1\" > <span>(1/1)</span>" +
                "               </div>" +
                "           </div>" +
                "           <div class=\"row\">" +
                "         <div class=\"col-12\">" +
                "             <div class=\"v_wrapper\">" +

                "    </div>" +
                "    </div>" +
                "   </div>" +
                "  </div>" +
                "  </div>" +
                "      <div class=\"row\">" +
                "         <div class=\"col-12 text-right\">" +
                "           <a href=\"javascript:void:void(0)\" class=\"cc_btn btn_remove_file\" id=\"" + i + "\"><i class=\"fas fa-trash-alt \"></i> Delete</a>" +
                "         </div>" +
                "       </div>" +
                "       </div>" +
                "  </div>"
            );
        });

        $(document).on('click', '.btn_remove_file', function () {
            var button_id = $(this).attr("id");
            $('.file_panel' + button_id + '').remove();
        });

        function course_file_remove(id) {
            $.ajax({
                url: "{{ route('course.file_remove') }}",
                method: 'post',
                data: {id: id, _token: "{{ csrf_token() }}"},
                success: function (data) {
                    $.notify(data.task, data.completed);
                    $('.course_file-remove-' + id).css({'display': 'none'});
                },
                error: function (data) {
                    console.log(data);
                }
            })
        }
    </script>

@endsection
