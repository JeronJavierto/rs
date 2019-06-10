<html>
	<head>
		<title>
			Create Account

		</title>
		  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="stylesheet/style.css">
	 </head>
	 <body>
	 	<div id="id02" class="modal_signup">
      <span onclick="document.getElementById('id02').style.display='none'" class="close_s" title="Close">&times;</span>   
    
<form class="modal-content-signup" action="signup.php" method="POST" autocomplete="off">
    <div class="container_signup">
      <p>Create New Account</p>
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
      	<form class="modal-content-signup" action="php/signup_client.php" method="POST" autocomplete="off">
      		<div class="container_signup">
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
        <button type="submit" class="signupbtn">Create Client Account</button>
      </div>
      	</div>
      	</form>
      </div>

<!-- admin sign up -->
      <div id="id04" class="modal_signup">
      		<span onclick="document.getElementById('id04').style.display='none'" class="close_s" title="Close">&times;</span>
      	<form class="modal-content-signup" action="php/signup_admin.php" method="POST" autocomplete="off">
      		<div class="container_signup">
      		<hr>
      <label for="frstn">First Name</label>
      <input type="text" placeholder="Enter First Name" name="admin_FName" required autocomplete="off">

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
        <button type="submit" class="signupbtn">Create Admin Account</button>
      </div>
      	</div>
      	</form>
      </div>  


	 </body>


</html>