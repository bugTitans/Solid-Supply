<?php include("connection.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Form</title>
	<style>
					*
			{
				padding: 0;
				margin: 0;
				box-sizing: border-box;
			}

			body{
				background-color: #cecece;
				padding: 0 10px;
			}

			.container{
				max-width: 500px;
				width: 100%;
				background-color: white;
				margin: 20px auto;
				padding: 30px;
				box-shadow: 1px 1px 2px rgba(0, 0, 0, .19);
				border-radius: 19px 0 19px 0;
			}

			.container .title{
				font-size: 20px;
				font-weight: 700;
				margin-bottom: 25px;
				font-family: cursive;
				color: #1b9b9d;
				text-transform: uppercase;
				text-align: center;
			}

			.container .form{
				width: 100;
			}

			.container .form .input_field{
				margin-bottom: 15px;
				display: flex;
				align-items: center;
				border-radius: 25px;
				font-family: cursive;
			}

			.container .form .input_field label{
				width: 200px;
				margin-right: 10px;
				font-size: 15px;
				border-radius: 25px;
				font-family: cursive;
			}

			.container .form .input_field .input,
			.container .form .input_field .textarea{
				outline: none;
				width: 100%;	
				border: 1px solid grey;
				font-size: 15px;
				border-radius: 25px;
				padding: 8px 10px;
				transition: all 0.5s ease;
				font-family: cursive;
				color: grey;
				
			}

			.container .form .input_field .textarea{
				resize: none;
				height:50px;
			}

			.container .form .input_field .custom_select{
				position: relative;
				width: 100%;
				height: 35px;
				border-radius: 25px;

			}

			.container .form .input_field .custom_select select{
				-webkit-appearance: none;
				appearance: none;
				width: 100%;
				height: 100%;
				padding: 8px 10px;
				border: 1px solid grey;
				border-radius: 23px;
				outline: none;
				font-family: cursive;
			}

			.container .form .input_field .custom_select:before{
				content: "";
				position: absolute;
				top: 12px;
				right: 10px;
				border: 8px solid black;
				border-color: grey transparent transparent transparent;
				pointer-events: none;
			}

			.container .form .input_field .input:focus,
			.container .form .input_field .textarea:focus,
			.container .form .input_field select:focus {	
				border: 1px solid #fec107;
			}

			.container .form .input_field p{
				font-size: 15px;
				color: grey;

			} 

			.container .form .input_field .check{
				width: 15px;
				height: 15px;
				position: relative;
				display: block;
				cursor: pointer;
			}

			.container .form .input_field .check input[type="checkbox"]{
				position: absolute;
				top: 0;
				left: 0;
				opacity: 0;
			}

			.container .form .input_field .check .checkmark{
				width: 12px;
				height: 12px;
				border: 1px solid grey;
				display: block;
				position: relative;
				
			}

			.container .form .input_field .check .checkmark:before{
				position: absolute;
				content: "";
				top: 1;
				left: 1;
				width: 5px;
				height: 2px;
				border: 2px solid;
				border-color: transparent transparent white white;
				transform: rotate(-45deg);

			}

			.container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark{
				background: black;
			}

			.container .form .input_field .check input[type="checkbox"]:checked ~ .checkmark:before{
				background: block;
			}

			.container .form .input_field .btn{
				width: 100%;
				height: 50px;
				padding: 8px 10px;
				font-size: 19px;
				border: 0;
				background: purple;
				color: white;
				cursor: pointer;
				border-radius: 20px;
				font-family: cursive;
				outline: 0;
			}

			.container .form .input_field:last-child{
				margin-bottom: 0;
			}

			.container .form .input_field .btn:hover{
				color: black;
				background-color: #78fdff;
			}

			@media (max-width: 420px)
			{
				.container .form .input_field{
					flex-direction: column;
					align-items: flex-start;
			    }

			    .container .form .input_field label{
			    	margin-bottom: 5px;
			    }

			    .container .form .input_field.terms{
			    	flex-direction: row;
			    }
			}
	</style>
</head>

<body>

	<div class="container">
		<form action="#" method="POST">
		<div class="title">
			Registration Form
		</div>

		<div class="form">

			<div class="input_field">
				<label>First Name</label>
				<input type="text" class="input" name="fname" required>
			</div>

			<div class="input_field">
				<label>Last Name</label>
				<input type="text" class="input" name="lname" required>
			</div>

			<div class="input_field">
				<label>Password</label>
				<input type="Password" class="input" name="password" required>
			</div>

			<div class="input_field">
				<label>Gender</label>
				<div class="custom_select">
				<select name="gender" required>
					<option value="">Select</option>
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				</div>
			</div>

			<div class="input_field">
				<label>Email</label>
				<input type="email" class="input" name="email" required>
			</div>

			<div class="input_field">
				<label>Phone</label>
				<input type="text" class="input" name="phone" required>
			</div>

			<div class="input_field">
				<label>Address</label>
				<textarea class="textarea" name="address" required></textarea>
			</div>

			<div class="input_field terms">
				<label class="check">
					<input type="checkbox" required>
					<span class="checkmark"></span>
				</label>
				<p>I agree to terms and conditions</p>
			</div>

			<div class="input_field">
				<input type="submit" value="Register" class="btn" name="Register">
			</div>

		</div>
	</form>
	</div>

</body>

</html>


<?php 


	if($_POST['register'])
	{
		$fname 	 = $_POST['fname'];
		$lname 	 = $_POST['lname'];
		$pwd 	 = $_POST['password'];
		$gender  = $_POST['gender'];
		$email 	 = $_POST['email'];
		$phone 	 = $_POST['phone'];
		$address = $_POST['address'];


		if($fname != "" && $lname != "" && $pwd != "" && $gender != "" && $email != "" && $phone != "" && $address != "")
		{

	$query 	=	"INSERT INTO user(fname, lname, password, gender, email, phone, address) values('$fname','$lname','$pwd','$gender','$email','$phone','$address')";
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

?>