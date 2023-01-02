<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
	<!-- fixed-top-->
	@php
	use App\Models\Notification;
	$notif = Notification::all();
	$notif_count = Notification::where('read_at',null)->count();

		  @endphp
	<nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-light navbar-border">
		<div class="navbar-wrapper">
			<div class="navbar-header">
				<ul class="nav navbar-nav flex-row">
					<li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a>
					</li>
					<li class="nav-item"> <a class="navbar-brand" href="dashboard.php"> <img class="brand-logo img-fluid" alt="stack admin logo" src="{{ url('admin_asset/images/logo-dashboard.png') }}"> </a> </li>
					<li class="nav-item d-md-none"> <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a> </li>
				</ul>
			</div>
		@include('admin.top_bar')
		</div>
	</nav>
	<!-- ////////////////////////////////////////////////////////////////////////////-->
	<div class="main-menu menu-fixed menu-light menu-accordion" data-scroll-to-active="true">
		<div class="main-menu-content">
			<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
				<li class="nav-item <?php if ($activeNav == "dashboard") {
										echo "active ";
									} else {
										echo " ";
									} ?>"><a href="{{  url('dashboard') }}"><i class="fa fa-chart-area"></i><span class="menu-title" data-i18n="">DASHBOARD</span></a>
				</li>
				<li class="nav-item <?php if ($activeNav == "user-listing") {
												echo "active ";
											} else {
												echo " ";
											} ?>"><a href="{{  url('users') }}"><i class="fas fa-user-circle"></i><span class="menu-title " data-i18n="">USERS</span></a>
											
				</li>
				<li class="nav-item <?php if ($activeNav == "trainer" || $activeNav == 'trainer-listing') {
												echo "active ";
											} else {
												echo " ";
											} ?>"><a href="{{ url('trainer') }}"><i class="fas fa-user-alt"></i>
						<span class="menu-title " data-i18n="">TRAINERS</span></a>
				
				</li>
				<li class="nav-item <?php if ($activeNav == "course") {
												echo "active ";
											} else {
												echo " ";
											} ?>">
											<a href="{{ url('course_log') }}"><i class="fas fa-address-card"></i>
												{{-- <a href="#"><i class="fas fa-address-card"></i> --}}
											<span class="menu-title " data-i18n="">COURSE LOG</span></a>
				
				</li>
				<li class="nav-item <?php if ($activeNav == "inventory-management") {
												echo "active ";
											} else {
												echo " ";
											} ?>">
											<a href="{{ url('inventory_management') }}">
												{{-- <a href="#"> --}}
											
											<i class="fas fa-file-alt"></i><span class="menu-title " data-i18n="">INVENTORY MANAGEMENT</span></a>
				
				</li>
				<li class="nav-item <?php if ($activeNav == "package-management") {
												echo "active ";
											} else {
												echo " ";
											} ?>">
											<a href="{{  url('package_management') }}">
												{{-- <a href="#"> --}}
											
											<i class="fas fa-clipboard-list"></i><span class="menu-title " data-i18n="">PACKAGE MANAGEMENT</span></a>
				
				</li>
				<li class="nav-item <?php if ($activeNav == "subscription") {
												echo "active ";
											} else {
												echo " ";
											} ?>">
											<a href="{{ url('subscription_logs_user') }}">
												{{-- <a href="#"> --}}
											
											<i class="fas fa-envelope"></i><span class="menu-title " data-i18n="">SUBSCRIPTION LOG</span></a>
				
				</li>
				<li class="nav-item <?php if ($activeNav == "payments") {
												echo "active ";
											} else {
												echo " ";
											} ?>"><a href="{{ url('payment_logs') }}"><i class="fas fa-credit-card"></i><span class="menu-title " data-i18n="">PAYMENT LOG</span></a>
				
				</li>
				<li class="nav-item <?php if ($activeNav == "category") {
					echo "active ";
				} else {
					echo " ";
				} ?>"><a href="{{ url('category') }}"><i class="fa fa-list-alt" aria-hidden="true"></i><span class="menu-title " data-i18n="">CATEGORY</span></a>

</li>
				<li class="nav-item <?php if ($activeNav == "license") {
												echo "active ";
											} else {
												echo " ";
											} ?>"><a href="{{ url('license') }}"><i class="fas fa-address-book"></i><span class="menu-title " data-i18n="">LICENSE MANAGEMENT</span></a>
				
				</li>
				<li class="nav-item <?php if ($activeNav == "feedback") {
												echo "active ";
											} else {
												echo " ";
											} ?>"><a href="{{ url('feedback') }}"><i class="fas fa-users"></i><span class="menu-title " data-i18n="">FEEDBACK</span></a>
				
				</li>
			</ul>
		</div>
	</div>