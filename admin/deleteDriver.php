<?php
require("../config/config.php");
if (isset($conn)) {
    $id = $_GET["id"];
    $query = "Delete from driver where id = $id";
    $rowsAffected = mysqli_query($conn, $query);
    if ($rowsAffected > 0) {
        header("Location: showAllDriver.php");
    } else {
        echo "Error :- " . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    die("unable to connect");
}
