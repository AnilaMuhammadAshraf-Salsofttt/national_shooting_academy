<?php
$title = "Home";
$activeNav = 'Home';
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
                                {{-- <div class="c100 p80 l-blue center_item"> <span>{{ $per_month_payment* 100.0 /  }}%</span> --}}
                                    <div class="c100 p80 l-blue center_item"> <span>{{ $per_month_payment? $per_month_payment * 100 / $course_count[0]->count:"0" }}%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>
                                <p class="stats_text light_blu">Average courses created / Month</p>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12 text-center">
                                <div class="c100 p80 blue center_item"> <span>{{ $per_year_payment?$per_year_payment * 100 / $course_count[0]->count:"0"  }}%</span>
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
                        <img src="{{ asset('user_asset/images/course-ico.png') }}" alt="N/A">
                        <div>
                            <p>Total Courses created</p>
                            <p>{{ $course_count[0]->count }}</p>
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
                                {{-- <select name="year" id="select_year" class="my-sel">
                                    <option value="" selected disabled>Select Year</option>
                                    <option value="1">1</option>
                                </select> --}}
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
                                        <th>Name</th>
                                        <th>Time</th>
                                        <th>date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $id=1;
                                @endphp
                                    @foreach ($user as $users)
                                    <tr>
                                        <td>{{ $id++ }}</td>
                                        <td>New Account Created</td>
                                        <td>{{ $users->first_name." ".$users->last_name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($users->created_at)->format('H:i A') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($users->created_at)->format('M d, Y') }}</td>

                                    </tr>
                                    @endforeach
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

            <form  action="{{ url('trainer/get_package') }}" method="get" >
            <div class="modal-body nmg">
                <div class="row">
                    <div class="col-12 text-center">
                        <p class="text_pck">Please select subscription package in order
                            to avail the platform services.</p>
                    </div>
                    <div class="col-12 text-center">
                        <p class="pckg_p">Select Package</p>
                    </div>
                    
                    @foreach ($package as $packages)
                        <div class="col-12 text-center">
                            <div class="card__Wrap sel_pck">
                                <div class="reg-header-inner">
                                    <p>{{ $packages->type }}</p>
                                </div>
                                <div class="body_pckg">
                                    <h4>${{ $packages->amount }}</h4>
                                    <p>{{ $packages->name }}</p>
                                    <p>{{ $packages->description }}</p>

                                    <input type="radio" name="package" value="{{ $packages->id }}">
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-12 text-center mt-4">
                        <button type="submit" class="login__button w-75 mx-auto" >Continue</button>
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

{{-- 
 <script src="{{ asset('admin_asset/assets/js/dash-chart.js') }}"></script>
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/bar.js') }}" type="text/javascript"></script> 
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/line.js') }}" type="text/javascript"></script> 
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/pie.js') }}" type="text/javascript"></script> 
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/funnel.js') }}" type="text/javascript"></script>  --}}



<script type="text/javascript">

var myChart = echarts.init(document.getElementById('chart-1'));

const f = @json($totalcourse);
const h = @json($totalsale);

var option = {
    title: {

    },
    tooltip: {},
    //  legend: {
    //    data:['Number of Bets','Friendly Bet lost per month']
    //  },
    xAxis: [{
		type: 'category',
		data: f.map( m => m.key )
	}],

	// Vertical axis
	yAxis: [{
			type: 'value',
			name: '',
			axisLabel: {
				formatter: '{value} '
			}
		},
		{
			type: 'value',
			name: 'Courses',
			axisLabel: {
				formatter: '{value} °C'
			}
		}
	],

	// Add series
	series: [{
			name: 'Total Course',
			type: 'bar',
			data: f.map( m => m.value )
		},
		{
			name: 'Total Sale',
			type: 'bar',
			data: h.map( m => m.value )
		},

	]
};

myChart.setOption(option);

    </script>


@endsection