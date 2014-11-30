<?php
$cust_email = isset($_GET['username']) ? $_GET['username'] : '';
$password = isset($_GET['password']) ? $_GET['password'] : '';

require_once 'config.php';
			
$sql=mysql_query("SELECT * FROM customer WHERE cust_email='$cust_email' AND password='$password'");

$numrows=mysql_num_rows($sql);	
if($numrows!=0){
	while($row=mysql_fetch_assoc($sql)){
		$cust_id=$row['cust_id'];
		$cust_lname=$row['last_name'];
		$dbemail=$row['cust_email'];
		$dbpassword=$row['password'];
	}	
	if($cust_email == $dbemail && $password == $dbpassword){
		session_start();
		$_SESSION["session_hotel"]='aww yeah!!';
		$_SESSION['session_cust_email']=$dbemail;
		$_SESSION['session_cust_lname']=$cust_lname;
		$_SESSION['session_cust_id']=$cust_id;
		echo "Logged in! You'll be redirected shortly!";
		header("refresh:2; url=order_com.php"); 
	}
}else {
	echo "<br/>Invalid username or password!";
}			
?>