<?php
require_once 'config.php';
$cust_id = isset($_POST['cust_id']) ? $_POST['cust_id'] : '';
$room_no = isset($_POST['room_no']) ? $_POST['room_no'] : '';
$check_in = isset($_POST['check_in']) ? $_POST['check_in'] : '';
$check_out = isset($_POST['check_out']) ? $_POST['check_out'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';

$sql="UPDATE rooms SET cust_id='$cust_id', status='Filled', check_in='$check_in', check_out='$check_out' WHERE room_no='$room_no'";
$result=mysql_query($sql);
if($result){
	echo "Room has been assigned successfully!<br> You will be redirected shortly!";
	header("refresh:1; url=rooms_list.php" ); 
} else {
	echo die(mysql_error());
}
?>