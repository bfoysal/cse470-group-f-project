<?php
if(isset($_POST['email'])){
	$email = $_POST['email'];	
	require_once 'config.php';			
	$query=mysql_query("SELECT * FROM employee WHERE email='$email'");
	$numrows=mysql_num_rows($query);
	if($numrows==1){
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	    $pass =substr(str_shuffle($chars),0,8);
		$query=mysql_query("UPDATE employee SET password='$pass' WHERE email='$email'");
		if($query){
			$subject  = 'Account Details';
			$headers  = "From: email@hotel.com\n"; // From address
			$headers .= "Organization:Hotel De La Pacific\n"; // Organisation
			$headers .= "Content-Type: text/html; charset=iso-8859-1\n"; // Type
			$message = "=============== Account Password Reset ==============";
			$message .= "<br/>";
			$message .= '<strong>New Password: </strong> '.$pass;
			$message .= "<br/>";
			echo $message;
			
			$send_to = "$email"; 
			if(@mail($send_to, $subject, $message, $headers)){
				echo '<br>New password for your account has been emailed!';
				header("refresh:1; url=login.html" );
			}else{
				echo 'Invalid email!';
				$ref=getenv("HTTP_REFERER");
				header("refresh:1; url=$ref"); 
				exit;
			}			 
		}else{
			echo die(mysql_error());
		}
	}else{
		echo 'Invalid email!';
		$ref=getenv("HTTP_REFERER");
		header("refresh:1; url=$ref"); 
	}
}
?>