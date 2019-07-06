<?php
	include('../../php/DBConnector.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Room Matrix Test</title>
	<link rel="stylesheet" href="../../stylesheet/style.css">
	<h1>FACILITY RESERVATION SYSTEM</h1>
</head>


<body>


<form action="#" method ="POST" align ="center">
<select class="form-dropdown validate[required]" style="width:150px" id="title" name="title">
<?php
	$sql = "SELECT DISTINCT title FROM reservation ";
	$result = $conn-> query($sql);
	$title="";
	if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo '<option value="'.$row['title'].'">'.$row['title'].'</option>';
		}
		echo "</select>";
	}else{
		echo "0 result";
	}
?>
</select>

<select class="form-dropdown validate[required]" style="width:150px" id="venue" name="venue">
<?php
	$sql = "SELECT DISTINCT venue FROM reservation";
	$result = $conn-> query($sql);
	$venue="";
	if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo '<option value="'.$row['venue'].'">'.$row['venue'].'</option>';
		}
		echo "</select>";
		echo "<input type='submit' name='submit2' value='Search' >";
		echo "</form>";
		
		if(isset($_POST['submit2'])){
			
			
			$title = $_POST['title'];
			$venue = $_POST['venue'];
		}
		echo "<br/>";
	}else{
		echo "0 result";
	}
?>
</select>

	<table id="customers">
		<tr>
			<td> Title</td>
			<td> Venue </td>
			<td> Start Time </td>
			<td> End Time </td>
			<td> Total Hours</td>

		</tr>
<?php
	$sql = "SELECT *, TIMESTAMPDIFF(hour, start_event, end_event)TimeDifference FROM reservation where title= '".$title ."' AND venue='" .$venue . "'" ;
	$result = $conn-> query($sql);
	if ($result-> num_rows > 0){
		while ($row = $result-> fetch_assoc()){
			echo "<tr>
					<td>" . $row["title"] . "</td>
					<td>" . $row["Venue"] . "</td>
					<td>" . $row["start_event"] . "</td>
					<td>" . $row["end_event"] . "</td>
					<td>" . $row["TimeDifference"] . "</td>
				  </tr> ";
		}
		echo "</table>";
	}else{
		echo "0 result";
	}
?>

<?php
	$sql = "SELECT ((DATEADD(start_event,end_event))/365.0)*100.0 AS Usage from reservation" ;
		$result = $conn-> query($sql);
		if ($result-> num_rows > 0){
			while ($row = $result-> fetch_assoc()){
				echo "This: ". $row["Usage"] . "!";
			}
			echo "</table>";
		}else{
			echo "0 result";
		}
?>





	</table>
</body>
</html>