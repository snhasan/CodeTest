<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>Smarty Admin</title>
		<meta name="description" content="" />
		<meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

		<!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

		<!-- CORE CSS -->
		<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		
		<!-- THEME CSS -->
		<link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />

	</head>
	<!--
		.boxed = boxed version
	-->
	<body>


		<!-- WRAPPER -->
		<div id="wrapper" class="clearfix">

			<!-- 
				ASIDE 
				Keep it outside of #wrapper (responsive purpose)
			-->
			<aside id="aside">
				<!--
					Always open:
					<li class="active alays-open">

					LABELS:
						<span class="label label-danger pull-right">1</span>
						<span class="label label-default pull-right">1</span>
						<span class="label label-warning pull-right">1</span>
						<span class="label label-success pull-right">1</span>
						<span class="label label-info pull-right">1</span>
				-->
				<nav id="sideNav"><!-- MAIN MENU -->
					<ul class="nav nav-list">
						<li class="active"><!-- dashboard -->
							<a class="dashboard" href="index.html"><!-- warning - url used by default by ajax (if eneabled) -->
								<i class="main-icon fa fa-dashboard"></i> <span>Dashboard</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-menu-arrow pull-right"></i>
								<i class="main-icon fa fa-bar-chart-o"></i> <span>Graphs</span>
							</a>
							<ul><!-- submenus -->
								<li><a href="{{route("create")}}">Flot Charts</a></li>
								<li><a href="graphs-morris.html">Morris Charts</a></li>
								<li><a href="graphs-inline.html">Inline Charts</a></li>
								<li><a href="graphs-chartjs.html">Chart.js</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-menu-arrow pull-right"></i>
								<i class="main-icon fa fa-table"></i> <span>Tables</span>
							</a>
							<ul><!-- submenus -->
								<li><a href="tables-bootstrap.html">Bootstrap Tables</a></li>
								<li><a href="tables-jqgrid.html">jQuery Grid</a></li>
								<li><a href="tables-footable.html">jQuery Footable</a></li>
								<li>
									<a href="#">
										<i class="fa fa-menu-arrow pull-right"></i>
										Datatables
									</a>
									<ul>
										<li><a href="tables-datatable-managed.html">Managed Datatables</a></li>
										<li><a href="tables-datatable-editable.html">Editable Datatables</a></li>
										<li><a href="tables-datatable-advanced.html">Advanced Datatables</a></li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-menu-arrow pull-right"></i>
								<i class="main-icon fa fa-pencil-square-o"></i> <span>Forms</span>
							</a>
							<ul><!-- submenus -->
								<li><a href="form-elements.html">Smarty Elements</a></li>
								<li><a href="form-masked-inputs.html">Masked Inputs</a></li>
								<li><a href="form-pickers.html">Pickers</a></li>
								<li><a href="form-ui-sliders.html">UI Sliders</a></li>
								<li><a href="form-validation.html">Validation Form</a></li>
								<li><a href="form-html-editors.html">Html Editors</a></li>
								<li><a href="form-autosuggest.html">Autosuggest</a></li>
								<li><a href="form-x-editable.html">Form X-Editable</a></li>
								<li><a href="form-dropzone.html">Dropzone File Upload</a></li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-menu-arrow pull-right"></i>
								<i class="main-icon fa fa-gears"></i> <span>UI Features</span>
							</a>
							<ul><!-- submenus -->
								<li><a href="ui-portlets.html">Portlets</a></li>
								<li><a href="ui-buttons.html">Buttons</a></li>
								<li>
									<a href="#">
										<i class="fa fa-menu-arrow pull-right"></i>
										Icons
									</a>
									<ul>
										<li><a href="ui-icons-fontawsome.html">Fontawsome</a></li>
										<li><a href="ui-icons-etline.html">Et-Line Icons</a></li>
										<li><a href="ui-icons-glyphicons.html">Glyph Icons</a></li>
										<li><a href="ui-icons-flags.html">Flags</a></li>
									</ul>
								</li>
								<li><a href="ui-alerts-dialogs.html">Alerts &amp; Dialogs</a></li>
								<li><a href="ui-tabs-acordion-navs.html">Tabs, Acordion &amp; Navs</a></li>
								<li><a href="ui-knob.html">Knob Circles</a></li>
								<li><a href="ui-nestable.html">Nestable List</a></li>
								<li><a href="ui-toastr.html">Toastr Notifications</a></li>
								<li><a href="ui-modals.html">Modals</a></li>
								<li><a href="ui-grid.html">Grid</a></li>
								<li><a href="ui-google-maps.html">Google Maps</a></li>
								<li><a href="ui-vector-maps.html">Vector Maps</a></li>
								<li><a href="ui-essentials.html">Essentials</a></li>
								<li>
									<a href="#">
										<i class="fa fa-menu-arrow pull-right"></i>
										<i class="fa fa-folder-open"></i>
										Deep Navigation
									</a>
									<!-- 3rd Level -->
									<ul>
										<li>
											<a href="#">
												3rd Level
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fa fa-menu-arrow pull-right"></i>
												<i class="fa fa-folder-open"></i>
												4rd Level
											</a>
											<!-- 4th Level -->
											<ul>
												<li>
													<a href="#">
														4th Level
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-menu-arrow pull-right"></i>
														<i class="fa fa-folder-open"></i>
														5th Level
													</a>
													<!-- 5th Level -->
													<ul>
														<li>
															<a href="#">
																5th level
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-menu-arrow pull-right"></i>
																<i class="fa fa-folder-open"></i>
																6th level
															</a>
															<!-- 6th Level -->
															<ul>
																<li>
																	<a href="#">
																		6th level
																	</a>
																</li>
																<li>
																	<a href="#">
																		6th level
																	</a>
																</li>
															</ul><!-- /6th Level -->
														</li>
													</ul><!-- /5th Level -->
												</li>
											</ul><!-- /4th Level -->
										</li>
									</ul><!-- /3rd Level -->
								</li>
							</ul>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-menu-arrow pull-right"></i>
								<i class="main-icon fa fa-book"></i> <span>Pages</span>
							</a>
							<ul><!-- submenus -->
								<li><a href="page-invoice.html">Invoice</a></li>
								<li><a href="page-login.html">Login</a></li>
								<li><a href="page-register.html">Register</a></li>
								<li><a href="page-lock.html">Lock Screen</a></li>
								<li><a href="page-forum.html">Forum</a></li>
								<li><a href="page-404.html">Error 404</a></li>
								<li><a href="page-500.html">Error 500</a></li>
								<li><a href="page-pricing.html">Pricing Table</a></li>
								<li><a href="page-search.html">Search Result</a></li>
								<li><a href="page-sidebar.html">Sidebar Page</a></li>
								<li><a href="page-user-profile.html">User Profile</a></li>
								<li><a href="page-blank-1.html">Blank Page</a></li>
							</ul>
						</li>
					</ul>

					<!-- SECOND MAIN LIST -->
					<h3>MORE</h3>
					<ul class="nav nav-list">
						<li>
							<a href="calendar.html">
								<i class="main-icon fa fa-calendar"></i>
								<span class="label label-warning pull-right">2</span> <span>Calendar</span>
							</a>
						</li>
						<li>
							<a href="../../HTML/start.html">
								<i class="main-icon fa fa-link"></i>
								<span class="label label-danger pull-right">PRO</span> <span>Frontend</span>
							</a>
						</li>
					</ul>

				</nav>

				<span id="asidebg"><!-- aside fixed background --></span>
			</aside>
			<!-- /ASIDE -->


			<!-- HEADER -->
			<header id="header">

				<!-- Mobile Button -->
				<button id="mobileMenuBtn"></button>

				<!-- Logo -->
				<span class="logo pull-left">
					<img src="assets/images/logo_light.png" alt="admin panel" height="35" />
				</span>

				<form method="get" action="page-search.html" class="search pull-left hidden-xs">
					<input type="text" class="form-control" name="k" placeholder="Search for something..." />
				</form>

				<nav>

					<!-- OPTIONS LIST -->
					<ul class="nav pull-right">

						<!-- USER OPTIONS -->
						<li class="dropdown pull-left">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
								<img class="user-avatar" alt="" src="assets/images/noavatar.jpg" height="34" /> 
								<span class="user-name">
									<span class="hidden-xs">
										John Doe <i class="fa fa-angle-down"></i>
									</span>
								</span>
							</a>
							<ul class="dropdown-menu hold-on-click">
								<li><!-- my calendar -->
									<a href="calendar.html"><i class="fa fa-calendar"></i> Calendar</a>
								</li>
								<li><!-- my inbox -->
									<a href="#"><i class="fa fa-envelope"></i> Inbox
										<span class="pull-right label label-default">0</span>
									</a>
								</li>
								<li><!-- settings -->
									<a href="page-user-profile.html"><i class="fa fa-cogs"></i> Settings</a>
								</li>

								<li class="divider"></li>

								<li><!-- lockscreen -->
									<a href="page-lock.html"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li><!-- logout -->
									<a href="page-login.html"><i class="fa fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
						<!-- /USER OPTIONS -->

					</ul>
					<!-- /OPTIONS LIST -->

				</nav>

			</header>
			<!-- /HEADER -->


			<!-- 
				MIDDLE 
			-->
			<section id="middle">
				<div id="content" class="dashboard padding-20">

					<!-- 
						PANEL CLASSES:
							panel-default
							panel-danger
							panel-warning
							panel-info
							panel-success

						INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
								All pannels should have an unique ID or the panel collapse status will not be stored!
					-->
					<div id="panel-1" class="panel panel-default">
						<div class="panel-heading">
							<span class="title elipsis">
								<strong>SALES SUMMARY</strong> <!-- panel title -->
								<small class="size-12 weight-300 text-mutted hidden-xs">2015</small>
							</span>

							<!-- right options -->
							<ul class="options pull-right list-inline">
								<li><a href="#" class="opt panel_colapse" data-toggle="tooltip" title="Colapse" data-placement="bottom"></a></li>
								<li><a href="#" class="opt panel_fullscreen hidden-xs" data-toggle="tooltip" title="Fullscreen" data-placement="bottom"><i class="fa fa-expand"></i></a></li>
							</ul>
							<!-- /right options -->

						</div>

						<!-- panel content -->
						<div class="panel-body">

							<div id="flot-sales" class="fullwidth height-250"></div>

						</div>
						<!-- /panel content -->

						<!-- panel footer -->
						<div class="panel-footer">

							<!-- 
								.md-4 is used for a responsive purpose only on col-md-4 column.
								remove .md-4 if you use on a larger column
							-->
							<ul class="easypiecharts list-unstyled">
								<li class="clearfix">
									<span class="stat-number">18.125</span>
									<span class="stat-title">New Customers</span>

									<span class="easyPieChart" data-percent="86" data-easing="easeOutBounce" data-barColor="#F8CB00" data-trackColor="#dddddd" data-scaleColor="#dddddd" data-size="60" data-lineWidth="4">
										<span class="percent"></span>
									</span> 
								</li>
								<li class="clearfix">
									<span class="stat-number">60%</span>
									<span class="stat-title">Returning Customers</span>

									<span class="easyPieChart" data-percent="59.83" data-easing="easeOutBounce" data-barColor="#F86C6B" data-trackColor="#dddddd" data-scaleColor="#dddddd" data-size="60" data-lineWidth="4">
										<span class="percent"></span>
									</span> 
								</li>
								<li class="clearfix">
									<span class="stat-number">12%</span>
									<span class="stat-title">Canceled Orders</span>

									<span class="easyPieChart" data-percent="12" data-easing="easeOutBounce" data-barColor="#98AD4E" data-trackColor="#dddddd" data-scaleColor="#dddddd" data-size="60" data-lineWidth="4">
										<span class="percent"></span>
									</span> 
								</li>
								<li class="clearfix">
									<span class="stat-number">97%</span>
									<span class="stat-title">Positive Feedbacks</span>

									<span class="easyPieChart" data-percent="97" data-easing="easeOutBounce" data-barColor="#0058AA" data-trackColor="#dddddd" data-scaleColor="#dddddd" data-size="60" data-lineWidth="4">
										<span class="percent"></span>
									</span> 
								</li>
							</ul>

						</div>
						<!-- /panel footer -->

					</div>
					<!-- /PANEL -->



					<!-- BOXES -->
					<div class="row">

						<!-- Feedback Box -->
						<div class="col-md-3 col-sm-6">

							<!-- BOX -->
							<div class="box danger"><!-- default, danger, warning, info, success -->

								<div class="box-title"><!-- add .noborder class if box-body is removed -->
									<h4><a href="#">9866 Feedbacks</a></h4>
									<small class="block">654 New fedbacks today</small>
									<i class="fa fa-comments"></i>
								</div>

								<div class="box-body text-center">
									<span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
										331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
									</span>
								</div>

							</div>
							<!-- /BOX -->

						</div>

						<!-- Profit Box -->
						<div class="col-md-3 col-sm-6">

							<!-- BOX -->
							<div class="box warning"><!-- default, danger, warning, info, success -->

								<div class="box-title"><!-- add .noborder class if box-body is removed -->
									<h4>$10M Profit</h4>
									<small class="block">1,2 M Profit for this month</small>
									<i class="fa fa-bar-chart-o"></i>
								</div>

								<div class="box-body text-center">
									<span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
										331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
									</span>
								</div>

							</div>
							<!-- /BOX -->

						</div>

						<!-- Orders Box -->
						<div class="col-md-3 col-sm-6">

							<!-- BOX -->
							<div class="box default"><!-- default, danger, warning, info, success -->

								<div class="box-title"><!-- add .noborder class if box-body is removed -->
									<h4>58944 Orders</h4>
									<small class="block">18 New Orders</small>
									<i class="fa fa-shopping-cart"></i>
								</div>

								<div class="box-body text-center">
									<span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
										331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
									</span>
								</div>

							</div>
							<!-- /BOX -->

						</div>

						<!-- Online Box -->
						<div class="col-md-3 col-sm-6">

							<!-- BOX -->
							<div class="box success"><!-- default, danger, warning, info, success -->

								<div class="box-title"><!-- add .noborder class if box-body is removed -->
									<h4>3485 Online</h4>
									<small class="block">78185 Unique visitors today</small>
									<i class="fa fa-globe"></i>
								</div>

								<div class="box-body text-center">
									<span class="sparkline" data-plugin-options='{"type":"bar","barColor":"#ffffff","height":"35px","width":"100%","zeroAxis":"false","barSpacing":"2"}'>
										331,265,456,411,367,319,402,312,300,312,283,384,372,269,402,319,416,355,416,371,423,259,361,312,269,402,327
									</span>
								</div>

							</div>
							<!-- /BOX -->

						</div>

					</div>
					<!-- /BOXES -->



					<div class="row">

						<div class="col-md-6">

							<!-- 
								PANEL CLASSES:
									panel-default
									panel-danger
									panel-warning
									panel-info
									panel-success

								INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
										All pannels should have an unique ID or the panel collapse status will not be stored!
							-->
							<div id="panel-2" class="panel panel-default">
								<div class="panel-heading">
									<span class="title elipsis">
										<strong>OVERVIEW</strong> <!-- panel title -->
									</span>

									<!-- tabs nav -->
									<ul class="nav nav-tabs pull-right">
										<li class="active"><!-- TAB 1 -->
											<a href="#ttab1_nobg" data-toggle="tab">Top Sales</a>
										</li>
										<li class=""><!-- TAB 2 -->
											<a href="#ttab2_nobg" data-toggle="tab">Most Visited</a>
										</li>
									</ul>
									<!-- /tabs nav -->


								</div>

								<!-- panel content -->
								<div class="panel-body">

									<!-- tabs content -->
									<div class="tab-content transparent">

										<div id="ttab1_nobg" class="tab-pane active"><!-- TAB 1 CONTENT -->

											<div class="table-responsive">
												<table class="table table-striped table-hover table-bordered">
													<thead>
														<tr>
															<th>Product Name</th>
															<th>Price</th>
															<th>Sold</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="#">Apple iPhone 5 - 32GB</a></td>
															<td>$612.50</td>
															<td>789</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Allview Ax4 Nano - Cortex A7 Dual-Core 1.30GHz, 7"</a></td>
															<td>$215.50</td>
															<td>3411</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Motorola Droid 4 XT894 - 16GB - Black </a></td>
															<td>$878.50</td>
															<td>784</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Intel Core i5-4460, 3.2GHz</a></td>
															<td>$42.33</td>
															<td>3556</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Samsung Galaxy Note 3 </a></td>
															<td>$655.00</td>
															<td>3987</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">HyperX FURY Blue 8GB, DDR3, 1600MHz</a></td>
															<td>$19.50</td>
															<td>2334</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Gigabyte NVIDIA GeForce GT 730</a></td>
															<td>$122.00</td>
															<td>3499</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
													</tbody>
												</table>

												<a class="size-12" href="#">
													<i class="fa fa-arrow-right text-muted"></i> 
													More Top Sales
												</a>

											</div>

										</div><!-- /TAB 1 CONTENT -->

										<div id="ttab2_nobg" class="tab-pane"><!-- TAB 2 CONTENT -->

											<div class="table-responsive">
												<table class="table table-striped table-hover table-bordered">
													<thead>
														<tr>
															<th>Product Name</th>
															<th>Price</th>
															<th>Sold</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td><a href="#">Motorola Droid 4 XT894 - 16GB - Black </a></td>
															<td>$878.50</td>
															<td>784</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Gigabyte NVIDIA GeForce GT 730</a></td>
															<td>$122.00</td>
															<td>3499</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">HyperX FURY Blue 8GB, DDR3, 1600MHz</a></td>
															<td>$19.50</td>
															<td>2334</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Intel Core i5-4460, 3.2GHz</a></td>
															<td>$42.33</td>
															<td>3556</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Samsung Galaxy Note 3 </a></td>
															<td>$655.00</td>
															<td>3987</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Apple iPhone 5 - 32GB</a></td>
															<td>$612.50</td>
															<td>789</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
														<tr>
															<td><a href="#">Allview Ax4 Nano - Cortex A7 Dual-Core 1.30GHz, 7"</a></td>
															<td>$215.50</td>
															<td>3411</td>
															<td><a href="#" class="btn btn-default btn-xs btn-block">View</a></td>
														</tr>
													</tbody>
												</table>

												<a class="size-12" href="#">
													<i class="fa fa-arrow-right text-muted"></i> 
													More Most Visited
												</a>

											</div>

										</div><!-- /TAB 1 CONTENT -->

									</div>
									<!-- /tabs content -->

								</div>
								<!-- /panel content -->

							</div>
							<!-- /PANEL -->
					
						</div>

						<div class="col-md-6">

							<!-- 
								PANEL CLASSES:
									panel-default
									panel-danger
									panel-warning
									panel-info
									panel-success

								INFO: 	panel collapse - stored on user localStorage (handled by app.js _panels() function).
										All pannels should have an unique ID or the panel collapse status will not be stored!
							-->
							<div id="panel-3" class="panel panel-default">
								<div class="panel-heading">
									<span class="title elipsis">
										<strong>RECENT ACTIVITIES</strong> <!-- panel title -->
									</span>
								</div>

								<!-- panel content -->
								<div class="panel-body">

									<ul class="list-unstyled list-hover slimscroll height-300" data-slimscroll-visible="true">
										
										<li>
											<span class="label label-danger"><i class="fa fa-bell-o size-15"></i></span>
											Urgent task: add new theme to fastAdmin
										</li>

										<li>
											<span class="label label-success"><i class="fa fa-user size-15"></i></span>
											<a href="#">5 pending memership</a>
										</li>

										<li>
											<span class="label label-warning"><i class="fa fa-comment size-15"></i></span>
											<a href="#">24 New comments that needs your approval</a>
										</li>

										<li>
											<span class="label label-default"><i class="fa fa-briefcase size-15"></i></span>
											No work for tomorrow &ndash; everyone is free! 
										</li>

										<li>
											<span class="label label-info"><i class="fa fa-shopping-cart size-15"></i></span>
											You have new 3 orders unprocessed
										</li>

										<li>
											<span class="label label-success"><i class="fa fa-bar-chart-o size-15"></i></span>
											Generate the finance report for the previous year
										</li>

										<li>
											<span class="label label-success bg-black"><i class="fa fa-cogs size-15"></i></span>
											CentOS server need a kernel update
										</li>

										<li>
											<span class="label label-warning"><i class="fa fa-file-excel-o size-15"></i></span>
											<a href="#">XCel finance report for 2014 released</a>
										</li>

										<li>
											<span class="label label-danger"><i class="fa fa-bell-o size-15"></i></span>
											Power grid is off. Moving to solar backup.
										</li>

										<li>
											<span class="label label-warning"><i class="fa fa-comment size-15"></i></span>
											<a href="#">24 New comments that need your approval</a>
										</li>

										<li>
											<span class="label label-default"><i class="fa fa-briefcase size-15"></i></span>
											No work for tomorrow &ndash; everyone is free! 
										</li>

										<li>
											<span class="label label-info"><i class="fa fa-shopping-cart size-15"></i></span>
											You have new 3 orders unprocessed
										</li>

										<li>
											<span class="label label-success"><i class="fa fa-bar-chart-o size-15"></i></span>
											Generate the finance report for the previous year
										</li>

										<li>
											<span class="label label-success bg-black"><i class="fa fa-cogs size-15"></i></span>
											CentOS server need a kernel update
										</li>

										<li>
											<span class="label label-warning"><i class="fa fa-file-excel-o size-15"></i></span>
											<a href="#">XCel finance report for 2014 released</a>
										</li>

										<li>
											<span class="label label-danger"><i class="fa fa-bell-o size-15"></i></span>
											Power grid is off. Moving to solar backup.
										</li>
									</ul>

								</div>
								<!-- /panel content -->

								<!-- panel footer -->
								<div class="panel-footer">

									<a href="#"><i class="fa fa-arrow-right text-muted"></i> View Activities Archive</a>

								</div>
								<!-- /panel footer -->

							</div>
							<!-- /PANEL -->

						</div>

					</div>

				</div>
			</section>
			<!-- /MIDDLE -->

		</div>



	
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = 'assets/plugins/';</script>
		<script type="text/javascript" src="{{ asset('assets/plugins/jquery/jquery-2.1.4.min.js') }} "></script>
		<script type="text/javascript" src="{{ asset('assets/js/app.js') }} "></script>
		
		<!-- PAGE LEVEL SCRIPT -->
		<script type="text/javascript">
			/* 
				Toastr Notification On Load 

				TYPE:
					primary
					info
					error
					success
					warning

				POSITION
					top-right
					top-left
					top-center
					top-full-width
					bottom-right
					bottom-left
					bottom-center
					bottom-full-width
					
				false = click link (example: "http://www.stepofweb.com")
			*/
			_toastr("Welcome, you have 2 new orders","top-right","success",false);




			/** SALES CHART
			******************************************* **/
			loadScript(plugin_path + "chart.flot/jquery.flot.min.js", function(){
				loadScript(plugin_path + "chart.flot/jquery.flot.resize.min.js", function(){
					loadScript(plugin_path + "chart.flot/jquery.flot.time.min.js", function(){
						loadScript(plugin_path + "chart.flot/jquery.flot.fillbetween.min.js", function(){
							loadScript(plugin_path + "chart.flot/jquery.flot.orderBars.min.js", function(){
								loadScript(plugin_path + "chart.flot/jquery.flot.pie.min.js", function(){
									loadScript(plugin_path + "chart.flot/jquery.flot.tooltip.min.js", function(){

										if (jQuery("#flot-sales").length > 0) {

											/* DEFAULTS FLOT COLORS */
											var $color_border_color = "#eaeaea",		/* light gray 	*/
												$color_second 		= "#6595b4";		/* blue      	*/


											var d = [
												[1196463600000, 0], [1196550000000, 0], [1196636400000, 0], [1196722800000, 77], [1196809200000, 3636], [1196895600000, 3575], [1196982000000, 2736], [1197068400000, 1086], [1197154800000, 676], [1197241200000, 1205], [1197327600000, 906], [1197414000000, 710], [1197500400000, 639], [1197586800000, 540], [1197673200000, 435], [1197759600000, 301], [1197846000000, 575], [1197932400000, 481], [1198018800000, 591], [1198105200000, 608], [1198191600000, 459], [1198278000000, 234], [1198364400000, 4568], [1198450800000, 686], [1198537200000, 4122], [1198623600000, 449], [1198710000000, 468], [1198796400000, 392], [1198882800000, 282], [1198969200000, 208], [1199055600000, 229], [1199142000000, 177], [1199228400000, 374], [1199314800000, 436], [1199401200000, 404], [1199487600000, 544], [1199574000000, 500], [1199660400000, 476], [1199746800000, 462], [1199833200000, 500], [1199919600000, 700], [1200006000000, 750], [1200092400000, 600], [1200178800000, 500], [1200265200000, 900], [1200351600000, 930], [1200438000000, 1200], [1200524400000, 980], [1200610800000, 950], [1200697200000, 900], [1200783600000, 1000], [1200870000000, 1050], [1200956400000, 1150], [1201042800000, 1100], [1201129200000, 1200], [1201215600000, 1300], [1201302000000, 1700], [1201388400000, 1450], [1201474800000, 1500], [1201561200000, 1510], [1201647600000, 1510], [1201734000000, 1510], [1201820400000, 1700], [1201906800000, 1800], [1201993200000, 1900], [1202079600000, 2000], [1202166000000, 2100], [1202252400000, 2200], [1202338800000, 2300], [1202425200000, 2400], [1202511600000, 2550], [1202598000000, 2600], [1202684400000, 2500], [1202770800000, 2700], [1202857200000, 2750], [1202943600000, 2800], [1203030000000, 3245], [1203116400000, 3345], [1203202800000, 3000], [1203289200000, 3200], [1203375600000, 3300], [1203462000000, 3400], [1203548400000, 3600], [1203634800000, 3700], [1203721200000, 3800], [1203807600000, 4000], [1203894000000, 4500]];
										
											for (var i = 0; i < d.length; ++i) {
												d[i][0] += 60 * 60 * 1000;
											}
										
											var options = {

												xaxis : {
													mode : "time",
													tickLength : 5
												},

												series : {
													lines : {
														show : true,
														lineWidth : 1,
														fill : true,
														fillColor : {
															colors : [{
																opacity : 0.1
															}, {
																opacity : 0.15
															}]
														}
													},
												   //points: { show: true },
													shadowSize : 0
												},

												selection : {
													mode : "x"
												},

												grid : {
													hoverable : true,
													clickable : true,
													tickColor : $color_border_color,
													borderWidth : 0,
													borderColor : $color_border_color,
												},

												tooltip : true,

												tooltipOpts : {
													content : "Sales: %x <span class='block'>$%y</span>",
													dateFormat : "%y-%0m-%0d",
													defaultTheme : false
												},

												colors : [$color_second],
										
											};
										
											var plot = jQuery.plot(jQuery("#flot-sales"), [d], options);
										}

									});
								});
							});
						});
					});
				});
			});
			</script>

		<!-- STYLESWITCHER - REMOVE -->
		<script async type="text/javascript" src="assets/plugins/styleswitcher/styleswitcher.js"></script>
	</body>
</html>