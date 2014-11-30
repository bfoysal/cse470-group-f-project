<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

require_once 'config.php';
	
$sql=mysql_query("SELECT * FROM employee WHERE email='$email' AND password='$password'");
$numrows=mysql_num_rows($sql);	
if($numrows!=0){
	while($row=mysql_fetch_assoc($sql)){
		$emp_id=$row['emp_id'];
		$emp_lname=$row['last_name'];
		$dbemail=$row['email'];
		$dbpassword=$row['password'];
		$emp_pic=$row['emp_pic'];
	}	
	if($email == $dbemail && $password == $dbpassword){
		session_start();
		$_SESSION["session_hotel_emp"]='aww yeah!!';
		$_SESSION['session_emp_email']=$dbemail;
		$_SESSION['session_emp_lname']=$emp_lname;
		$_SESSION['session_emp_id']=$emp_id;
		$_SESSION['session_emp_pic']=$emp_pic;
		echo "Logged in! You'll be redirected shortly!";
		header("refresh:1; url=index.php"); 
	}
}else {
	echo "<br/>Invalid username or password!";
	header("refresh:2; url=login.html"); 
}
?>