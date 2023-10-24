<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$age = $_POST['age'];
		$phonenumber= $_POST['phonenumber'];
		$name = $_POST['name'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];
		$image = $_POST['image'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && is_numeric($age) && is_numeric($phonenumber)&& !empty($name) && !empty($email) && !empty($dob) && !empty($image))
		{
		if ($phonenumber >= 1000000000 && $Phonenumber <= 9999999999 ){
		

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,age,phonenumber,name,email,dob,image) values ('$user_id','$user_name','$password','$age','$phonenumber','$name','$email','$dob','$image')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	<style type="text/css">
	body {
		background-image: url('aab.jpg');
		background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;

	}
	#text{
        
		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: blue;
		border: none;
	}

	#box{

		background-color: #F0E68C;
		margin: auto;
		width: 500px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: blue;">Signup</div>
			<label>User name</lable>
			<input id="text" type="text" name="user_name" ><br><br>
			<lable>Name</lable>
			<input id="text" type="text" name="name" ><br><br>
			<lable>Password</lable>
			<input id="text" type="password" name="password" ><br><br>
			<lable>Age</plable>
			<input id="text" type="int" name="age" ><br><br>
			<lable>phonenumber</lable>
			<input id="text" type="number" name="phonenumber" ><br><br>
			<lable>Email</lable>
			<input id="text" type="email" name="email" ><br><br>
			<lable>Date of birth</lable>
			<input id="text" type="date" name="dob" ><br><br>
			<lable>Profile pic</lable>
			<input id="text" type="file" name="image"  accept = ".png, .jpg, .jpeg"><br><br>

			
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>