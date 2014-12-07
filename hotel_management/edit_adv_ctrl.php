<?php
$pack_no = isset($_POST['pack_no']) ? $_POST['pack_no'] : '';
$pack_type = isset($_POST['pack_type']) ? $_POST['pack_type'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';
$active = isset($_POST['active']) ? $_POST['active'] : '';

require_once 'config.php';
	
$update= "UPDATE packages SET active='$active' WHERE pack_no='$pack_no'";
$result=mysql_query($update);

$update= "UPDATE room_price SET room_price='$price' WHERE room_type='$pack_type'";
$result=mysql_query($update);

if($result){
	echo "<br>Package Successfully Edited!<br> You will be redirected shortly!!";
	//$ref=getenv("HTTP_REFERER");
	$ref='show_advertise.php';
	header("refresh:2; url=$ref" ); 
} else {
	echo die(mysql_error());
}
?>