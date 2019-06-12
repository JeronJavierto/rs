<?php
  include('../../php/DBConnector.php');
  include('../../php/session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Events</title>
  <link rel="stylesheet" href="../../stylesheet/style.css">
  <link rel="stylesheet" href="../../stylesheet/bootstrap.min.css">
  <h1>FACILITY RESERVATION SYSTEM</h1>
  <h1>Super Administrator</h1>
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

  <table id="customers">
    <tr>
      <th>Event Name</th>
      <th>Venue</th>
      <th>Time Start</th>
      <th>Time End</th>            
    </tr>

<?php

  $sql = "SELECT * FROM reservation WHERE status LIKE 'Approved'";
  $result = $conn-> query($sql);

  if ($result-> num_rows > 0){
    while ($row = $result-> fetch_assoc()){
      echo "<tr>
          <td>" . $row["title"] . "</td>
          <td>" . $row["Venue"] . "</td>          
          <td>"  . $row["start_event"] . "</td>
          <td>" . $row["end_event"] . "</td>          
          </tr>";
    }
    echo "</table>";
  }else{
    echo "0 result";
  }

  $conn-> close();
?>

  </table>
</body>
</html>