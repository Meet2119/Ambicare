<?php
session_start();
unset($_SESSION['driver']);
header("location: driverLogin.php");
?>