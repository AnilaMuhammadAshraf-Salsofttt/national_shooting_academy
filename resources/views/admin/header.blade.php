<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
       <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

	<title>
	National Shooting - <?php echo ((isset($title)) ? $title : 'Dashboard'); ?>
	</title>
	<link rel="shortcut icon" href="{{ url('admin_asset/images/favicon.ico') }}" />
	   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/assets/css/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/assets/css/slick-theme.css') }}">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<!-- BEGIN VENDOR CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/vendors.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/vendors/css/forms/selects/select2.min.css') }}">
	<!-- END VENDOR CSS-->
	<!-- BEGIN STACK CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/app.css') }}">

	<!-- END STACK CSS-->
	<!-- BEGIN Page Level CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
	<!-- END Page Level CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/css/plugins/calendars/fullcalendar.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/vendors/css/calendars/fullcalendar.min.css') }}">
	<!-- BEGIN Custom CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/assets/css/style.css')}}?t={{time()}}">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css') }}" />
	<link rel="stylesheet" href="{{ asset('admin_asset/assets/css/circle.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('admin_asset/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
	<script src="{{asset('admin_asset/app-assets/vendors/js/extensions/sweetalert.min.js')}}" type="text/javascript"></script>

	<!-- END Custom CSS-->
</head>
