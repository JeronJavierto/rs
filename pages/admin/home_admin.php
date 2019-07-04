<?php
	include("../../php/session.php");
?>
<!DOCTYPE html>
<html>
<head>
	
 

	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../stylesheet/style.css">
	<link rel="stylesheet" href="../stylesheet/bootstrap.min.css">
	<br>
	<br>
	<h1>FACILITY RESERVATION SYSTEM</h1>
	  <a href="../../index.php">
    <img src="../../images/final logo.png" alt="final-logo">
  	</a>
	<div class="prof">
		   <?php
      echo $login_session;
   ?>
</div>
<div class="logout"><a href="../../php/logout.php" class="signup">Log Out</a></div>
</head>
<body>

	<ul class="menu">
		<li class="home"><a class="current" href="home_admin.php" class="home">HOME</a></li>
		<li class="events"><a href="../../php/event_page_admin.php" class="events">EVENTS</a></li>
		<li class="faci"><a href="../../php/list_facilities_admin.php" class="faci">FACILITIES</a></li>
		<li class="req"><a href="../../php/list_of_requests_admin.php" class="req">REQUEST</a></li>
		<li class="rep"><a href="../../php/report_admin.php" class="rep">REPORTS</a></li>
	</ul>

	<?php include("homepage_admin_calendar.php"); ?>
</body>
</html>