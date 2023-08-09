<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Directory</title>
</head>
<style>
		* {
			background-color: #111;
			margin: 0;
			padding: 0;
		}

		.logo {
			color: #fff;
			font-family: Arial, Helvetica, sans-serif;
			font-size: 200%;
			margin: 3% 2%;
		}

		.buttons {
			margin: 10%;
			text-align: center;
		}

		.login-btn {
			width: 300px;
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
<body>
	

	<div class="container">
		<div class="title">
			<h4 class="logo">User Directory</h4>

	<div class="buttons">
    	<button onclick=" window.open('sand.php', '_blank'); return false;" class="login-btn color-1">Sand Data</button>
    	<!--<button class="login-btn color-2">Supervisor Login</button>-->
    	<button onclick=" window.open('brick.php', '_blank'); return false;" class="login-btn color-3">Brick Data</button>
	</div>

			
		</div>
	</div>


</body>

</html>
