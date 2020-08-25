<?php
include("connection.php");


	if(isset($_POST['Sign_up'])){

	$name = $_POST['username'];
	$pass = $_POST['pass'];
	$phnnumber = $_POST['phnnumber'];
	$email = $_POST['email'];
	$occupation = $_POST['occupation'];
	$gender = $_POST['gender'];
	$nationality = $_POST['nationality'];


	if($name == ''){
		echo "<script>alert('We can not verify your name')</script>";
	}



	$check_email = "SELECT * from userform where useremail='$email'";
	$run_email = mysqli_query($con,$check_email);

	$check = mysqli_num_rows($run_email);

	if($check==1){

	echo "<script>alert('Email already exist, please try another!')</script>";
	echo "<script>window.open('login.php','_self')</script>";
	exit();
	}

	$insert = "INSERT INTO userform (username,password, useremail, phnnum, occupation,gender,nationality) VALUES ('$name','$pass','$email','$phnnumber','$occupation','$gender','$nationality')";

	$query = mysqli_query($con, $insert);

	if($query){

	echo "<script>alert('Congratulations $name, your account has been created successfully.')</script>";

	}
	else {

	echo "<script>alert('Registration failed, try again!')</script>";
	echo "<script>window.open('login.php','_self')</script>";
	}
}
?>
