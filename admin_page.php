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
		<input type="password" name="password" class="textfild" placeholder="Password">

		<input type="submit" name="login" value="Login" class="btn">

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
		$username = $_POST['username'];
		$pwd = $_POST['password'];

		$query="SELECT * FROM admin WHERE email = '$username' && password = '$pwd' ";
		$data =  mysqli_query($conn, $query);

		$total = mysqli_num_rows($data);

		//echo $total;

		?>

		<?php

		if ($total == 1) {
			$_SESSION['user_name'] = $username;
		 header('location:admin_directory.php');
	}
	else{
		//echo "login failed";
	}
}
?>