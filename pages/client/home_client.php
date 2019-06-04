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
	<h1>FACILITY RESERVATION SYSTEM</h1>
	<h3>
	   <?php
      echo  $login_session," ", $login_lastname;
   ?>
</h3>

	<h3><a href="../../php/logout.php" class="signup">Log Out</a></h3>
</head>
<body>
	<ul class="menu">
		<li class="home"><a class="current" href="home_client.php" class="home">HOME</a></li>
		<li class="events"><a href="../../php/event_page_client.php" class="events">EVENTS</a></li>
		<li class="faci"><a href="../../php/list_facilities_client.php" class="faci">FACILITIES</a></li>
		<li class="faci"><a href="../../php/report.php" class="faci">REPORT</a></li>
	</ul>

	<?php include("homepage_client_calendar.php"); ?>
</body>
</html>