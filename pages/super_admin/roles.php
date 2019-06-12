<?php
	include("../../php/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	
 

	<title>Roles and Privileges</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../stylesheet/style.css">
	<link rel="stylesheet" href="../stylesheet/bootstrap.min.css">
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
	</ul>



	
</body>
</html>