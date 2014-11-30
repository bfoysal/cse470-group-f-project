<?php
$type = isset($_POST['type']) ? $_POST['type'] : '';
$check_in = isset($_POST['check_in']) ? $_POST['check_in'] : '';
$check_out = isset($_POST['check_out']) ? $_POST['check_out'] : '';
$rooms = isset($_POST['rooms']) ? $_POST['rooms'] : '';

require_once 'config.php';

$sql="SELECT COUNT(*) FROM rooms WHERE type='$type' AND status='vacant'";
$result=mysql_query($sql);
if($result === FALSE) {
	die(mysql_error());
}
if (mysql_num_rows($result) > 0) {			
	while ($row = mysql_fetch_array($result)) {
		$room_number = $row['COUNT(*)'];
	}
}
if($rooms<=$room_number){
	session_start();
	$_SESSION['session_order']='aww yeah!!';
	$_SESSION['type']=$type;
	$_SESSION['check_in']=$check_in;
	$_SESSION['check_out']=$check_out;
	$_SESSION['rooms']=$rooms;
	
	if(isset($_SESSION["session_hotel"])){
		header("location: order_com.php");
	}else{
		header("Location: reg/register.html");
	}
}
else{
	echo '<script language="javascript">';
	echo 'alert("Not Enough Room Available!!")';
	echo '</script>';
	header("refresh:1; url=index.php" ); 
}

?>

