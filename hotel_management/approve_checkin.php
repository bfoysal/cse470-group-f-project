<?php
if(getenv("HTTP_REFERER")==''){
	header('Location: index.php');
}
require_once 'config.php';
$room_no=$_GET['room_no'];
$cust_id=$_GET['cust_id'];

$sql="UPDATE rooms SET status='Filled' WHERE room_no='$room_no' AND cust_id='$cust_id'";
$result=mysql_query($sql);
if($result){
	echo "Room has been approved successfully!<br> You will be redirected shortly!";
	header("refresh:1; url=rooms_list.php" ); 
} else {
	echo die(mysql_error());
}
?>