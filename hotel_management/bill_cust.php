<?php
if(isset($_POST['cust_id'])){
	$cust_id = $_POST['cust_id'];	
	$amount = $_POST['amount'];	
	$date = $_POST['c_date'];
	require_once 'config.php';
	
	$bill=mysql_query("INSERT INTO bill VALUES(null, '$date', '$amount', '$cust_id')");
	$rooms = mysql_query("UPDATE rooms SET status='Vacant', check_in='', check_out='', cust_id=NULL WHERE cust_id='$cust_id'");
	$foods = mysql_query("UPDATE facilities SET paid='Yes' WHERE cust_id='$cust_id'");
	$services = mysql_query("UPDATE food SET paid='Yes' WHERE cust_id='$cust_id'");
	
	if($bill && $rooms && $foods && $services){
		echo 'The customer has been successfully billed. <br> You will be redirected shortly!';
		//$ref=getenv("HTTP_REFERER");
		//header("refresh:1; url=index.php"); 
	}else{
		echo die(mysql_error());
	}
}
?>