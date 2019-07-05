<?php
	include("../../php/DBConnector.php");

	$user_check = $_SESSION['login_user'];

	$ses_sql = mysqli_query($conn,"SELECT * FROM accounts JOIN reservation WHERE email = '$user_check'");

	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

	$userID = $row['userID'];
	$resID = $row['resID'];

	// $resID2 = mysqli_real_escape_string($conn, $_REQUEST['id']);
	$title = mysqli_real_escape_string($conn, $_REQUEST['title']);
	$facility = mysqli_real_escape_string($conn, $_REQUEST['facility']);
	$participants = mysqli_real_escape_string($conn, $_REQUEST['participants']);
	
	$updateQuery = "UPDATE reservation 
					SET title='$title', Venue='$facility', Participants='$participants'
					WHERE resID='$resID'";

	if(isset($_POST["submit"])){
		if ($conn->query($updateQuery) === TRUE) {
			// header("location: home_client.php");
			// echo $id;
			echo ($userID . '<br>' . $resID);
		} else {
			echo "Error: " . $updateQuery . "<br>" . $conn->error;
		}
	}	
	$conn->close();
?>	