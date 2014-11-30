<?php
session_start();
if(isset($_SESSION["session_hotel"])){
	header("location: index.php");
}
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$cust_email = isset($_POST['email']) ? $_POST['email'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$credit = isset($_POST['credit']) ? $_POST['credit'] : '';
$password = isset($_POST['passwordsignup']) ? $_POST['passwordsignup'] : '';

require_once 'config.php';			
$query=mysql_query("SELECT * FROM customer WHERE cust_email='$cust_email'");
$numrows=mysql_num_rows($query);
if($numrows==0){
	$sql="insert into customer values (null,'$fname','$lname', '$cust_email', '$gender','$address','$phone', '$credit', '$password');";		
	$result=mysql_query($sql);			
	if($result){
		echo "<br>Account Successfully Created!<br> You will be redirected shortly!!";

		$_SESSION['session_hotel']='aww yeah!!';
		$_SESSION['session_cust_email']=$cust_email;
		
		header("refresh:2; url=order_com.php" ); 
	} else {
		echo die(mysql_error());
	}			
} else {
	echo "</br>That email already exists in our database! Login with your email!";
}

?>