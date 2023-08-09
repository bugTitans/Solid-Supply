<?php

	include("connection.php");


	?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Brick</title>
</head>
<style>
	* {
		margin: 0;
		padding: 0;
		background-color: rgb(255, 236, 213);
	}

	.disp {
			color: #004867;
			font-family: cursive;
			font-size: larger;

		}


	.sea{
		border-radius : 20px 0 0px 20px;
		padding:.6em  1em .8em   1em;
		margin-top: 20px;
		margin-left: 50px;
		background-color: rgb(233, 243, 251);
		border : 1px solid rgb(59, 59, 59);
		font-family: cursive;
	}

	.login-btn {

			color: #fff;
			cursor: pointer;
			margin: 20px;
			border: none;
			background-size: 300% 100%;
			padding:.7em  2em .9em   1em;
			margin-top: 20px;
			margin-left: -4px;
			border-radius: 0px 20px 20px 0;
			moz-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
			font-family: cursive;
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

		.disp {
			color: #004867;
			font-family: cursive;
			font-size: larger;

		}

		table {
			font-family: cursive;
			border-collapse: collapse;
			margin: 25px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			border-radius: 7px;
			
		}

		table tr th {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
		}

		table tr th, table tr td {
			padding: 12px 15px;
		}

		table tr td {
    		border-bottom: 2px solid #008b61;
		}

		table tr td:nth-of-type(even) {
    		background-color: #dbd6b6;
		}

		table tr td:last-of-type {
    		border-bottom: 2px solid #009879;
		}

		table tr td.active-row {
    		font-weight: bold;
    		color: #009879;
		}
		

</style>

<body>


<div class="container">
	<form method = "POST">
		<input class="sea" type="text" placeholder="Search Data"
		name="search">
		<button class="login-btn color-1" name="submit">Search</button> 
	</form>

		<div class="container">
			<table class="table">
<?php
			if(isset($_POST['submit'])) {

					$search=$_POST['search'];
					$date 	=	$_GET['date'];


					$query	=	"SELECT * FROM brick_data where date='$search' || driver_name = '$search'  || phone = '$search'  ||  vehicle_no = '$search'  ||  type = '$search'  ||  destination = '$search'";
	$data 	=	mysqli_query($conn, $query);

	$total	=	mysqli_num_rows($data);
}
	
	



	if($total != 0){

		?>
		<h2 align="center"><mark class="disp">Displaying all records</mark></h2>
		<center>
			<table border="1" cellspacing="5" width="100%">
			<tr>
			<th width="12%">driver_name</th>
			<th width="12%">phone</th>
			<th width="12%">vehicle_no</th>
			<th width="12%">max_load</th>
			<th width="12%">type</th>
			<th width="12%">tyre_pressure</th>
			<th width="12%">destination</th>
			<th width="12%">date</th>
			<th width="12%">time</th>
			</tr>

		<?php
		while($result	=	mysqli_fetch_assoc($data)){
			
			echo"
			<tr>
			<td>".$result["driver_name"]."</td>
			<td>".$result["phone"]."</td>
			<td>".$result["vehicle_no"]."</td>
			<td>".$result["max_load"]."</td>
			<td>".$result["type"]."</td>
			<td>".$result["tyre_pressure"]."</td>
			<td>".$result["destination"]."</td>
			<td>".$result["date"]."</td>
			<td>".$result["time"]."</td>

			</tr>
			";
		}
	}

	else{
		"No records found";
	}

				

?>		



</table>
			
		</div>


</div>
</body>
</html>

