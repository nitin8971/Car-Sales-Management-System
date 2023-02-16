<?php
session_start();
unset($_SESSION['password']);
unset($_SESSION['username']);
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/login1.php");
?>
