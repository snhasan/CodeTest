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


			<div id="header" class="clearfix sticky">



			</div>

			<section class="page-header page-header-xs">
				<div class="container">

					

						<h3><a href="{{route("home")}}">Home</a></h3>
						


				</div>
			</section>
			<!-- /PAGE HEADER -->



			<!-- -->
			<section id="middle">
    <div class="panel panel-default">
		<div class="panel-heading panel-heading-transparent">
			<strong>Data Entry</strong>
		</div>

		<div class="panel-body">

				@if(Session::has('alert_msg') && Session::has('alert_status'))
					<div class="alert alert-{{ Session::get('alert_status') }} margin-bottom-30 notification-alert"><!-- SUCCESS -->
						<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
						<strong>{{ Session::get('alert_msg') }}</strong> 
					</div>
				@endif
	            <form method="post" action="{{url('/data-store')}}" enctype="multipart/form-data">
				{{ csrf_field() }}
					<fieldset>
						<!--  [php action request] -->

						<div class="row">
							<div class="form-group">
								<div class="col-md-5 col-sm-5">
									<label>Name</label>
									<input type="text" name="name" value="" class="form-control">
								</div>
								<div class="col-md-5 col-sm-5">
									<label>Email</label>
									<input type="text" name="email" value="" class="form-control">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="form-group">
								<div class="col-md-10 col-sm-10">
									<label>Description</label>
									<textarea name="description" rows="4" class="form-control "></textarea>
								</div>
							</div>
						</div>


					</fieldset>

					<div class="row">
						<div class="col-md-10">
							<button type="submit" class="btn btn-3d btn-teal btn-xlg btn-block margin-top-30">
								Save
							</button>
						</div>
					</div>

				</form>

		</div>

	</div>
</section>


	</body>
</html>