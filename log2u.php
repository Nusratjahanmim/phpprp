<?php
session_start();

include_once "connection.php";

	if(isset($_POST['Sign_in'])){

	$name = $_POST['username'];
	$pass = $_POST['pass'];

	$select_user = "SELECT * FROM userform WHERE username ='$name' AND password ='$pass'";

	$query = mysqli_query($con,$select_user);

	$check_user = mysqli_num_rows($query);


	if($check_user==1){

	$_SESSION['username']=$name;
  $_SESSION['start']=time();

  $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;

	$user = $_SESSION['username'];
	$get_user = "SELECT * FROM userform WHERE username='$user'";
	$run_user = mysqli_query($con,$get_user);
	$row=mysqli_fetch_array($run_user);

	$user_name = $row['username'];

	echo "<script>window.open('home.php?username=$user_name','_self')</script>";

}else if($name==0){
		echo "<div class='alert alert-danger'>
		  <strong>Check your nane!</strong>
		</div>";
	}
	else if($pass==0) {
	echo "<div class='alert alert-danger'>
	  <strong>Check your password!</strong>
	</div>";
}else{
	echo "<div class='alert alert-danger'>
	  <strong>You don't have an account!</strong>
	</div>";
}

	}


?>
