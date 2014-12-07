<?php
require_once 'config.php';
$cust_id = isset($_POST['cust_id']) ? $_POST['cust_id'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$rate = isset($_POST['rate']) ? $_POST['rate'] : '';

$sql="insert into facilities values (null,'$type','$rate','$cust_id', 'No')";

$result=mysql_query($sql);
if($result){
	echo "Service has been billed successfully!<br> You will be redirected shortly!";
	header("refresh:1; url=bill_services.php" ); 
} else {
	echo die(mysql_error());
}
?>