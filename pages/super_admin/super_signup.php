<?php
	include("../../php/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	
 

	<title>Account Management</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../stylesheet/style.css">
	<link rel="stylesheet" href="../../stylesheet/bootstrap.min.css">
	<link rel="stylesheet" href="../../stylesheet/superad.css">

	<h1>FACILITY RESERVATION SYSTEM</h1>
	<h1> Super Administrator</h1>
	<h3>
	   <?php
      echo  $login_session," ", $login_lastname;
   ?>
</h3>
	<h3><a href="../../php/logout.php" class="signup">Log Out</a></h3>
</head>
<body>

	<ul class="menu">
	  <li class="home"><a href="home_superad.php" class="home">HOME</a></li>
	  <li class="events"><a href="event_page_super.php" class="events">EVENTS</a></li>
	  <li class="faci"><a class="current" href="list_facilities_super.php" class="faci">FACILITIES</a></li>
	  <li class="req"><a href="list_of_requests_super.php" class="req">REQUEST</a></li>
	  <li class="rep"><a href="report_super.php" class="rep">REPORTS</a></li>
	  <li class="acc"><a href="super_signup.php" class="acc">ACCOUNTS</a></li>

	</ul>

	

	<h4> Accounts </h4>
	<table class="table table-striped table-bordered">
	<thead>
	<tr>
	<th>User Type</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Email</th>
	<th>Office</th>
	<th>Organization</th>
	<th>Position</th>
	<th>Update</th>
	</tr>
	</thead>
	<tbody>
	<?php
	include('../../php/DBconnector.php');

	if (isset($_GET['page_no']) && $_GET['page_no']!="") {
		$page_no = $_GET['page_no'];
		} else {
			$page_no = 1;
	        }

		$total_records_per_page = 10;
	    $offset = ($page_no-1) * $total_records_per_page;
		$previous_page = $page_no - 1;
		$next_page = $page_no + 1;
		$adjacents = "2"; 

		$result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM accounts");
		$total_records = mysqli_fetch_array($result_count);
		$total_records = $total_records['total_records'];
	    $total_no_of_pages = ceil($total_records / $total_records_per_page);
		$seconnd_last = $total_no_of_pages - 1; // total page minus 1

	    $result = mysqli_query($conn,"SELECT * FROM accounts where User_type =  'Client' or User_type ='Admin' or User_type = 'Undetermined' ");
	    while($row = mysqli_fetch_array($result)){
	    	$_SESSION['IDacc'] = $row ["userID"];
			echo "<tr>
				  <td>".$row['User_type']."</td>
				  <td>".$row['First_name']."</td>
		 		  <td>".$row['Last_name']."</td>
			   	  <td>".$row['email']."</td>
			   	  <td>".$row['Office']."</td>
			   	  <td>".$row['Organization']."</td>
			   	  <td>".$row['Position']."</td>
			   	  <td>"
			   	  	?>
					   	<!-- Update Button -->
					   	
			   	  	<?php
			   	  "</td>
			   	 </tr>";
	        }
		mysqli_close($conn);
	    ?>
	</tbody>
	</table>


	<form class ="modal-content-signup" action="welcome.php" method="post">
		First Name: <input type="text" name="fname" required><br>
		Last Name: <input type="text" name="lname" required><br>
		E-mail: <input type="email" name="email" required><br>
		Password: <input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
		Confirm Password: <input type="password" name="conpass" required><br>
		<input type="submit">

	</form>

	
</body>
</html>