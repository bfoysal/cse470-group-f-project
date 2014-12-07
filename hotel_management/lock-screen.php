<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Sentir, Responsive admin and dashboard UI kits template">
		<meta name="keywords" content="admin,bootstrap,template,responsive admin,dashboard template,web apps template">
		<meta name="author" content="Ari Rusmanto, Isoh Design Studio, Warung Themes">
		<title>Lock screen | Hotel de la pacific</title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
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
 
	<body class="lock tooltips">
	<?PHP
	session_start();
	if(!isset($_SESSION["session_hotel_emp"])){
		header("location: login.html");
	}
	require_once 'config.php';
	?>
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="login-header dark text-center">
			<img src="assets/img/ourlogo.png" class="logo" alt="Logo">
		</div>
		<div class="login-wrapper">
			<form action="login_emp.php" method="post">
				<div class="form-group text-center">
					<img src="assets/img/avatar/<?PHP echo $_SESSION['session_emp_pic']; ?>" class="avatar-lock img-circle" alt="Avatar">
				</div>
				<div class="form-group">
					<h4 class="text-center"><strong><?PHP echo $_SESSION['session_emp_lname']; ?></strong></h4>
				</div>
				<div class="form-group has-feedback lg left-feedback no-label">
				  <input name="email" type="hidden" value="<?PHP echo $_SESSION['session_emp_email']; ?>">
				  <input type="password" name="password" class="form-control no-border input-lg rounded" placeholder="Enter password" autofocus>
				  <span class="fa fa-unlock form-control-feedback"></span>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-warning btn-lg btn-perspective btn-block">LOGIN</button>
				</div>
			</form>
			<p class="text-center"><strong><a href="logout.php">Logout</a></strong></p>
		</div><!-- /.login-wrapper -->
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
		  
		<!-- JQUERY BACKSTRETCH JS -->
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
		<script>
			$.backstretch("assets/img/photo/large/img-14.jpg", {speed: 500});
		</script>
		
		
	</body>
</html>