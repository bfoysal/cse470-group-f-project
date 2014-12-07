<?php
require_once 'config.php';
$cust_id = isset($_POST['cust_id']) ? $_POST['cust_id'] : '';
$food_name = isset($_POST['food_name']) ? $_POST['food_name'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';

$sql="insert into food values (null,'$food_name','$type','$price', '$cust_id', 'No')";

$result=mysql_query($sql);
if($result){
	echo "Food has been billed successfully!<br> You will be redirected shortly!";
	header("refresh:1; url=bill_food.php" ); 
} else {
	echo die(mysql_error());
}
?>