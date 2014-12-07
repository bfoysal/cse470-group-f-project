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
	require_once 'config.php';
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
								<li><a href="edit_employee.php?emp_id=<?PHP echo $_SESSION['session_emp_id']; ?>">Account setting</a></li>
								<li><a href="upload_pic.html">Change Picture</a></li>
								<li class="divider"></li>
								<li><a href="lock-screen.php">Lock screen</a></li>
								<li><a href="logout.php">Log out</a></li>
							  </ul>
							</li>
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class="collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<form class="navbar-form navbar-left" role="search" action="search.php" method="post">
								<div class="form-group">
									<input type="text" name="cust_name" class="form-control" placeholder="Search">
								</div>
							</form>
							<!-- End nav search form -->
							<ul class="nav navbar-nav navbar-left">
								<!-- Begin nav notification -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
										<span class="badge badge-danger icon-count">
										<?PHP										
										$sql="SELECT COUNT(*) FROM notification";
										$result=mysql_query($sql);
										while ($row = mysql_fetch_array($result)) {	
											$num=$row['COUNT(*)'];
											echo $num;
										}									
										?>
										</span>
										<i class="fa fa-bell"></i>
									</a>
									<ul class="dropdown-menu square with-triangle">
										<li>
											<div class="nav-dropdown-heading">
											Notifications
											</div><!-- /.nav-dropdown-heading -->
											<div class="nav-dropdown-content scroll-nav-dropdown">
												<ul>
												<?PHP
												$sql="SELECT * FROM notification INNER JOIN customer ON notification.cust_id = customer.cust_id ORDER BY (not_id) DESC";
												$result=mysql_query($sql);
												while ($row = mysql_fetch_array($result)) {	
													$not_id=$row['not_id'];
													$lname=$row['last_name'];
													$fname=$row['first_name'];
													$descr=$row['descr'];									
													echo'<li class="unread"><a href="access_notification.php?not_id='.$not_id.'">
														<img src="assets/img/not_logo.png" class="absolute-left-content img-circle" alt="Avatar">
														<strong>'.$fname.' '.$lname.'</strong><span class="small-caps">'.$descr.'</span></a></li>';
												}
												?>
												</ul>
											</div><!-- /.nav-dropdown-content scroll-nav-dropdown -->
											<a class="btn btn-primary btn-square btn-block" href="notifications.php">See all notifications</a>
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
						<a href="#">
							<i class="fa fa-table icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							List
							<span class="label label-danger span-sidebar">4</span>
						</a>
						<ul class="submenu">
							<li><a href="members_list.php">Employee List</a></li>
							<li><a href="customer_list.php">Customers List</a></li>
							<li><a href="rooms_list.php">Rooms List</a></li>	
							<li><a href="billing_list.php">Billing List</a></li>							
						</ul>
					</li>			
					<li>
						<a href="#">
							<i class="fa fa-table icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							Customer Services
							<span class="label label-success span-sidebar">2</span>
						</a>
						<ul class="submenu">
							<li><a href="bill_food.php">Food 24/7</a></li>
							<li><a href="bill_services.php">Facilities</a></li>						
						</ul>
					</li>
				</ul>
			</div><!-- /.sidebar-left -->
			<!-- END SIDEBAR LEFT -->

			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
				<div class="container-fluid">
				
				<!-- Begin page heading -->
				<h1 class="page-heading">Hotel de la pacific <small>Hotel Management</small></h1>
				<!-- End page heading -->
				
					<!-- BEGIN EXAMPLE ALERT -->
					<div class="alert alert-warning alert-bold-border fade in alert-dismissable">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  <p><strong>Welcome!</strong></p>
					  <p class="text-muted"> You can do your daily chores here <i class="fa fa-smile-o"></i></p>
					</div>
					<!-- END EXAMPLE ALERT -->
				
					
					<!-- BEGIN SiTE INFORMATIONS -->
					<div class="row">
						<div class="col-sm-3">
							<div class="the-box no-border bg-success tiles-information">
								<i class="fa fa-users icon-bg"></i>
								<div class="tiles-inner text-center">
									<p>TOTAL CUSTOMERS</p>
									<?PHP
										$sql=mysql_query("SELECT COUNT(*) FROM customer");
										$row=mysql_fetch_array($sql);										
										$t_guest=$row['COUNT(*)'];
									?>
									<h1 class="bolded"><?PHP echo $t_guest; ?></h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-success -->
									</div><!-- /.progress .no-rounded -->
									<p><small></small></p>
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-primary tiles-information">
								<i class="fa fa-shopping-cart icon-bg"></i>
								<div class="tiles-inner text-center">
									<?PHP
										$sql=mysql_query("SELECT COUNT(*) FROM customer INNER JOIN rooms ON rooms.cust_id=customer.cust_id WHERE status='Booked'");
										$row=mysql_fetch_array($sql);										
										$t_bookings=$row['COUNT(*)'];
									?>
									<p>TOTAL BOOKINGS</p>
									<h1 class="bolded"><?PHP echo $t_bookings; ?></h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-primary -->
									</div><!-- /.progress .no-rounded -->
									<p><small></small></p>
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-danger tiles-information">
								<i class="fa fa-comments icon-bg"></i>
								<div class="tiles-inner text-center">
									<?PHP
										$sql=mysql_query("SELECT check_out FROM customer INNER JOIN rooms ON rooms.cust_id=customer.cust_id WHERE status='Filled'");										
										$checkouts_today=0;
										while ($row = mysql_fetch_array($sql)) {									
											$check_out=$row['check_out'];
											$date = date("m/d/Y");
											if(round(abs(strtotime($check_out)-strtotime($date))/86400)==0){
												$checkouts_today++;								
											}
										}
									?>
									<p>CHECKOUTS TODAY</p>
									<h1 class="bolded"><?PHP echo $checkouts_today; ?></h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-danger -->
									</div><!-- /.progress .no-rounded -->
									<p><small></small></p>
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
						<div class="col-sm-3">
							<div class="the-box no-border bg-warning tiles-information">
								<i class="fa fa-money icon-bg"></i>
								<div class="tiles-inner text-center">
									<?PHP
										$sql=mysql_query("SELECT * FROM bill");										
										$total_earnings=0;
										while ($row = mysql_fetch_array($sql)) {									
											$total_earnings+=$row['amount'];
										}
									?>
									<p>TOTAL EARNINGS</p>
									<h1 class="bolded"><?PHP echo $total_earnings; ?></h1> 
									<div class="progress no-rounded progress-xs">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									  </div><!-- /.progress-bar .progress-bar-warning -->
									</div><!-- /.progress .no-rounded -->
									<p><small></small></p>
								</div><!-- /.tiles-inner -->
							</div><!-- /.the-box no-border -->
						</div><!-- /.col-sm-3 -->
					</div><!-- /.row -->
					<!-- END SITE INFORMATIONS -->
				
					
					<div class="row">
						<div class="col-lg-8">
							<div class="row">
								<div class="col-sm-6">
									<!-- BEGIN PROPERTY CARD -->
									<div class="panel panel-danger panel-square panel-no-border task-list-wrap">
									  <div class="panel-heading lg text-center">
										<h3 class="panel-title">SPECIAL OFFERS</h3>
									  </div>
										<div class="the-box full no-border property-card">
											<div id="property-slide-8" class="owl-carousel">
											  <div class="item full"><img src="assets/img/photo/small/index01.jpg" alt="Image"></div>
											  <div class="item full"><img src="assets/img/photo/small/index02.jpg" alt="Image"></div>
											  <div class="item full"><img src="assets/img/photo/small/index03.jpg" alt="Image"></div>
											</div>
											<div class="the-box no-margin no-border bg-warning">
											<?PHP
											$sql_pack="SELECT * FROM packages INNER JOIN room_price ON packages.pack_type=room_price.room_type WHERE active='Yes' order by packages.pack_type DESC";
											$result_pack=mysql_query($sql_pack);
									        $row = mysql_fetch_array($result_pack);
											$pack_no=$row['pack_no'];
											$pack_type=$row['pack_type'];
											$price=$row['room_price'];												
											?>	
												<div class="row">
													<div class="col-xs-3">
														<p class="property-type-circle bg-danger">Price </p>
													</div><!-- /.col-xs-3 -->
													<div class="col-xs-9">
														<h1><?PHP echo $price; ?>/day</h1>
														
													</div><!-- /.col-xs-9 -->
												</div><!-- /.row -->
											</div><!-- /.the-box .no-margin .no-border .bg-warning -->
											<div class="the-box no-margin no-border">
												<p class="property-detail-wrap">
													<span class="item-detail"><i class="fa fa-inbox"></i> Sea Facing Balcony</span>
													<span class="item-detail"><i class="fa fa-male"></i> King Size Bed</span>
												</p>
												<p class="has-margin text-center">Package Type: <?PHP echo $pack_type; ?></p>
												<div class="row">
													<div class="panel-footer">
														<a href="show_advertise.php"><button class="btn btn-danger btn-perspective btn-block">Edit Advertisements</button></a>
													</div><!-- /.col-xs-6 -->
												</div><!-- /.row -->
											</div><!-- /.the-box .no-margin .no-border .bg-warning -->
										</div><!-- /.the-box no-margin -->
									</div><!-- /.panel panel-danger panel-no-border panel-square task-list-wrap -->
									<!-- END PROPERTY CARD -->									
								</div><!-- /.col-sm-6 -->
								
								<div class="col-sm-6">
									<!-- BEGIN REMINDER WIDGET -->
							<div class="the-box no-border full">
								<div class="the-box bg-dark no-border no-margin">
									<p class="text-center"><i class="fa fa-clock-o icon-lg"></i></p>
									<h4 class="bolded less-distance text-danger text-center">My Notifications</h4>
								</div><!-- /.the-box no-border no-margin -->
								
								<div class="the-box no-border bg-danger no-margin">
	
									<div id="tiles-slide-1" class="owl-carousel my-reminder">
									<?PHP
									$sql="SELECT * FROM notification INNER JOIN customer ON notification.cust_id = customer.cust_id ORDER BY (not_id) DESC";
									$result=mysql_query($sql);
									while ($row = mysql_fetch_array($result)) {	
										$not_id=$row['not_id'];
										$lname=$row['last_name'];
										$fname=$row['first_name'];
										$descr=$row['descr'];
										echo '<div class="item full text-left"><p>'.$descr.'</p><p class="small">'.$fname.' '.$lname.'</p></div>';
									}
									?>
									</div><!-- /#tiles-slide-1 -->
								</div><!-- /.the-box no-border bg-danger no-margin -->
							</div><!-- /.the-box .no-border .full -->
							<!-- END REMINDER WIDGET -->
								</div>
								<!-- /.col-sm-6 -->
								<div class="col-xs-6">
									<div class="tiles twitter-tile text-center">
										<i class="fa fa-twitter icon-lg-size"></i>
										<h4><a href="http://facebook.com">2K Likes</a></h4>
									</div><!-- /.tiles .twitter-tile -->
								</div><!-- /.col-xs-6 -->
							</div><!-- /.row -->
							
						</div><!-- /.col-sm-8 -->
						<div class="col-lg-4">
						
							<!-- BEGIN WEATHER WIDGET 3 -->
							<div class="the-box no-border" id="weather-widget-1">
								<h4 class="text-center bolded white-text">Dhaka, Gulshan</h4>
								<p class="text-center white-text">TONIGHT</p>
								<div class="weather-widget">
									<div class="row">
										<div class="col-xs-6 text-center">
											<canvas id="sleet" width="140" height="140"></canvas>
										</div><!-- /.col-xs-6 -->
										<div class="col-xs-6">
											<h1 class="bolded degrees white-text">28<i class="wi-degrees"></i></h1>
											<p class="white-text">Will rain at night</p>
										</div><!-- /.col-xs-6 -->
									</div><!-- /.row -->
								</div><!-- /.weather-widget -->
								<div class="row">
									<div class="col-xs-4 text-center">
									<h4 class="white-text">SAT</h4>
									<canvas id="clear-night" width="50" height="50"></canvas>
									<h4 class="bolded white-text">27<i class="wi-degrees"></i></h4>
									</div><!-- /.col-xs-4 -->
									<div class="col-xs-4 text-center">
									<h4 class="white-text">SUN</h4>
									<canvas id="fog" width="50" height="50"></canvas>
									<h4 class="bolded white-text">26<i class="wi-degrees"></i></h4>
									</div><!-- /.col-xs-4 -->
									<div class="col-xs-4 text-center">
									<h4 class="white-text">MON</h4>
									<canvas id="snow" width="50" height="50"></canvas>
									<h4 class="bolded white-text">15<i class="wi-degrees"></i></h4>
									</div><!-- /.col-xs-4 -->
								</div><!-- /.row -->
							</div><!-- /.the-box bg-info no-border -->
							<!-- END WEATHER WIDGET 2 -->
							
			
						</div><!-- /.col-sm-4 -->
					</div><!-- /.row -->
					
					<div class="row">
						<div class="col-sm-12">
							
							<!-- BEGIN ITEM SHOWCASE -->
							<div class="the-box full no-border item-lg">
								<div id="store-item-carousel-2" class="owl-carousel">
								  <div class="item full"><img src="assets/img/photo/large/img-7.jpg" width="1400" height="795" class="item-image" alt="Image"></div>
								  <div class="item full"><img src="assets/img/photo/large/img-8.jpg" width="1400" height="795" class="item-image" alt="Image"></div>
								</div>
								<div class="item-des">
									<div class="the-box transparent no-margin">
									<h4 class="small-heading more-margin-bottom">ABOUT OUR HOTEL</h4>
										<h1><a href="#fakelink">Hotel De La Pacific</a></h1>
										
										<p class="text-muted item-des-text">
										Hustle, Loyalty, Respect
										</p>
										<p>
											<i class="fa fa-star text-warning"></i>
											<i class="fa fa-star text-warning"></i>
											<i class="fa fa-star text-warning"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</p>										
									</div><!-- /.the-box .transparent .no-margin -->
								</div><!-- /.item-des -->
							</div><!-- /.the-box .full -->
							<!-- END ITEM SHOWCASE -->
					</div><!-- /.row -->
				
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