<?php
$fname = isset($_POST['fname']) ? $_POST['fname'] : '';
$lname = isset($_POST['lname']) ? $_POST['lname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$type = isset($_POST['type']) ? $_POST['type'] : '';
$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
$salary = isset($_POST['salary']) ? $_POST['salary'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

require_once 'config.php';
	
$query=mysql_query("SELECT * FROM employee WHERE email='$email'");
$numrows=mysql_num_rows($query);
if($numrows==0){
	$sql="insert into employee values (null,'$fname','$lname','$email','$type','$gender','$salary','$phone','$password', 'default.jpg')";		
	$result=mysql_query($sql);			
	if($result){
		echo "<br>Account Successfully Created!<br> You will be redirected shortly!!";
		header("refresh:2; url=login.html" ); 
	} else {
		echo die(mysql_error());
	}			
} else {
	echo "</br>That email already exists in our database! Login with your email!";
	header("refresh:2; url=login.html");
}


?>