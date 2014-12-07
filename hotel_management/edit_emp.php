<?php
$emp_id = isset($_POST['emp_id']) ? $_POST['emp_id'] : '';
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$salary = isset($_POST['salary']) ? $_POST['salary'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

require_once 'config.php';
	
$update= "UPDATE employee SET first_name='$fname', last_name='$lname', email='$email', emp_type='$type', gender='$gender', salary='$salary', phone='$phone', password='$password' WHERE emp_id='$emp_id'";	
$result=mysql_query($update);			
if($result){
	echo "<br>Account Successfully Edited!<br> You will be redirected shortly!!";
	$ref=getenv("HTTP_REFERER");
	header("refresh:2; url=$ref" ); 
} else {
	echo die(mysql_error());
}
?>