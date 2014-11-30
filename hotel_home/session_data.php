<?PHP
$cust_email = $_SESSION['session_cust_email'];
require_once 'config.php';
$sql = "SELECT * FROM customer WHERE cust_email='$cust_email'";
$result=mysql_query($sql);
if($result === FALSE) {
	die(mysql_error());
}
$row = mysql_fetch_array($result);
$_SESSION['session_cust_id']= $row['cust_id'];
$_SESSION['session_cust_email']= $row['cust_email'];
$_SESSION['session_user_fullname']= $row['cust_fname'];
$_SESSION['session_user_fullname']= $row['cust_lname'];
$_SESSION['session_user_fullname']= $row['user_fullname'];
$_SESSION['session_user_fullname']= $row['user_fullname'];
$_SESSION['session_user_fullname']= $row['user_fullname'];
?>