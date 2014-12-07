<?php
if(getenv("HTTP_REFERER")==''){
	header('Location: index.php');
}
session_start();
$user_name=$_SESSION['session_emp_email'];
$emp_id=$_SESSION['session_emp_id'];
if($user_name==''){
	header('Location: login.html');
}
else{
	$allowedExts = array("gif", "jpeg", "jpg", "png");
	$temp = explode(".", $_FILES["file"]["name"]);
	$extension = end($temp);
	
	if ((($_FILES["file"]["type"] == "image/gif")
	|| ($_FILES["file"]["type"] == "image/jpeg")
	|| ($_FILES["file"]["type"] == "image/jpg")
	|| ($_FILES["file"]["type"] == "image/pjpeg")
	|| ($_FILES["file"]["type"] == "image/x-png")
	|| ($_FILES["file"]["type"] == "image/png"))
	&& ($_FILES["file"]["size"] < 300000)
	&& in_array($extension, $allowedExts)) {
	  if ($_FILES["file"]["error"] > 0) {
		echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
	  } else {
		$path="assets/img/avatar/" . $emp_id.'.'.$extension;
		move_uploaded_file($_FILES["file"]["tmp_name"], $path);	
		
		require_once 'config.php';
		$sql="UPDATE employee SET emp_pic = '" .$emp_id. '.' .$extension. "' WHERE emp_id = '".$emp_id."'";
		$result=mysql_query($sql);
		if($result === FALSE) {
			die(mysql_error());
		}
		else{
			$_SESSION['session_emp_pic']=$emp_id.'.'.$extension;
			header('Location: index.php');
		}	
	  }
	} else {
	  echo "Invalid file";
	}
}
?>