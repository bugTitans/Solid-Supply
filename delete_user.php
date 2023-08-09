<?php
	include("connection.php");

	$id = $_GET['id'];

	$query ="DELETE FROM user WHERE id ='$id'";
	$data = mysqli_query($conn, $query);

	if($data){
		echo "<script>alert('Record Deleted')</script>";
	
		header('location:displayuser.php');


	}
	else{
		echo "<script>alert('Failed to delete')</script>";
	}

?>