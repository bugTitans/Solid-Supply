<?php

	session_start();

?>









<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="user_page.css">
	
	<title>ADMIN LOGIN</title>
</head>
<body>

<div class="center">
	<h1>Login</h1>

	<form action="#" method="POST">

<form>

	<div class="form">
		<input type="text" name="username" class="textfild" placeholder="Username">

		<input type="submit" name="login" value="Send Link" class="btn">

		<div class="signup">New Member?<a href="admin_form.php" class="link" >SignUp Here </a></div>

		</div>

	</div>

</form>


</body>
</html>

<?php

	include("connection.php");

	if(isset($_POST['login']))
	{
		$username = mysqli_real_escape_string($con, $_POST['username']);

		$query="SELECT * FROM admin WHERE email = '$username'";

		$data =  mysqli_query($conn, $query);

		$total = mysqli_num_rows($data);

		if($total){
			
		}

		//echo $total;

		?>

		<?php
}
?>