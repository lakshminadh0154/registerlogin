<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
	<style>
	body {
		background-image: url('3ZzL.gif');
		background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

	}
	#link{
		color :white;
		padding: 50%;
	}
	#hed{
		color:white;
		text-align: center;
	}
	#bol{
		color:white;
		margin-left: 10%;
	}
	</style>

	<b><a id = link href="logout.php">Logout</a></b>
	<h1 id = hed>This is the index page</h1>

	<br>
	<b id = bol > Hello, <?php echo $user_data['user_name']; ?></b>
</body>
</html>