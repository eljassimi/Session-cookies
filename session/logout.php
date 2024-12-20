<?php 

session_start();
session_unset();
setcookie('token', '', time() + (86400 * 30), "/"); 
header("location:login.php");


?>