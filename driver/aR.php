<?php
session_start();
if (isset($_SESSION['driver']))
    require("../config/config.php");
$clientName = $_GET['clientName'];
$pickupL = $_GET['pickupL'];
$dropL = $_GET['dropL'];
$Fees = $_GET['Fees'];
$bid = $_GET['bid'];
$did = $_GET['did'];
$iQuery = "insert into acceptedRequests(clientName,did,pickupL,dropL,Fees) values('$clientName','$did','$pickupL','$dropL','$Fees');";
$iResults = mysqli_query($conn, $iQuery);

$query = "Delete from bookings where id=$bid";
$rowsAffected = mysqli_query($conn, $query);
if ($rowsAffected > 0) {
    header("Location: showAllProducts.php");
} else {
    echo "Error :- " . mysqli_error($conn);
}

if ($iResults > 0) {
    header("location: driverPanel.php?");
} else {
    echo "There is some problem, Please try again after some time!";
}
mysqli_close($conn);
