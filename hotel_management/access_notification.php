<?php
if(getenv("HTTP_REFERER")==''){
	header('Location: index.php');
}
require_once 'config.php';
$not_id=$_GET['not_id'];

$sql = "DELETE FROM notification WHERE not_id='$not_id'";
$result=mysql_query($sql);
if($result){
	header('Location: notifications.php');
} else {
	echo die(mysql_error());
}
?>