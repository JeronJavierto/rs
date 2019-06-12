<?php
	include('../../php/DBConnector.php');

	$Fname = mysqli_real_escape_string($conn, $_REQUEST['FName']);
	$Lname = mysqli_real_escape_string($conn, $_REQUEST['LName']);
	$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
	$password = mysqli_real_escape_string($conn, $_REQUEST['Password']);
	$ConPassword = mysqli_real_escape_string($conn, $_REQUEST['ConPassword']);

	$password = md5($password);
	$ConPassword = md5($ConPassword);

	$insertQuery = "INSERT INTO accounts (First_name, Last_name, email, password) VALUES ('$fname', '$lname', '$email', '$password')";

	if ($password == $ConPassword) {
		# code...
		// header("location: ../pages/admin/home_admin.php");
		echo(password_hash($password, PASSWORD_BCRYPT));
		
		// include("../")
		if (mysqli_query($conn, $insertQuery)) {
			# code...			
		}else{
			echo (mysqli_connect_error());
		}
	}else{
		echo("Password didn't matched");
	}
?>