<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
  <h1>FACILITY RESERVATION SYSTEM</h1>
</head>

<body>
  <ul class="menu"> 
    <li class="home_index"><a class="current" href="index.html" class="home">HOME</a></li>
    <li class="events_index"><a href="php/event_page_home.php" class="events">EVENTS</a></li>
    <li class="faci_index"><a href="php/list_facilities_home.php" class="faci">FACILITIES</a></li>    
  </ul>

  <?php include('calendar/homepage_calendar.php'); ?>

  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="loginB">LOGIN</button>
  <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;" class="signupB">SIGN UP</button>

  <div id="id01" class="loginmodal">
  <form class="modal-content animate" action="php/login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close_signin" title="Close Modal">&times;</span>
    </div>
    <div class="logincontainer">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required="">

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
    
<form class="modal-content-signup" action="php/signup.php" method="POST">
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

<!-- client sign up -->
      <div id="id03" class="modal_signup">
      		<span onclick="document.getElementById('id03').style.display='none'" class="close_s" title="Close">&times;</span>
      	<form class="modal-content-signup" action="php/signup_client.php" method="POST">
      		<div class="container_signup">
      		<p>Please fill in this form to create an account.</p>
      		<hr>
      <label for="frstn">First Name</label>
      <input type="text" placeholder="Enter First Name" name="FName" required>

      <label for="lstn">Last Name</label>
      <input type="text" placeholder="Enter Last Name" name="LName">

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required><br>      

      <label for="org">Organization</label>
      <input type="text" placeholder="Organization" name="organization" required="">

      <label for="posi">Position</label>
      <input type="text" placeholder="Position" name="position" required="">

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="Password" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="ConPassword" required>     

      <div class="clearfix_signup">
        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn_signup">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
      	</div>
      	</form>
      </div>

<!-- admin sign up -->
      <div id="id04" class="modal_signup">
      		<span onclick="document.getElementById('id04').style.display='none'" class="close_s" title="Close">&times;</span>
      	<form class="modal-content-signup" action="php/signup_admin.php" method="POST">
      		<div class="container_signup">
      		<p>Please fill in this form to create an account.</p>
      		<hr>
      <label for="frstn">First Name</label>
      <input type="text" placeholder="Enter First Name" name="admin_FName" required>

      <label for="lstn">Last Name</label>
      <input type="text" placeholder="Enter Last Name" name="admin_LName">

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="admin_email" required><br>      
      
      <input type="radio" name="admin_Office" value="SAO" checked="">Student Affairs Office<br>
      <input type="radio" name="admin_Office" value="SecOffice">Security Office<br>
      <input type="radio" name="admin_Office" value="CusOffice">Custodian’s Office<br>
      <input type="radio" name="admin_Office" value="DeanOffice">Dean’s Office<br>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="admin_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="admin_ConPassword" required>

      <div class="clearfix_signup">
        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn_signup">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
      	</div>
      	</form>
      </div>      

</body>
</html>