<?php 
require ("../config/config.php");
$aid = $_GET["aid"];
if($conn){
	$query="Delete from Ambulance where aid = $aid";
	$rowsAffected=mysqli_query($conn,$query);
	if($rowsAffected>0){
		header("Location: showAllAmbulance.php");
	}else{
		echo "Error :- ".mysqli_error($conn);
	}
	mysqli_close($conn);
}else{
	die("unable to connect");
} 

?>