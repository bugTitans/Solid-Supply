<?php include("connection.php"); ?>

<?php

session_start();
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sand Details</title>
	<style>
			.container {
			position: relative;
			left: 50%;
			padding-bottom: 24%;
			top: 230px;
			transform: translate(-50%, -50%);
			width: 470px;
			height: 400px;
			background-color: rgb(255, 255, 255);
			border-radius: 25px 0 25px 0;
			box-shadow: 5px 5px 12px 0px rgba(65, 65, 65, 0.249);
			margin-top: 10%;
		}

		.title {
			font-family: cursive;
			margin-left: 40%;
			padding-top: 4%;
			font-size: 18px;
			color: rgb(0, 142, 95);
			font-weight: 500;

		}

		.input_field {
			font-family: cursive;
			padding-top: 2.5%;
			padding-left: 9%;
		}


		.input {
			padding: 5px;
			font-family: cursive;
			border-radius: 25px;
			box-shadow: 5px 5px 12px 0px rgba(65, 65, 65, 0.249);
			border: 1px solid rgb(114, 114, 114);
			height: 23px;
		}

		table {
			background-color: white;
		}

		.update,
		.delete {
			background-color: green;
			color: white;
			border: 0;
			outline: none;
			border-radius: 3px;
			height: 22px;
			width: 45%;
			font-weight: bold;
			cursor: pointer;
		}

		.delete {
			background-color: red;

		}

		.btn {
			width: 90%;
			height: 50px;
			background-color: rgba(255, 103, 171, 0.267);
			border-radius: 25px;
			font-size: 20px;
			outline: 0;
			margin: 7px 0;
			color: rgb(255, 0, 115);
			border: 0px;
			cursor: pointer;
			font-family: cursive;
			box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
			outline-offset: 0px;
			text-shadow: none;
			transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
		}

		.btn:hover {
			box-shadow: inset 0 0 13px rgba(0, 193, 193, 0.642), 0 0 20px rgba(255, 255, 255, .2);
			border: 1px solid;
			outline-color: rgba(255, 255, 255, 0);
			outline-offset: 15px;
			color: rgb(0, 125, 83);
			background-color: rgb(255, 255, 255);
		}

		.custom_select {
			border-radius: 25px;
		}

		.input_field .sll {
			border-radius: 5px;
			height: 5px;
		}

		.login-btn {
			width: 200px;
			font-size: 19px;
			font-weight: 600;
			color: #fff;
			cursor: pointer;
			margin: 20px;
			height: 55px;
			text-align: center;
			border: none;
			background-size: 300% 100%;

			border-radius: 50px;
			moz-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}

		.login-btn:hover {
			background-position: 100% 0;
			moz-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}

		.login-btn:focus {
			outline: none;
		}

		.login-btn.color-1 {
			background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
			box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
		}

		.login-btn.color-2 {
			background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
			box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
		}

		.login-btn.color-3 {
			background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
			box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
		}
	</style>

		</style>
</head>

<body>

	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Sand Details
		</div>

		<div class="form">

			<div class="input_field">
				<label>Driver Name</label>
				<input type="text" class="input" name="driver_name" required>
			</div>

			<div class="input_field">
				<label>Phone</label>
				<input type="text" class="input" name="phone" required>
			</div>

			<div class="input_field">
				<label>Vehicle No</label>
				<input type="text" class="input" name="vehicle_no" required>
			</div>

			<div class="input_field">
				<label>Max Load</label>
				<input type="text" class="input" name="max_load" required>
			</div>

			<div class="input_field">
				<label>Fuel</label>
				<input type="text" class="input" name="fuel" required>
			</div>

			<div class="input_field">
				<label>Fuel Type</label>
				<div class="custom_select">
				<select name="fuel_type" required>
					<option value="">Select</option>
					<option value="petrol">Petrol</option>
					<option value="diesel">Diesel</option>
				</select>
				</div>
			</div>

			<div class="input_field">
				<label>Tyre Pressure</label>
				<input type="text" class="input" name="tyre_pressure" required>
			</div>

			<div class="input_field">
				<label>Destination</label>
				<input type="text" class="input" name="destination" required>
			</div>

			<div class="input_field">
				<label>Date</label>
				<input type="date" class="input" name="date" required>
			</div>

			<div class="input_field">
				<label>Time</label>
				<input type="text" class="input" name="time" required>
			</div>

			<div class="input_field">
				<input type="submit" value="SUBMIT" class="btn" name="submit">
			</div>

		</div>
	</form>
	</div>

	<a href="search_brick.php"><input class="login-btn color-1" type="submit" name="" value="Search"> </a>

	<a href=" view_brick.php"><input class="login-btn color-2" type="submit" name="" value="View"> </a>


	<a href=" logout.php"><input class="login-btn color-3" type="submit" name="" value="LogOut"> </a>

</body>

</html>

<?php 
	if($_POST['submit'])
	{
		$name 	 = $_POST['driver_name'];
		$phone 	 = $_POST['phone'];
		$no 	 = $_POST['vehicle_no'];
		$load 	 = $_POST['max_load'];
		$fuel 	 = $_POST['fuel'];
		$fuelT 	 = $_POST['fuel_type'];
		$tyre  	 = $_POST['tyre_pressure'];
		$dest	 = $_POST['destination'];
		$date 	 = $_POST['date'];
		$time 	 = $_POST['time'];


		if($name != "" && $phone != "" && $no != "" && $load != ""  && $fuel != "" && $fuelT != ""  && $tyre != "" && $dest != "" && $date != "" && $time != "")
		{

	$query 	=	"INSERT INTO sand_data(driver_name, phone, vehicle_no, max_load, fuel, fuel_type, tyre_pressure, destination, date, time) values('$name','$phone','$no','$load', '$fuel', '$fuelT', '$tyre','$dest','$date','$time')";
	$data	= 	mysqli_query($conn, $query);

	if($data){
		echo "<script> alert('Data inserted Successfully') </script>";
	}
	else{
		echo "Failed";
	}
	}
	else{
		echo "<script> alert('Failed') </script>";

	}
}


//for login session
	$userprofile = $_SESSION['user_name'];

	if($userprofile == true){
		
	}

	else
	{
		 header('location:solidsupply.php');
	}

	//login ends

	$query	=	"SELECT * FROM sand_data";
	$data 	=	mysqli_query($conn, $query);

	$total	=	mysqli_num_rows($data);