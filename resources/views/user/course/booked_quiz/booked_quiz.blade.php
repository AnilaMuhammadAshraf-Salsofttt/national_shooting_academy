<?php

    $title = "Course Details";
    $activeNav = 'user-dash';
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




<section class="login bg-page position-relative text-center text-sm-left">
    <img src="images/inner_target.png" class="target inner-target" alt="" srcset="">

    <div class="container">
        <div class="row mb-5">
            <div class="col-12 d-flex justify-content-between align-items-center flex-column flex-md-row ">
                <a href="{{ url('booked_course_view/'.Request::segment(2)) }}"><h5 class="i_t mb-0"><i class="fas fa-angle-left"></i> Courses</h5></a>
            </div>
        </div>
        <div class="course-inner">
            <div class="course-inner-header p-4 d-flex justify-content-between">
                <p class="sidebar-heading my-0">Trainer's Details</p>
                <p class="sidebar-heading my-0">Status: Inprogress</p>
            </div>
            <div class="p-4">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <img src="images/trainer-icon.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <p class="black-text">Trainer Name</p>
                        <p class="mt-0">Abc</p>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-sm-4">
                        <p class="black-text">Trainer Email</p>
                        <p class="mt-0">abc@xyz.com</p>
                    </div>
                </div>
            </div>


            <div class="course-inner-header p-4">
                <p class="sidebar-heading my-0">Quiz Details</p>
            </div>
            <div class="p-4">




                {{-- <div class="row justify-content-between mt-3">
                    <div class="col-lg-6 col-md-8">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="#_" class="btn-cc-1 w-100 text-center">Previous</a>
                            </div>
                            <div class="col-md-6">
                                <a href="#_" class="btn-cc-2 w-100 text-center">Mark Complete</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-xl-3">
                        <a href="u-booked-courseDetails-4.php" class="btn-cc-1 w-100 text-center">Next</a>
                    </div>
                </div> --}}

                <div class="card quiz_card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-12 ">
                                <div class="ww">

                                    <div class="c">
                                        <p class="time"><span id="count"></span></p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- <form id="msform" action="{{ route('quiz.submit') }}" method="post"> --}}
