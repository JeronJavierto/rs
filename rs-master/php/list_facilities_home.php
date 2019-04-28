<!DOCTYPE html>
<html>
<head>
  <title>Facilities</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../stylesheet/style.css">
  <link rel="stylesheet" href="../stylesheet/bootstrap.min.css">
  <h1>FACILITY RESERVATION SYSTEM</h1>
</head>

<body>

<ul class="menu"> 
    <li class="home_index"><a href="../index.html" class="home">HOME</a></li>
    <li class="events_index"><a href="event_page_home.php" class="events">EVENTS</a></li>
    <li class="faci_index"><a class="current" href="list_facilities_home.php" class="faci">FACILITIES</a></li>
  </ul>

<div style="width:700px; margin:0 auto;">
<br>
<table class="table table-striped table-bordered">
<thead>
<tr>
<th>Level</th>
<th>Room</th>
<th>Room Type</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<?php
include('DBconnector.php');

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

  $result_count = mysqli_query($conn,"SELECT COUNT(*) As total_records FROM `facility`");
  $total_records = mysqli_fetch_array($result_count);
  $total_records = $total_records['total_records'];
    $total_no_of_pages = ceil($total_records / $total_records_per_page);
  $seconnd_last = $total_no_of_pages - 1; // total page minus 1

    $result = mysqli_query($conn,"SELECT * FROM `facility` LIMIT $offset, $total_records_per_page");
    while($row = mysqli_fetch_array($result)){
    echo "<tr>
        <td>".$row['Level']."</td>
        <td>".$row['room']."</td>
        <td>".$row['roomType']."</td>
          <td>".$row['description']."</td>
          </tr>";
        }
  mysqli_close($conn);
    ?>
</tbody>
</table>

<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
  <?php // if($page_no > 1){ echo "<li><a href='?page_no=1'>First Page</a></li>"; } ?>
    
  <li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
  <a <?php if($page_no > 1){ echo "href='?page_no=$previous_page'"; } ?>>Previous</a>
  </li>
       
    <?php 
  if ($total_no_of_pages <= 10){     
    for ($counter = 1; $counter <= $total_no_of_pages; $counter++){
      if ($counter == $page_no) {
       echo "<li class='active'><a>$counter</a></li>";  
        }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }
        }
  }
  elseif($total_no_of_pages > 10){
    
  if($page_no <= 4) {     
   for ($counter = 1; $counter < 8; $counter++){     
      if ($counter == $page_no) {
       echo "<li class='active'><a>$counter</a></li>";  
        }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }
        }
    echo "<li><a>...</a></li>";
    echo "<li><a href='?page_no=$seconnd_last'>$seconnd_last</a></li>";
    echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";
    }

   elseif($page_no > 4 && $page_no < $total_no_of_pages - 4) {     
    echo "<li><a href='?page_no=1'>1</a></li>";
    echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";
        for ($counter = $page_no - $adjacents; $counter <= $page_no + $adjacents; $counter++) {     
           if ($counter == $page_no) {
       echo "<li class='active'><a>$counter</a></li>";  
        }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }                  
       }
       echo "<li><a>...</a></li>";
     echo "<li><a href='?page_no=$seconnd_last'>$seconnd_last</a></li>";
     echo "<li><a href='?page_no=$total_no_of_pages'>$total_no_of_pages</a></li>";      
            }
    
    else {
        echo "<li><a href='?page_no=1'>1</a></li>";
    echo "<li><a href='?page_no=2'>2</a></li>";
        echo "<li><a>...</a></li>";

        for ($counter = $total_no_of_pages - 6; $counter <= $total_no_of_pages; $counter++) {
          if ($counter == $page_no) {
       echo "<li class='active'><a>$counter</a></li>";  
        }else{
           echo "<li><a href='?page_no=$counter'>$counter</a></li>";
        }                   
                }
            }
  }
?>
    
  <li <?php if($page_no >= $total_no_of_pages){ echo "class='disabled'"; } ?>>
  <a <?php if($page_no < $total_no_of_pages) { echo "href='?page_no=$next_page'"; } ?>>Next</a>
  </li>
    <?php if($page_no < $total_no_of_pages){
    echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
    } ?>
</ul>
</div>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="loginB">LOGIN</button>
  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="signupB">SIGN UP</button>

  <div id="id01" class="loginmodal">
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close_signin" title="Close Modal">&times;</span>
    </div>
    <div class="logincontainer">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Username" name="email" required="">

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required="">   
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn_login">Cancel</button>  
      <button type="submit" class="loginbtn">LOGIN</button>   
    </div>
  </form>
</div>

<div id="id02" class="modal_signup">
      <span onclick="document.getElementById('id02').style.display='none'" class="close_s" title="Close">&times;</span>   
    
<form class="modal-content-signup" action="signup.php" method="POST">
    <div class="container_signup">
      <p>Sign Up</p>
      <div class="signup-body">
      <div class="client">
      <button type="button" onclick="document.getElementById('id03').style.display='block'" class="clientbtn">CLIENT</button>  
      </div>
      <div class="admin">
      <button type="button" onclick="document.getElementById('id04').style.display='block'" class="adminbtn">ADMIN</button>  
    </div>
    </div>
  </form>
</div>

      <div id="id03" class="modal_signup">
          <span onclick="document.getElementById('id03').style.display='none'" class="close_s" title="Close">&times;</span>
        <form class="modal-content-signup" action="signup.php" method="POST">
          <div class="container_signup">
          <p>Please fill in this form to create an account.</p>
          <hr>
      <label for="frstn">First Name</label>
      <input type="text" placeholder="Enter First Name" name="FName" required>

      <label for="lstn">Last Name</label>
      <input type="text" placeholder="Enter Last Name" name="LName">

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>      

      <label for="org">Organization</label>
      <input type="text" placeholder="Organization" name="organization" required="">

      <label for="posi">Position</label>
      <input type="text" placeholder="Position" name="position" required="">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="ConPassword" required>     

      <div class="clearfix_signup">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn_signup">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
        </div>
        </form>
      </div>

      <div id="id04" class="modal_signup">
          <span onclick="document.getElementById('id04').style.display='none'" class="close_s" title="Close">&times;</span>
        <form class="modal-content-signup" action="signup.php" method="POST">
          <div class="container_signup">
          <p>Please fill in this form to create an account.</p>
          <hr>
      <label for="frstn">First Name</label>
      <input type="text" placeholder="Enter First Name" name="FName" required>

      <label for="lstn">Last Name</label>
      <input type="text" placeholder="Enter Last Name" name="LName">

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>      

      <label for="org">Office</label>
      <input type="text" placeholder="Organization" name="organization" required="">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="ConPassword" required>
      
      <div class="clearfix_signup">
        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn_signup">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
        </div>
        </form>
      </div>

</body>
</html>