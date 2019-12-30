<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<title>Code Test</title>
		<meta name="keywords" content="HTML5,CSS3,Template" />
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

		<!-- WEB FONTS : use %7C instead of | (pipe) -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link type="text/css" rel="stylesheet" href="{{url('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}"   />
		
		<!-- THEME CSS -->

		<link href="{{url('admin/assets/css/essentials.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('admin/assets/css/layout.css')}}" rel="stylesheet" type="text/css" />


		<link href="{{url('admin/assets/css/header-1.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('assets/css/color_scheme/green.css')}}" rel="stylesheet" type="text/css" />

		<!-- PAGE LEVEL SCRIPTS -->
		<link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
	</head>

	
	<body class="smoothscroll enable-animation">





		<!-- wrapper -->
		<div id="wrapper">


			<!-- 
				AVAILABLE HEADER CLASSES

				Default nav height: 96px
				.header-md 		= 70px nav height
				.header-sm 		= 60px nav height

				.noborder 		= remove bottom border (only with transparent use)
				.transparent	= transparent header
				.translucent	= translucent header
				.sticky			= sticky header
				.static			= static header
				.dark			= dark header
				.bottom			= header on bottom
				
				shadow-before-1 = shadow 1 header top
				shadow-after-1 	= shadow 1 header bottom
				shadow-before-2 = shadow 2 header top
				shadow-after-2 	= shadow 2 header bottom
				shadow-before-3 = shadow 3 header top
				shadow-after-3 	= shadow 3 header bottom

				.clearfix		= required for mobile menu, do not remove!

				Example Usage:  class="clearfix sticky header-sm transparent noborder"
			-->
			<div id="header" class="clearfix sticky">



			</div>


			<!-- 
				PAGE HEADER 
				
				CLASSES:
					.page-header-xs	= 20px margins
					.page-header-md	= 50px margins
					.page-header-lg	= 80px margins
					.page-header-xlg= 130px margins
					.dark			= dark page header

					.shadow-before-1 	= shadow 1 header top
					.shadow-after-1 	= shadow 1 header bottom
					.shadow-before-2 	= shadow 2 header top
					.shadow-after-2 	= shadow 2 header bottom
					.shadow-before-3 	= shadow 3 header top
					.shadow-after-3 	= shadow 3 header bottom
			-->
			<section class="page-header page-header-xs">
				<div class="container">

						<h3><a href="{{route("home")}}">Home</a></h3>

						@if(Session::has('alert_msg') && Session::has('alert_status'))
							<div class="alert alert-{{ Session::get('alert_status') }} margin-bottom-30 notification-alert"><!-- SUCCESS -->
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
								<strong>{{ Session::get('alert_msg') }}</strong> 
							</div>
						@endif

				</div>
			</section>
			<!-- /PAGE HEADER -->



			<!-- -->
			<section>
				<div class="container">

					<h4>All Data</h4>
					<div class="table-responsive">
						<table class="table table-hover table-vertical-middle">
							<thead>
								<tr>
									<th class="width-30">Img</th>
									<th>SL</th>
									<th>Name</th>
									<th>email</th>
									<th>Description</th>
								</tr>
							</thead>
							<tbody>
								<?php $i=1 ?>
                    			@foreach($data as $all)
								<tr>
									<td class="text-center"><img src="assets/images/male.png" alt="" width="20"></td>
									<td>{{ $i++ }}</td>
									<td>{{ $all->name }}</td>
									<td>{{ $all->email }}</td>
									<td>{{ $all->description }}</td>
									
								</tr>

								@endforeach
							</tbody>
						</table>
					</div>




				</div>
			</section>


	</body>
</html>