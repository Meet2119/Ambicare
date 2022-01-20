<?php
if(isset($_POST["action"])){
	require ("../config/config.php");
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $pwd = $_POST['pwd'];
    $id = $_POST['id'];
	$query="update driver set name='$name', email='$email', contact=$contact, password='$pwd' where id = $id;";
	$affectedRows=mysqli_query($conn,$query);
	
	if($affectedRows>0){
		header("location: showAllDriver.php");
	}else{
		echo "Unsuccessful".mysqli_error($conn);
	}
}
?>