
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "itproject";

$conn = new mysqli($servername, $username, $password, $dbname);
if (!isset($_SESSION)) {
	session_start();
}

if ($conn -> connect_error) {
	die("Connection failed: " . $conn -> connect_error);
}


?>
<html>
<body>
	
	<div id="box">
		<div class="column"></div>
		<div class="column"> 
			<div class="clear"></div> 
			<select name="facility">
				<option>Select</option>
				<?php 

				$sqli = "SELECT room FROM facility";
				$result = mysqli_query($conn, $sqli);
				while ($row = mysqli_fetch_array($result)) {
					 		# code...
					echo '<option>'.$row['room'].'</option>';
					echo("<br>");
				}	

				?>
			</select>
			<br>
			<br>
		</div>
		<div class="clear"></div>  
		<div class="clear"></div>   
		
	</div>
	<div class="column"></div> 
</div>