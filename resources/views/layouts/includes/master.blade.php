<!doctype html>
<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>@yield('title')</title>
		<meta name="description" content="" />
		<meta name="Author" content="Ontik Technology [www.ontiktechnology.com]" />

		<!-- mobile settings -->
		<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
	
		<!-- Icon -->
		<link rel="icon" href="{{ url('favicon.png') }}">

		<!-- CORE CSS -->
		<link type="text/css" rel="stylesheet" href="{{url('admin/assets/plugins/bootstrap/css/bootstrap.min.css')}}"   />
		
		<!-- THEME CSS -->
		<link href="{{url('admin/assets/css/essentials.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('admin/assets/css/layout.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('admin/assets/css/color_scheme/green.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />

		<!-- Custom -->
		<link href="{{url('admin/assets/css/custom.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{url('admin/assets/css/layout-datatables.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('admin/assets/plugins/dropify/dropify.min.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{url('admin/assets/plugins/sweetalert2/dist/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
		<script src="{{url('admin/assets/editor/ckeditor.js')}}"></script>
        <script src="{{url('admin/assets/editor/fonts.css')}}"></script>

        <!-- WEB FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" rel="stylesheet" type="text/css" />

        @yield('styles')


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
			@include('layouts.includes.sidebar')
			<!-- /ASIDE -->


			<!-- HEADER -->
			<header id="header">

				<!-- Mobile Button -->
				<button id="mobileMenuBtn"></button>

				<!-- Logo -->
				<span class="logo pull-left">
					<img src="{{url('admin/assets/images/logo_light.png')}}" alt="admin panel" height="35" />
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
								<img class="user-avatar" alt="" src="{{url('admin/assets/images/noavatar.jpg')}}" height="34" /> 
								<span class="user-name">
									<span class="hidden-xs">
										{{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
									</span>
								</span>
							</a>
							<ul class="dropdown-menu hold-on-click">
								
								<li id="change_password"><!-- settings -->
									<a href="{{ route('change_password_index') }}"><i class="fa fa-cogs"></i> Change Password</a>
								</li>

								<li><!-- logout -->
									<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                    </form>
								</li>
							</ul>
						</li>
						<!-- /USER OPTIONS -->

					</ul>
					<!-- /OPTIONS LIST -->

				</nav>

			</header>
			<!-- /HEADER -->

			@yield('content')

			
		</div>
	
		<!-- JAVASCRIPT FILES -->
		<script type="text/javascript">var plugin_path = '/admin/assets/plugins/';</script>
		<script type="text/javascript" src="{{url('admin/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
		<script type="text/javascript" src="{{url('admin/assets/js/app.js')}}"></script>
		<script type="text/javascript" src="{{url('admin/assets/plugins/dropify/dropify.min.js')}}"></script>
		<script type="text/javascript" src="{{url('admin/assets/plugins/sweetalert2/dist/sweetalert2.min.js')}}"></script>
		
		@yield('scripts')

		<script type="text/javascript">
			
			function deleteItem(link){
			
				swal({
				  title: 'Are you sure?',
				  text: "You won't be able to revert this!",
				  type: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: 'Yes, delete it!'
				}).then(function () {
				  window.location.href = link;
				  return true;
				}, function (dismiss) {
				  if (dismiss === 'cancel') {
				    swal(
				      'Cancelled',
				      'Your imaginary file is safe',
				      'error'
				    )
				  }
				})
				
			}
		</script>

		@if(Session::has('swt_msg'))
			<script type="text/javascript">
			$(document).ready(function(){
			        swal("Congratulations!", "Successfully Deleted!", "success");
			});  
			</script>
		@endif

		@if(Session::has('swt_fail_msg'))
			<script type="text/javascript">
			$(document).ready(function(){  
			    swal("Failed!", "Deleted!", "warning");   
			});  
			</script>
		@endif

		<script type="text/javascript">
			loadScript("{{ asset('admin/assets/plugins/datatables/js/jquery.dataTables.min.js') }}", function(){
				loadScript("{{ asset('admin/assets/plugins/datatables/dataTables.bootstrap.js') }}", function(){

					if (jQuery().dataTable) {

						var table = jQuery('#datatable_sample');
						table.dataTable({
							"columns": [{
								"orderable": false
							}, {
								"orderable": true
							}, {
								"orderable": false
							}, {
								"orderable": false
							}, {
								"orderable": true
							}, {
								"orderable": false
							}],
							"lengthMenu": [
								[5, 15, 20, -1],
								[5, 15, 20, "All"] // change per page values here
							],
							// set the initial value
							"pageLength": 5,            
							"pagingType": "bootstrap_full_number",
							"language": {
								"lengthMenu": "  _MENU_ records",
								"paginate": {
									"previous":"Prev",
									"next": "Next",
									"last": "Last",
									"first": "First"
								}
							},
							"columnDefs": [{  // set default column settings
								'orderable': false,
								'targets': [0]
							}, {
								"searchable": false,
								"targets": [0]
							}],
							"order": [
								[1, "asc"]
							] // set first column as a default sort by asc
						});

						var tableWrapper = jQuery('#datatable_sample_wrapper');

						table.find('.group-checkable').change(function () {
							var set = jQuery(this).attr("data-set");
							var checked = jQuery(this).is(":checked");
							jQuery(set).each(function () {
								if (checked) {
									jQuery(this).attr("checked", true);
									jQuery(this).parents('tr').addClass("active");
								} else {
									jQuery(this).attr("checked", false);
									jQuery(this).parents('tr').removeClass("active");
								}
							});
							jQuery.uniform.update(set);
						});

						table.on('change', 'tbody tr .checkboxes', function () {
							jQuery(this).parents('tr').toggleClass("active");
						});

						tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown

					}

				});
			});
		</script>

		
		
		<!-- PAGE LEVEL SCRIPT -->
	

	</body>
</html>