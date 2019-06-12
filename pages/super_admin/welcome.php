<?php
include('../../php/DBConnector.php');

$fname = mysqli_real_escape_string($conn, $_REQUEST['fname']);
$lname = mysqli_real_escape_string($conn, $_REQUEST['lname']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$pass = mysqli_real_escape_string($conn, $_REQUEST['pass']);
$conpass = mysqli_real_escape_string($conn, $_REQUEST['conpass']);

$pass = md5($pass);
$conpass = md5($conpass);

$insertQuery = "INSERT INTO accounts (First_name, Last_name, email, Password) VALUES ('$fname', '$lname', '$email', '$pass')";

$email2= "SELECT * FROM accounts where email = '".$_POST['email']."'";
$message = "Email already taken";
$failPass = "Passwords didn't match";

// echo $office;

	if($result=mysqli_query($conn,$email2)){

		if(mysqli_num_rows($result)>0){
			// header("location: ../index.php");
			echo "<script type='text/javascript'>alert('$message');
				window.location.href='super_signup.php';
			</script>";



		}elseif ($pass != $conpass){			
			echo "<script type='text/javascript'>window.alert('Passwords do not match');
				window.location.href='super_signup.php';
			</script>";
			
				
		}elseif (mysqli_query($conn, $insertQuery)) {
			
			echo "<script type='text/javascript'>alert('User successfully Created');
				window.location.href='super_signup.php';
			</script>";	
		}else{
			echo "Error: " . $insertQuery . "<br>" . mysqli_error($conn);
		}
}
?>