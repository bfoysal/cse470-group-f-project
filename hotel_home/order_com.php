<?php
session_start();
if(!isset($_SESSION['session_hotel']) || !isset($_SESSION['session_order'])){
	header("location: index.php");
}

$type=$_SESSION['type'];
$check_in=$_SESSION['check_in'];
$check_out=$_SESSION['check_out'];
$rooms=$_SESSION['rooms'];
$cust_email=$_SESSION['session_cust_email'];
require_once 'config.php';
$sql="SELECT * FROM customer WHERE cust_email='$cust_email'";
$result=mysql_query($sql);			
if($result){
	$row = mysql_fetch_array($result);
	$fname= $row['first_name'];
	$lname= $row['last_name'];
	$cust_id= $row['cust_id'];
	$_SESSION['session_cust_id']=$cust_id;
	$_SESSION['session_cust_lname']=$fname;
	if ($type=='Eid' || $type=='Summer'|| $type=='Honeymoon'|| $type=='Executive'|| $type=='Anniversary'){
		$update="update rooms SET check_in='$check_in', check_out='$check_out', status='Booked', type='$type', cust_id='$cust_id' WHERE room_no like '40%' AND status='Vacant' ORDER BY room_no ASC LIMIT $rooms";
	}
	else{
		$update="update rooms SET check_in='$check_in', check_out='$check_out', status='Booked', cust_id='$cust_id' WHERE type='$type' AND status='Vacant' ORDER BY room_no ASC LIMIT $rooms";
	}
	$result2=mysql_query($update);
	$notif="INSERT INTO notification Values(null, 'Booking', '$cust_id', 'A new booking is made, verify it!');";
	$result3=mysql_query($notif);
	if($result3){
		echo "Room has been booked successfully!<br> You will be redirected shortly!";
		header("refresh:1; url=reg/view_order.php" ); 
	} else {
		echo die(mysql_error());
	}
} else {
	echo die(mysql_error());
}

?>

