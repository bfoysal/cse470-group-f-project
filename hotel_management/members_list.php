<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>Hotel De La Pacific</title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		<link href="assets/plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
		<link href="assets/plugins/prettify/prettify.min.css" rel="stylesheet">
		<link href="assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
		<link href="assets/plugins/chosen/chosen.min.css" rel="stylesheet">
		<link href="assets/plugins/icheck/skins/all.css" rel="stylesheet">
		<link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
		<link href="assets/plugins/summernote/summernote.min.css" rel="stylesheet">
		<link href="assets/plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/bootstrap.datatable.min.css" rel="stylesheet">
		<link href="assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
		<link href="assets/plugins/c3-chart/c3.min.css" rel="stylesheet">
		<link href="assets/plugins/slider/slider.min.css" rel="stylesheet">
		
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
 
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 
	<body class="tooltips">
	<?PHP
	session_start();
	if(!isset($_SESSION["session_hotel_emp"])){
		header("location: login.html");
	}
	?>		
		<!-- BEGIN PANEL DEMO -->
		<div class="box-demo">
			<div class="inner-panel">
				<div class="cog-panel" id="demo-panel"><i class="fa fa-cog fa-spin"></i></div>
				<p class="text-muted small text-center">COLOR SCHEMES</p>
				<div class="row text-center">
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Default" id="color-reset">
							<div class="half-tiles bg-dark"></div>
							<div class="half-tiles bg-dark"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Light" id="change-color-light">
							<div class="half-tiles bg-white"></div>
							<div class="half-tiles bg-white"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Primary dark" id="change-primary-dark">
							<div class="half-tiles bg-primary"></div>
							<div class="half-tiles bg-dark"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Info dark" id="change-info-dark">
							<div class="half-tiles bg-info"></div>
							<div class="half-tiles bg-dark"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Success dark" id="change-success-dark">
							<div class="half-tiles bg-success"></div>
							<div class="half-tiles bg-dark"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Danger dark" id="change-danger-dark">
							<div class="half-tiles bg-danger"></div>
							<div class="half-tiles bg-dark"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Warning dark" id="change-warning-dark">
							<div class="half-tiles bg-warning"></div>
							<div class="half-tiles bg-dark"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Primary light" id="change-primary-light">
							<div class="half-tiles bg-primary"></div>
							<div class="half-tiles bg-white"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Info light" id="change-info-light">
							<div class="half-tiles bg-info"></div>
							<div class="half-tiles bg-white"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Success light" id="change-success-light">
							<div class="half-tiles bg-success"></div>
							<div class="half-tiles bg-white"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Danger light" id="change-danger-light">
							<div class="half-tiles bg-danger"></div>
							<div class="half-tiles bg-white"></div>
						</div>
					</div>
					<div class="col-xs-3">
						<div class="xs-tiles" data-toggle="tooltip" title="Warning light" id="change-warning-light">
							<div class="half-tiles bg-warning"></div>
							<div class="half-tiles bg-white"></div>
						</div>
					</div>
				</div>
				<button class="btn btn-block btn-primary btn-sm" id="btn-reset">Reset to default</button>
			</div>
		</div>
		<!-- END PANEL DEMO -->
	
		
		
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href="index.php"><img src="assets/img/ourlogo.png" alt="hotel de la pacific"></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content">
						
						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-sidebar-left">
							<i class="fa fa-long-arrow-right icon-dinamic"></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->
						
						<!-- Begin button nav toggle -->
						<div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
							<i class="fa fa-plus icon-plus"></i>
						</div><!-- /.btn-collapse-sidebar-right -->
						<!-- End button nav toggle -->
						
						
						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right">
							<li class="dropdown">
							  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="assets/img/avatar/<?PHP echo $_SESSION['session_emp_pic']; ?>" class="avatar img-circle" alt="Avatar">
								Hi, <strong><?PHP echo $_SESSION['session_emp_lname']; ?> </strong>
							  </a>
							  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
								<li><a href="#fakelink">Account setting</a></li>
								<li><a href="upload_pic.html">Change Picture</a></li>
								<li class="divider"></li>
								<li><a href="lock-screen.html">Lock screen</a></li>
								<li><a href="logout.php">Log out</a></li>
							  </ul>
							</li>
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class="collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
							</form>
							<!-- End nav search form -->
							<ul class="nav navbar-nav navbar-left">
								<!-- Begin nav notification -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
										<span class="badge badge-danger icon-count">7</span>
										<i class="fa fa-bell"></i>
									</a>
									<ul class="dropdown-menu square with-triangle">
										<li>
											<div class="nav-dropdown-heading">
											Notifications
											</div><!-- /.nav-dropdown-heading -->
											<div class="nav-dropdown-content scroll-nav-dropdown">
												<ul>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar-2.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Thomas White</strong> posted on your profile page
														<span class="small-caps">17 seconds ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar-3.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Doina Slaivici</strong> uploaded photo
														<span class="small-caps">10 minutes ago</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar-4.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Harry Nichols</strong> commented on your post
														<span class="small-caps">40 minutes ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar-5.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Mihaela Cihac</strong> send you a message
														<span class="small-caps">2 hours ago</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar-6.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Harold Chavez</strong> change his avatar
														<span class="small-caps">Yesterday</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar-7.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Elizabeth Owens</strong> posted on your profile page
														<span class="small-caps">Yesterday</span>
													</a></li>
													<li class="unread"><a href="#fakelink">
														<img src="assets/img/avatar/avatar-8.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Frank Oliver</strong> commented on your post
														<span class="small-caps">A week ago</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar-9.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Mya Weastell</strong> send you a message
														<span class="small-caps">April 15, 2014</span>
													</a></li>
													<li><a href="#fakelink">
														<img src="assets/img/avatar/avatar-10.jpg" class="absolute-left-content img-circle" alt="Avatar">
														<strong>Carl Rodriguez</strong> joined your weekend party
														<span class="small-caps">April 01, 2014</span>
													</a></li>
												</ul>
											</div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
											<button class="btn btn-primary btn-square btn-block">See all notifications</button>
										</li>
									</ul>
								</li>
								<!-- End nav notification -->								
							</ul>
						</div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			<div class="sidebar-left sidebar-nicescroller">
				<ul class="sidebar-menu">
					<li><a href="index.php"><i class="fa fa-dashboard icon-sidebar"></i>Dashboard</a></li>								
					<li>
						<a href="#fakelink">
							<i class="fa fa-folder icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Forms
							<span class="label label-info span-sidebar">2</span>
							</a>
						<ul class="submenu">						
							<li><a href="add_customer.php">Customer Form </a></li>							
							<li><a href="add_employee.php">Employee Form</a></li>						
						</ul>
					</li>
					
					<li>
						<a href="#fakelink">
							<i class="fa fa-table icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							List
						</a>
						<ul class="submenu">
							<li><a href="members_list.php">Members List <span class="label label-success span-sidebar">CURRENT</span></a></li>
							<li><a href="customer_list.php">Customers List</a></li>							
						</ul>
					</li>
					
					<li class="static">Settings & Others </li>
					
					<li>
						<a href="#fakelink">
							<i class="fa fa-heart icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Expand
						</a>
						<ul class="submenu">
							
							<li><a href="forgot-password.html">Forgot password</a></li>
							<li><a href="register.html">Register</a></li>
							<li><a href="example-pricing-table.html">Pricing table</a></li>
							<li><a href="example-invoice.html">Invoice</a></li>
							<li><a href="example-faq.html">FAQ</a></li>
						</ul>
					</li>
					
				</ul>
			</div><!-- /.sidebar-left -->
			<!-- END SIDEBAR LEFT -->

		<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				
				
				<div class="container-fluid">
					<!-- Begin page heading -->
					<h1 class="page-heading">Employee List <small>Show all employee</small></h1>
					<!-- End page heading -->
				
					<!-- Begin breadcrumb -->
					<ol class="breadcrumb default square rsaquo sm">
						<li><a href="index.php"><i class="fa fa-home"></i></a></li>
						<li><a href="index.php">Hotel</a></li>
						<li class="active">Employee</li>
					</ol>
					<!-- End breadcrumb -->

					<!-- Begin table hover -->
					<div class="the-box no-border">
					<h4 class="small-title">Employee Details</h4>
						<div class="table-responsive">
							<table class="table table-th-block table-hover">
								<thead>
									<tr><th style="width: 30px;">No</th><th>Full name</th><th>Location</th><th>Date of birth</th><th>Gender</th></tr>
								</thead>
								<tbody>
									<tr><td>1</td><td>Paris Hawker</td><td>Yogyakarta, Indonesia</td><td>August 17, 1990</td><td><span class="label label-danger">Female</span></td></tr>
									<tr><td>2</td><td>Thomas White</td><td>Bndung, Indonesia</td><td>Jan 01, 1987</td><td><span class="label label-success">Male</span></td></tr>
									<tr><td>3</td><td>Doina Slaivici</td><td>Lombok, Indonesia</td><td>Dec 31, 1993</td><td><span class="label label-danger">Female</span></td></tr>
									<tr><td>4</td><td>Mihaela Cihac</td><td>Sydney, Australia</td><td>Jun 05, 1992</td><td><span class="label label-danger">Female</span></td></tr>
									<tr><td>5</td><td>Harold Chavez</td><td>London, United Kingdom</td><td>Mar 10, 1985</td><td><span class="label label-success">Male</span></td></tr>
									<tr><td>6</td><td>Elizabeth Owens</td><td>New York, US</td><td>Jul 01, 1989</td><td><span class="label label-danger">Female</span></td></tr>
									<tr><td>7</td><td>Frank Oliver</td><td>Pattaya, Thailand</td><td>Nov 21, 1991</td><td><span class="label label-success">Male</span></td></tr>
									<tr><td>8</td><td>Mya Weastell</td><td>Boyolali, Indonesia</td><td>Sep 14, 1990</td><td><span class="label label-danger">Female</span></td></tr>
									<tr><td>9</td><td>Harry Nichols</td><td>Berlin, Germany</td><td>Apr 21, 1987</td><td><span class="label label-success">Male</span></td></tr>
									<tr><td>10</td><td>Carl Rodriguez</td><td>Melbourne, Australia</td><td>Oct 11, 1988</td><td><span class="label label-success">Male</span></td></tr>
								</tbody>
							</table>
						</div><!-- /.table-responsive -->
					</div><!-- /.the-box -->
					<!-- End table hover -->	
				</div><!-- /.container-fluid -->
				<!-- BEGIN FOOTER -->
				<footer>
					&copy; 2014 <a href="#">Hotel De La Pacific</a><br />
					Developed by <a href="#">Foysal and Farhan</a>.
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		
		
		
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/retina/retina.min.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
 
		<!-- PLUGINS -->
		<script src="assets/plugins/skycons/skycons.js"></script>
		<script src="assets/plugins/prettify/prettify.js"></script>
		<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
		<script src="assets/plugins/icheck/icheck.min.js"></script>
		<script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
		<script src="assets/plugins/mask/jquery.mask.min.js"></script>
		<script src="assets/plugins/validator/bootstrapValidator.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/bootstrap.datatable.js"></script>
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		<script src="assets/plugins/markdown/markdown.js"></script>
		<script src="assets/plugins/markdown/to-markdown.js"></script>
		<script src="assets/plugins/markdown/bootstrap-markdown.js"></script>
		<script src="assets/plugins/slider/bootstrap-slider.js"></script>
		
		<!-- EASY PIE CHART JS -->
		<script src="assets/plugins/easypie-chart/easypiechart.min.js"></script>
		<script src="assets/plugins/easypie-chart/jquery.easypiechart.min.js"></script>
		
		<!-- KNOB JS -->
		<!--[if IE]>
		<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
		<![endif]-->
		<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="assets/plugins/jquery-knob/knob.js"></script>

		<!-- FLOT CHART JS -->
		<script src="assets/plugins/flot-chart/jquery.flot.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.tooltip.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>

		<!-- MORRIS JS -->
		<script src="assets/plugins/morris-chart/raphael.min.js"></script>
		<script src="assets/plugins/morris-chart/morris.min.js"></script>
		
		<!-- C3 JS -->
		<script src="assets/plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
		<script src="assets/plugins/c3-chart/c3.min.js"></script>
		
		<!-- MAIN APPS JS -->
		<script src="assets/js/apps.js"></script>
		
	</body>
</html>