<div class="col-md-8 text-center mt-5" style="margin-top:800px;margin-left:160px;" id="div_download">
                 <form method="post" action="{{route('generate.certificate')}}">
                    @csrf
                    <input type="hidden" value="{{ Request::segment(2) }}" name="id">
            <button type="submit" style="margin-top:200px;" id="download" class="next quiz_next mt-3 site-btn l-blue-btn px-5 py-3">Download Certificate</button>
                 </form>
        </div>
                            <form id="msform"  >
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-12 ">
                                            <div class="w">
                                                <p class="blue">Total Question</p>
                                                <p class="blue">Question {{ $quiz->questions->count() }}</p>
                                            </div>
                                            <div class="w">
                                                <p class="blue">Time</p>
                                                <p class="blue">{{ $quiz->duration }} Mins</p>
                                            </div>
                                            <div class="w">
                                                <p class="blue">Attempt</p>
                                                <p class="blue">{{ $quiz->attempts }}</p>
                                            </div>


                                    </div>
                                </div>


                                <input type="button" onclick="start()" name="next" class="next quiz_next mt-3 site-btn l-blue-btn px-5 py-3" value="Start" />
                            </fieldset>
                            @php
                                $id=0;
                                $iteration=0;

                            @endphp
                            @foreach ($quiz->questions as $questions)
                            @php
                                $id++;
                                $iteration++;
                            @endphp

                            <fieldset>
                                <div class="row">
                                    <div class="col-12 ">
                                        <div class="ww">
                                            <div class="w">
                                                <p class="blue">Question {{ $id }}</p>
                                            </div>
                                            {{-- <div class="c">
                                                <p class="time"><span id="count"></span></p>
                                            </div> --}}
                                            <div class="r">
                                                <p class="blue">Question: {{ $id." / ".$quiz->questions->count() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 ">
                                        <p class="texty">{{ $questions->question }}</p>
                                    </div>
                                </div> @php
                                $alpha = 'a';
                            @endphp
                                <div class="row mt-2">
                                    <div class="col-12">
                                    @foreach ($questions->answers as $answers)

                                        <div class="row">
                                            <div class="col-12">
                                                <label class="container-quiz"><span style='color:red;'>{{ "(".$alpha++.")" }}</span> {{ $answers->answer }}
                                                    <input type="radio" onclick="radio_ans('{{ $answers->course_question_id}}','{{ $answers->correct }}')" name="radio-{{ $answers->course_question_id }}" value="{{ $answers->correct }}">
                                                    <span class="checkmark-quiz"></span>
                                                </label>
                                            </div>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                                @if ($iteration > '1')

                                <input type="button" name="previous" class="previous site-btn mt-3 px-5 py-3" value="Previous" />

                              @endif

                                <input type="button" name="next" class="next quiz_next mt-3 site-btn l-blue-btn px-5 py-3" value="Next" />
                                {{-- <input type="button" name="next" class="next quiz_next mt-3 site-btn l-blue-btn px-5 py-3" value="skip" /> --}}
                            </fieldset>

                            @endforeach

                            <fieldset>

                                <div class="row">
                                    <div class="col-12 text-center">
                                        <p class="click">Click on submit button if you have completed the quiz!</p>
                                        <div class="success">
                                        <p class="cleared">Congratulations You Have Cleared The Quiz.</p>


                                        <p id="marks"></p>
                                        <p>You are eligible for certificate. Download your certificate by click below!<p>
                                            <br/>
                                        </div>

                                         <div class="danger">
                                        <p class="danger_marks text-danger">You Have Not Cleared The Quiz.</p>


                                        <p id="marks_less"></p>
                                        <p>You are not eligible for certificate. Better try on next Attempt!<p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quiz-wrper">

                                            <img src="{{ asset('user_asset/images/quiz-img.png') }}" alt="">
                                            {{-- <a href="" class="license">Download License</a> --}}
                                        </div>
                                    </div>
                                </div>


                                <input type="button" name="previous" class="previous site-btn px-5 mt-3 py-3" value="Previous" />
                                <input type="hidden"  name="course_id" value="{{ Request::segment(2) }}">
                            <button  class="btn-submit site-btn l-blue-btn px-5 py-3" >Submit Quiz</button>

                            </fieldset>


                        </form>

                    </div>
                </div>



            </div>



        </div>
    </div>
</section>


@endsection




@section('js')

<script>
 var output = [];
 var check=0;
function radio_ans(question_id,correct)
{
     $('.success').hide();
$('.cleared').hide();
$('.danger').hide();
$('.danger_marks').hide();
$('#marks').hide();
$('#marks_less').hide();
    // alert(question_id+'  '+correct);
    if(correct==0){
        console.log('check:'+check+' '+question_id)
        if(question_id==check){
            // alert('same question')
            output.splice(-1)
            console.log('after remove')
            console.log({output})
output.push({questionid:question_id,answer:'WRONG'});
console.log({output});
        }else{
           output.push({questionid:question_id,answer:'WRONG'});
console.log({output});
        }
         check=question_id;
    }else{
         console.log('else check:'+check+' '+question_id)
           if(question_id==check){
            //    alert('same question')
               output.splice(-1)
output.push({questionid:question_id,answer:'CORRECT'});
           }else{
               output.push({questionid:question_id,answer:'CORRECT'});
               console.log({output});
           }
           check=question_id;
    }

        // alert(output)

        console.log('output:'+output)
}

$(".btn-submit").click(function(e){
    $('.click').hide();
e.preventDefault();
// alert('button submit ');
 $.ajax({
       type:'POST',
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
       url:"{{ route('quiz.submit') }}",
       data:({output:output,id:{{ Request::segment(2) }}}),
       success:function(data){
        //    alert('marks');
       console.log(data.marks);
       if(data.marks>=80){
           $('.click').hide();
             $('.success').show();
$('.cleared').show();
$('#marks').show();
$('#div_download').show();
document.getElementById("marks").innerHTML ="You got " +data.marks+'% marks';
$('.btn-submit').hide();
$('.previous').hide();
$('#count').hide();
       }else{
            $('.click').hide();
                        $('.danger').show();
$('.danger_marks').show();
             $('#marks_less').show();
        document.getElementById("marks_less").innerHTML ="You got " +data.marks+'% marks';
        $('.btn-submit').hide();
        $('.previous').hide();
        $('#count').hide();

       }
       }
       });
});

// $(".get-certificate").click(function(e){

// e.preventDefault();
// alert('certificate');
//  $.ajax({
//        type:'GET',
//        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
//        url:"{{ route('generate.certificate') }}",
//        success:function(data){
//            if(data.pdf){
//                alert('done');
//            }
//        console.log('done');

//        }
//        });
// });




function mark_completed(syllabi_id){

           var course_id = "{{ Request::segment(2) }}";

          $.ajax({
              url: "{{ route('syllabi.complete.mark') }}",
              method: "post",
              data:{syllabi_id:syllabi_id,
                course_id:course_id,
                _token: "{{ csrf_token() }}" },

              success:function(data){
                $.notify(data.task, data.completed);
              }
          })
        }
</script>


<script>


    function startTimer()
    {
        var counter = '{{ $quiz->duration*60 }}';
         setInterval(function() {
          counter--;
              if (counter >= 0) {
                      span = document.getElementById("count");

                    min = parseInt(counter/60);
                    sec = parseInt(counter%60);

          span.innerHTML = "<b>Time Left:  </b>" + min.toString() + ":" + sec.toString();
        }
        if (counter === 0)
         {
            alert('sorry, out of time');
            clearInterval(counter);
        }
        }, 1000);
    }


function start()
{
         $('.success').hide();
$('.cleared').hide();
$('.danger').hide();
$('.danger_marks').hide();
$('#marks').hide();
$('#marks_less').hide();
    document.getElementById("count").style="color:green;";
    startTimer();
};

</script>

@endsection
