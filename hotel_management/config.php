<?php
// Create connection
$con=mysql_connect("localhost","root","") or die (mysql_error());
$db = mysql_select_db("hotel", $con) or die (mysql_error());
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>