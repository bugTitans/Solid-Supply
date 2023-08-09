<?php

session_start();
?>






<html>
	<head>
		<title>Display User</title>
		<style>
			body{
				background: #3345;
			}
			table{
					background-color: white;
				}

			.update, .delete{
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

			.delete{
				background-color: red;
				
			}

			* {
			margin: 0;
			padding: 0;
			background-color: rgb(255, 236, 213);
		}

		.disp {
			color: #0075a7;
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

		table tr th,
		table tr td {
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

		.login-btn {
			width: 150px;
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
			background-image: linear-gradient(to right, #e12538, #fa4e9e, #dd3092, #b62bb6);
			box-shadow: 0 4px 15px 0 rgba(196, 49, 184, 0.75);
		}

		.update {
			width: 100px;
			font-size: 14px;
			font-weight: 600;
			color: #fff;
			cursor: pointer;
			margin: 0;
			height: 35px;
			text-align: center;
			border: none;
			background-size: 300% 100%;

			border-radius: 50px;
			moz-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;

		}

		.update:hover {
			background-position: 100% 0;
			moz-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}

		.update:focus {
			outline: none;
		}

		.update.color-3 {
			background-image: linear-gradient(to right, #76e125, #65fa4e, #30dd58, #2bb647);
			box-shadow: 0 4px 15px 0 rgba(91, 208, 28, 0.75);
		}

		.delete {
			width: 100px;
			font-size: 14px;
			font-weight: 600;
			color: #fff;
			cursor: pointer;
			margin-top: 5px;
			height: 35px;
			text-align: center;
			border: none;
			background-size: 300% 100%;

			border-radius: 50px;
			moz-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}

		.delete:hover {
			background-position: 100% 0;
			moz-transition: all .4s ease-in-out;
			-o-transition: all .4s ease-in-out;
			-webkit-transition: all .4s ease-in-out;
			transition: all .4s ease-in-out;
		}

		.delete:focus {
			outline: none;
		}

		.delete.color-2 {
			background-image: linear-gradient(to right, #e12538, #fa4e84, #dd305b, #b6342b);
			box-shadow: 0 4px 15px 0 rgba(196, 49, 49, 0.75);
		}

		</style>
	</head>
</html>
<?php
	include("connection.php");


//for login session
	$userprofile = $_SESSION['user_name'];

	if($userprofile == true){
		
	}

	else
	{
		 header('location:admin_page.php');
	}

	//login ends

	$query	=	"SELECT * FROM user";
	$data 	=	mysqli_query($conn, $query);

	$total	=	mysqli_num_rows($data);
	
	



	if($total != 0){


		?>
		<h2 align="center"><mark class="disp">Displaying all records</mark></h2>
		<center>
			<table border="1" width="100%">
			<tr>
			<th width="10%">First Name</th>
			<th width="10%">Last Name</th>
			<th width="10%">Gender</th>
			<th width="10%">Email</th>
			<th width="10%">Phone</th>
			<th width="20%">Address</th>
			<th width="25%">Operations</th>
			</tr>

		<?php
		while($result	=	mysqli_fetch_assoc($data)){
			
			echo"
			<tr>
			<td>".$result["fname"]."</td>
			<td>".$result["lname"]."</td>
			<td>".$result["gender"]."</td>
			<td>".$result["email"]."</td>
			<td>".$result["phone"]."</td>
			<td>".$result["address"]."</td>


			<td>
			<a href='update_user.php?id=$result[id]'><input type='submit' value='Update' class='update color-3'></a>

			<a href='delete_user.php?id=$result[id]'><input type='submit' value='Delete' class='delete color-2' onclick ='return checkdelete()'></a></td>


			</tr>
			";
		}
	}

	else{
		"No records found";
	}

?>
</table>
</center>

   
<button onclick=" window.open('logout.php', '_blank'); return false;" value="LogOut"
	class="login-btn color-1">LogOut</button>

<script>
	function checkdelete()
	{
	  return confirm('Are you sure you want to delete this record?');
	   }
</script>
