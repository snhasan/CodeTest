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
						<li><!-- dashboard -->
							<a class="dashboard" href="{{route("home")}}"><!-- warning - url used by default by ajax (if eneabled) -->
								<i class="main-icon fa fa-dashboard"></i> <span>Dashboard</span>
							</a>
						</li>
						<li id="inventory">
							<a href="#">
								<i class="fa fa-menu-arrow pull-right"></i>
								<i class="main-icon fa fa-bar-chart-o"></i> <span>Graphs</span>
							</a>
							<ul><!-- submenus -->
								<li id="index"><a href="{{ route("index") }}">Index</a></li>
								<li id="create"><a href="{{ route("create") }}">Create</a></li>
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
				
					</ul>

				</nav>

				<span id="asidebg"><!-- aside fixed background --></span>
			</aside>

			<script>
				
				$(document).ready(function() {
				      $(".nav a").on("click", function(){
				      $(".nav").find(".active").removeClass("active");
				      $(this).parent().addClass("active");
				   });
				});
			</script>