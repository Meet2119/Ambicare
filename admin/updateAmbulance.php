<?php
if(isset($_POST["action"])){
	require ("../config/config.php");
    $ambulanceNo = $_POST['ambulanceNo'];
    $did = $_POST['did'];
    $Fees = $_POST['Fees'];
    $aid = $_POST['aid'];
	$query="update ambulance set ambulanceNumber='$ambulanceNo', did='$did', Fees=$Fees where aid=$aid; ";
	$affectedRows=mysqli_query($conn,$query);
	
	if($affectedRows>0){
		header("location: showAllAmbulance.php");
	}else{
		echo "Unsuccessful".mysqli_error($conn);
	}
}
?>