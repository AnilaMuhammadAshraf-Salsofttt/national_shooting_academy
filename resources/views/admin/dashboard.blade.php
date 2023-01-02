<?php
$title = "Dashboard";
$activeNav = 'dashboard';
?>
@include('admin.header');
@include('admin.nav');



<div class="app-content content dashboard">
	<div class="content-wrapper">
		<div class="content-body">
			<!-- Basic form layout section start -->
			<section id="configuration">
				<div class="row">
					<div class="col-xl-3 col-lg-6 col-12 mb-4 mb-xl-0">
						<div class="card-db bg-orange">
							<img src="{{ url('admin_asset/images/d-1.png') }}" alt="">
							<div class="wrap">
								<p class="dshbrd-p">Total Customer</p>
								<h6>{{ $customer }}</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-12 mb-4 mb-xl-0">
						<div class="card-db bg-blue">
							<img src="{{ url('admin_asset/images/d-2.png') }}" alt="">

							<div class="wrap">
								<p class="dshbrd-p">Total Orders</p>
								<h6>{{ $order }}</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-12 mb-4 mb-xl-0">
						<div class="card-db bg-orange">
							<img src="{{ url('admin_asset/images/d-3.png') }}" alt="">

							<div class="wrap">
								<p class="dshbrd-p">Total Sale</p>
								<h6>{{ $sale[0]->amount }}</h6>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-12 mb-4 mb-xl-0">
						<div class="card-db bg-blue">
							<img src="{{ url('admin_asset/images/d-4.png') }}" alt="">

							<div class="wrap">
								<p class="dshbrd-p">Total Avg Order Sale</p>
								<h6>{{ $average[0]->avg }}</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-12 mt-4 mt-xl-0">

						<div class="chart-bar box bottom mt-2">
							<div class="row">
								<div class="col-12">
									<div class="chart-main position-relative">
										<div class="row">
											<div class="col-12 text-align-center position-relative">
												<h4 class="m_tag">Total Sale and Orders Per Month</h4>
												{{-- <h5 class="basic-txt2">Number of appointments</h5> --}}

											</div>
											<div class="col-12 col-xl-12">
												<div id="myChart-data1" class="height-400"></div>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>

					</div>
					

				</div>
				<div class="row mt-4">
					
					<div class="col-xl-12 col-lg-12 col-12 mt-4 mt-xl-0">

						<div class="chart-bar box bottom mt-2">
							<div class="row">
								<div class="col-12">

									<div class="chart-main position-relative">
										<h4 class="m_tag">Activity Log</h4>
										<div class="dash-wrapper">

											<div class="container mt-4">
												<div class="row">
													<div class="col-12">
														<div class="media act-log">
															<img class="mr-1" src="{{ url('admin_asset/images/user-icon.png') }}" alt="Generic placeholder image">

															<div class="media-body">
																<h5 class="mt-0">Lorem Ipsum is simply dummy text</h5>
																<p class="date">19 Nov 2020</p>
															</div>
														</div>
														<div class="media act-log">
															<img class="mr-1" src="{{ url('admin_asset/images/user-icon.png') }}" alt="Generic placeholder image">

															<div class="media-body">
																<h5 class="mt-0">Lorem Ipsum is simply dummy text</h5>
																<p class="date">19 Nov 2020</p>
															</div>
														</div>
														<div class="media act-log">
															<img class="mr-1" src="{{ url('admin_asset/images/user-icon.png') }}" alt="Generic placeholder image">
															<div class="media-body">
																<h5 class="mt-0">Lorem Ipsum is simply dummy text</h5>
																<p class="date">19 Nov 2020</p>
															</div>
														</div>
														<div class="media act-log">
															<img class="mr-1" src="{{ url('admin_asset/images/user-icon.png') }}" alt="Generic placeholder image">
															<div class="media-body">
																<h5 class="mt-0">Lorem Ipsum is simply dummy text</h5>
																<p class="date">19 Nov 2020</p>
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

					</div>

				</div>
			</section>
		</div>
	</div>
</div>




@include('admin.footer')

