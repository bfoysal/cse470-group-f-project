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
						<a href="#fakelink">
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
					<h1 class="page-heading">Invoice <small>Generate invoice for customers</small></h1>
					<!-- End page heading -->
				
					<!-- Begin breadcrumb -->
					<ol class="breadcrumb default square rsaquo sm">
						<li><a href="index.php"><i class="fa fa-home"></i></a></li>
						<li><a href="index.php">Hotel</a></li>
						<li class="active">Invoice</li>
					</ol>
					<!-- End breadcrumb -->
				
				<!-- BEGIN INVOICE -->
				<?PHP
				$cust_id=$_GET['cust_id'];
				$sql_cust="SELECT * FROM customer INNER JOIN rooms ON customer.cust_id=rooms.cust_id INNER JOIN room_price ON room_price.room_type=rooms.type WHERE customer.cust_id='$cust_id'";
				$result=mysql_query($sql_cust);
				$all_rooms='';
				$total_room_price='';
				$room_count='';
				$days_stayed='';				
				$total_fac_price='';
				$fac_count='';
				$fac_type='';
				$food_type='';
				$total_food_price='';
				$food_count='';
				while($row=mysql_fetch_array($result)){
					$fname=$row['first_name'];
					$lname=$row['last_name'];
					$cust_email=$row['cust_email'];
					$phone=$row['phone_no'];
					$credit_card=$row['credit_card'];
					$address=$row['address'];
					$room_price=$row['room_price'];
					$check_in=$row['check_in'];
					$check_out=$row['check_out'];
					$days_stayed=round(abs(strtotime($check_out)-strtotime($check_in))/86400);
					$days_stayed++;
					$room_price=$room_price*$days_stayed;
					$all_rooms.=$row['room_no'].' ';
					$total_room_price+=$room_price;					
					$room_count++;
				}				
				?>
				
					<div class="the-box full invoice">
						<div class="the-box no-border bg-dark" style="vertical-align: text-middle;">
							<div class="row">
								<div class="col-sm-6">
									<img src="assets/img/ourlogo.png" class="logo-invoice" alt="Logo">
								</div><!-- /.col-sm-6 -->
								<div class="col-sm-6 text-right">
									<address>
									  <strong>Hotel De La Pacific</strong><br>
									  66 Mohakhali<br>
									  Dhaka<br>
									  Phone: +880-2-8824051-4<br>
									  Email: support@hotel.com
									</address>
								</div><!-- /.col-sm-6 -->
							</div><!-- /.row -->
						</div><!-- /.the-box no-border bg-dark -->
						<div class="the-box no-border">
							<h1 class="text-center">INVOICE</h1>
							<h3 class="text-muted text-center"></h3>
							
							<div class="row">
								<div class="col-sm-6">
								<p>
									<strong>BILL TO : <?PHP echo $fname.' '.$lname; ?></strong>
								</p>
								<address> <?PHP
										echo $address.'<br>
								 		<abbr title="Phone">Ph:</abbr> '.$phone; 
								  		?>
								</address>
								</div><!-- /.col-sm-6 -->
								<div class="col-sm-6 text-right">
								<p>Date : <?PHP echo $_GET['date']; ?></p>
								</div><!-- /.col-sm-6 -->
							</div><!-- /.row -->
							
							<div class="table-responsive">
								<table class="table table-th-block table-striped table-dark">
									<thead>
										<tr>
											<th>DESCRIPTION</th>
											<th style="width: 60px;">QTY</th>
											<th style="width: 100px;"></th>
											<th style="width: 100px;">SUBTOTAL</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<p><strong>Room Rent</strong><p>
												<p class="text-muted">Rooms rented: <?PHP echo $all_rooms; ?> <br> 																						
												</p>
											</td>
											<td><?PHP echo $room_count; ?></td>
											<td></td>
											<td class="text-right"><strong><?PHP echo $total_room_price; ?></strong></td>
										</tr>
										<?PHP
										$sql_fac="SELECT * FROM facilities WHERE cust_id='$cust_id' AND paid='No'";
										$result_fac=mysql_query($sql_fac);
										if (mysql_num_rows($result_fac) > 0){
											while($row_fac=mysql_fetch_array($result_fac)){
												$rate=$row_fac['rate'];
												$fac_type.=$row_fac['type'].' ';
												$total_fac_price+=$rate;
												$fac_count++;
											}										
										?>
										
										<tr>
											<td>
												<p><strong>Facilities</strong><p>
												<p class="text-muted">Services Used: <?PHP echo $fac_type; ?> <br> 																						
												</p>
											</td>
											<td><?PHP echo $fac_count; ?></td>
											<td></td>
											<td class="text-right"><strong><?PHP echo $total_fac_price; ?></strong></td>
										</tr>
										<?PHP } ?>
										<?PHP
										$sql_food="SELECT * FROM food WHERE cust_id='$cust_id' AND paid='No'";
										$result_food=mysql_query($sql_food);
										if (mysql_num_rows($result_food) > 0){
											while($row_food=mysql_fetch_array($result_food)){
												$food_price=$row_food['food_price'];
												$food_type.=$row_food['type'].' ';
												$total_food_price+=$food_price;
												$food_count++;
											}										
										?>
										
										<tr>
											<td>
												<p><strong>Food</strong><p>
												<p class="text-muted">Food Ordered: <?PHP echo $food_type; ?> <br> 																						
												</p>
											</td>
											<td><?PHP echo $food_count; ?></td>
											<td></td>
											<td class="text-right"><strong><?PHP echo $total_food_price; ?></strong></td>
										</tr>
										<?PHP } ?>
									</tbody>
									<tfoot>
										<tr class="success">
											<td colspan="3" class="text-right">TOTAL</td>
											<td class="text-right"><strong><?PHP $total=$total_room_price + $total_fac_price + $total_food_price; echo $total; ?></strong></td>
										</tr>
										<tr class="warning">
											<td colspan="3" class="text-right">TAX</td>
											<td class="text-right"><strong><?PHP $tax=$total*0.05; echo $tax; ?></strong></td>
										</tr>
										<tr class="danger">
											<td colspan="3" class="text-right">GRAND TOTAL</td>
											<td class="text-right"><strong><?PHP $grand_total=$total+$tax; echo $grand_total; ?></strong></td>
										</tr>
									</tfoot>
								</table>
							</div><!-- /.table-responsive -->
							
							
							
							<div class="row">
								<div class="col-sm-6">
									<p>
										<strong>PAYMENT DETAIL</strong>
									</p>
									<address> <?PHP
										echo $fname.' '.$lname.'<br>'.$address.'<br><abbr title="Phone">Ph:</abbr> '.$phone; 
								  		?>
								</address>
								</div><!-- /.col-sm-6 -->
								<div class="col-sm-6 text-right">
									<p>
										<strong>Other information</strong>
									</p>
									<p><br>*Conditions Apply: 5% VAT</p>
								</div><!-- /.col-sm-6 -->
							</div><!-- /.row -->
							
							<div class="jumbotron jumbotron-sm text-center">
								<h1>Thank you! Come back soon!</h1>
							</div><!-- /.jumbotron .jumbotron-sm --><br>
							<form role="form" action="bill_cust.php" method="post">
								<input type="hidden" name="cust_id" value="<?PHP echo $cust_id; ?>">
								<input type="hidden" name="amount" value="<?PHP echo $grand_total; ?>">	
								<input type="hidden" name="c_date" value="<?PHP echo $_GET['date']; ?>">
								<div class="form-group">
									<button type="submit" class="btn btn-block btn-primary btn-sm">CHECK OUT NOW!</button>
								</div>
							</form>
						</div><!-- /.the-box no-border no-margin-->
					</div><!-- /.the-box -->
					<!-- END INVOICE -->				
				
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