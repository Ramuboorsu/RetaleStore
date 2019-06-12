<?php
session_start();
include "db.php";
if (isset($_POST["submit"])) {

	$f_name = $_POST["f_name"];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$password = $_POST['pass'];
	$repassword = $_POST['cpass'];
	$mobile = $_POST['mobilenum'];
	
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";

if(empty($f_name) ||  empty($email) || empty($password) || empty($repassword) ||
	empty($mobile) ){
		
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>PLease Fill all fields..!</b>
			</div>
		";
		exit();
	} else {
		if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
		exit();
	}

	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}
	if(strlen($password) < 6 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 6 ){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Password is weak</b>
			</div>
		";
		exit();
	}
	if($password != $repassword){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>password is not same</b>
			</div>
		";
	}
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 10)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 10 digit</b>
			</div>
		";
		exit();
	}
	//existing email address in our database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email Address is already available Try Another email address</b>
			</div>
		";
		exit();
	} else {
		echo '<script>alert("hello");</script>';
		$password = md5($password);
		$sql1 = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`,`address1`,`address2`,`country`,`address_instruction`) 
		VALUES (NULL, '$f_name','$l_name', '$email', 
		'$password', '$mobile','','','','')";
		$run_query = mysqli_query($con,$sql);
		$_SESSION["uid"] = mysqli_insert_id($con);
		$_SESSION["name"] = $f_name;
		$ip_add = getenv("REMOTE_ADDR");
		$sql = "UPDATE cart SET user_id = '$_SESSION[uid]' WHERE ip_add='$ip_add' AND user_id = -1";
		if(mysqli_query($con,$sql1)>0){
			echo '<script>alert("registered");</script>';
			echo '<script>window.location.href=("login_form.php");</script>';

			exit();
		}

		else 
		{
			echo '<script>alert("not registered.check once");</script>';
		}
	}
	}
	
}



?>






















































