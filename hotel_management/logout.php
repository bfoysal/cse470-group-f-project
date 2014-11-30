<?php 
session_start();
session_unset(); 
session_destroy();
echo 'You have been logged out!<br> You will be redirected shortly!';
header("refresh:2; url=login.html"); 
?>
