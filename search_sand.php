<?php

	include("connection.php");


	?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Sand</title>
</head>
<body>


<div class="container">
	<form method = "POST">
		<input type="text" placeholder="search data"
		name="search">
		<button class="btn" name="submit">search</button>
	</form>

		<div class="container">
			<table class="table">
<?php
			if(isset($_POST['submit'])) {

					$search=$_POST['search'];
					$date 	=	$_GET['date'];


					$query	=	"SELECT * FROM sand_data where date='$search' || driver_name = '$search'  || phone = '$search'  ||  vehicle_no = '$search'  ||  destination = '$search'";
	$data 	=	mysqli_query($conn, $query);

	$total	=	mysqli_num_rows($data);
}
else{
	"No Records Found";
}
	
	



	if($total != 0){

		?>
		<h2 align="center"><mark>Displaying all records</mark></h2>
		<center>
			<table border="1" cellspacing="5" width="100%">
			<tr>
			<th width="12%">driver_name</th>
			<th width="12%">phone</th>
			<th width="12%">vehicle_no</th>
			<th width="12%">max_load</th>
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

