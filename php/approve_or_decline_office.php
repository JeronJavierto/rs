<?php
	include('DBConnector.php');	


	$user_check = $_SESSION['IDres'];
	   
	$ses_sql = mysqli_query($conn,"SELECT * FROM reservation WHERE resID = '$user_check'");
	   
	$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
	   
	$login_session = $row['resID'];
	$succ = "Record updated successfully";


	if(isset($_POST["Approve"])){
		$approve = "UPDATE reservation SET status = 'Approved' WHERE resID = '$login_session'";
		if (mysqli_query($conn, $approve)) {
		    echo "<script language='javascript'>
		    		alert('$succ');
		    	</script>
		    ";
		    header("location: list_of_requests_office.php");
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}

		mysqli_close($conn);
	}elseif(isset($_POST["Decline"])){
		$decline = "UPDATE FROM reservation SET status = 'Declined' WHERE resID = '$login_session'";
		if (mysqli_query($conn, $decline)) {
		    echo "Reservation declined";
		} else {
		    echo "Error updating record: " . mysqli_error($conn);
		}
	}
?>