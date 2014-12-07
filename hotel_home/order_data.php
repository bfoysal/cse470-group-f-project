<?php
$type = isset($_POST['type']) ? $_POST['type'] : '';
$check_in = isset($_POST['check_in']) ? $_POST['check_in'] : '';
$check_out = isset($_POST['check_out']) ? $_POST['check_out'] : '';
$rooms = isset($_POST['rooms']) ? $_POST['rooms'] : '';

$days=round((strtotime($check_out)-strtotime($check_in))/86400);

if($days<0){
	echo 'Please correct your check in and check out dates!!';
	header("refresh:2; url=index.php"); 
}
else{
	require_once 'config.php';
	if ($type=='Eid' || $type=='Summer'|| $type=='Honeymoon'|| $type=='Executive'|| $type=='Anniversary'){
		$sql="SELECT COUNT(*) FROM rooms WHERE room_no like '40%' AND status='Vacant'";
	}
	else{
		$sql="SELECT COUNT(*) FROM rooms WHERE type='$type' AND status='Vacant'";
	}
	echo $sql;
	$result=mysql_query($sql);
	if($result === FALSE) {
		die(mysql_error());
	}
	if (mysql_num_rows($result) > 0) {			
		while ($row = mysql_fetch_array($result)) {
			$room_number = $row['COUNT(*)'];
			echo $room_number;
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
		//header("refresh:1; url=index.php" ); 
	}
}
?>

