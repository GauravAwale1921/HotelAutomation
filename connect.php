<?php

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$rooms = $_POST["rooms"];
$number1 = $_POST["number1"];
$number2 = $_POST["number2"];

//var_dump($name,$email,$phone,$rooms,$number1,$number2,$date1,$date2);

$host = "localhost";
$dbname = "boss_db";
$username = "root";
$password = "";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_error()) {
    die("Connection error : " . mysqli_connect_error());

}
;

$sql = "INSERT INTO boss(name,email,phone,rooms,number1,number2)
VALUES(?,?,?,?,?,?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));

}
;
mysqli_stmt_bind_param($stmt, "sssiii", $name, $email, $phone, $rooms, $number1, $number2);

mysqli_stmt_execute($stmt);
echo"<script>alert('You have Successfully Booked & Completed the Transaction please Login using your mail and Phone Number');</script>";


?>


?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="wave.png">
	<div class="container">
		<div class="img">
			<img src="bg.svg">
		</div>
		<div class="login-content">
			<form method="POST" action="validation.php">
				<img src="avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="phone">
            	   </div>
            	</div>
            	
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="main.js"></script>
</body>
</html>
