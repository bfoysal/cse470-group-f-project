<?PHP 
session_start();
$room_no=$_GET['room_no'];
$cust_id=$_SESSION['session_cust_id'];
require_once 'config.php';
$sql = "DELETE FROM rooms WHERE room_no='$room_no' AND cust_id='$cust_id'";
$result=mysql_query($sql);
if($result === FALSE) {
	die(mysql_error());
}
echo 'Room successfully removed from your booking!!';
header("refresh:1; url=reg/view_order.php" ); 
?>