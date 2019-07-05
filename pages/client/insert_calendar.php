<?php
	include("../../php/DBConnector.php");

	$user_check = $_SESSION['login_user'];

	$ses_sql = mysqli_query($conn,"SELECT * FROM accounts JOIN reservation WHERE email = '$user_check'");

	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$userID = $row['userID'];

	$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
	$start_event = mysqli_real_escape_string($conn, $_REQUEST['start']);
    $end_event = mysqli_real_escape_string($conn, $_REQUEST['end']);   
	

	$query = "INSERT INTO reservation (user_ID, title, start_event, end_event) 
			  VALUES ('$userID', '$title', '$start_event', '$end_event')";
			
	// if (isset($_POST["title"])){
		if ($conn->query($query) === TRUE) {
			// echo ":)";
			// echo ($userID . '<br>' . $id);
			// header("location: home_client.php");
			echo ($userID . '<br>' . $resID);
		} else {
			echo "Error: " . $query . "<br>" . $conn->error;
		}
//    }
	$conn->close();
?>	