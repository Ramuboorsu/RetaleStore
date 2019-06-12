<?php



?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}


fieldset{
	width:30%;
	margin:0px 500px;
	
	text-align:center
	
	
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 12px;
  background-color: white;
}

/* Full-width input fields */
input[type=text],input[type=tel], input[type=password] {
  width: 100%;
  padding: 10px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}


.cancelbtn {
  background-color: red;
  color: white;
  padding: 16px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}


.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
<fieldset>
	
	<legend> <h1>Register</h1></legend>
<form method="post" action="register.php">
  <div class="container">
   
   <label for="email"><b>First Name</b></label>
    <input type="text" placeholder="Enter Name" name="f_name" required>

    <label for="email"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="l_name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
    
    <label for="psw-repeat"><b>Mobile Number</b></label>
    <input type="tel" placeholder="MobileNumber" name="mobilenum" 
       required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpass" required>
   
   

    <button type="submit" class="registerbtn" name="submit">Register</button>
    
     <button type="reset" class="cancelbtn" name="cancel">Reset</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="login_form.php">Sign in</a>.</p>
  </div>
</form>
</fieldset>
</body>
</html>