<script src="{{ asset('admin_asset/assets/js/dash-chart.js') }}"></script>
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/bar.js') }}" type="text/javascript"></script> 
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/line.js') }}" type="text/javascript"></script> 
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/pie.js') }}" type="text/javascript"></script> 
<script src="{{ asset('admin_asset/app-assets/vendors/js/charts/echarts/chart/funnel.js') }}" type="text/javascript"></script> 



<script type="text/javascript">
const f = @json($totalCourse);
const h = @json($totalUser);

    // Set paths
    // ------------------------------
    
    require.config({
        paths: {
            echarts: '{{ asset("admin_asset/app-assets/vendors/js/charts/echarts") }}'
        }
    });
    
    
    // Configuration
    // ------------------------------
    
    require(
        [
            'echarts',
            'echarts/chart/bar',
            'echarts/chart/line',
            'echarts/chart/scatter',
            'echarts/chart/pie'
        ],
    
    
        // Charts setup
        // function(ec) {
    
        //     // Initialize chart
        //     // ------------------------------
        //     var myChart = ec.init(document.getElementById('myChart-data1'));
    
        //     // Chart Options
        //     // ------------------------------
        //     chartOptions = {
    
        //         // Setup grid
        //         grid: {
        //             x: 100,
        //             x2: 50,
        //             y: 35,
        //             y2: 25
        //         },
    
        //         // Add tooltip
        //         tooltip: {
        //             trigger: 'axis'
        //         },
    
        //         // Add legend
        //         // legend: {
        //         //     data: ['Evaporation', 'Precipitation']
        //         // },
    
        //         // Add custom colors
        //         color: ['#446b8f', '#092a4a'],
    
        //         // Enable drag recalculate
        //         calculable: true,
    
        //         // Horizontal axis
        //         xAxis: [{
        //             type: 'category',
        //             data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        //         }],
    
        //         // Vertical axis
        //         yAxis: [{
        //             type: 'value'
        //         }],
    
        //         // Add series
        //         series: [{
        //             name: 'Evaporation',
        //             type: 'bar',
        //             data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
        //             itemStyle: {
        //                 normal: {
        //                     label: {
        //                         show: true,
        //                         textStyle: {
        //                             fontWeight: 500
        //                         }
        //                     }
        //                 }
        //             },
    
        //         }]
        //     };
    
        //     // Apply options
        //     // ------------------------------
    
        //     myChart.setOption(chartOptions);
    
    
        //     // Resize chart
        //     // ------------------------------
    
        //     $(function() {
    
        //         // Resize chart on menu width change and window resize
        //         $(window).on('resize', resize);
        //         $(".menu-toggle").on('click', resize);
    
        //         // Resize function
        //         function resize() {
        //             setTimeout(function() {
    
        //                 // Resize chart
        //                 myChart.resize();
        //             }, 200);
        //         }
        //     });
        // }

		function(ec) {

// Initialize chart
// ------------------------------
var myChart = ec.init(document.getElementById('myChart-data1'));

// Chart Options
// ------------------------------
chartOptions = {

	// Setup grid
	grid: {
		x: 100,
		x2: 50,
		y: 35,
		y2: 25
	},
	// Add tooltip
	tooltip: {
		trigger: 'axis'
	},

	// Add legend

	// Add custom colors
	color: ['#446b8f', '#092a4a'],

	// Enable drag recalculate
	calculable: true,

	// Horizontal axis
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
			name: 'Temperature',
			axisLabel: {
				formatter: '{value} °C'
			}
		}
	],

	// Add series
	series: [{
			name: 'Total Sale',
			type: 'bar',
			data: f.map( m => m.value )
		},
		{
			name: 'Total Orders',
			type: 'bar',
			data: h.map( m => m.value )
		},

	]
};

// Apply options
// ------------------------------

myChart.setOption(chartOptions);


// Resize chart
// ------------------------------

$(function() {

	// Resize chart on menu width change and window resize
	$(window).on('resize', resize);
	$(".menu-toggle").on('click', resize);

	// Resize function
	function resize() {
		setTimeout(function() {

			// Resize chart
			myChart.resize();
		}, 200);
	}
});
}
    );
    </script>