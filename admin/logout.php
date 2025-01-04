<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['is_admin']);
unset($_SESSION['is_user']);
header("Location:login.php");
?>