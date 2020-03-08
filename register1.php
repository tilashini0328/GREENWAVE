
<?php
 session_start();

 $errors = array();
 
	// connect to the database
	$db = mysqli_connect('localhost', 'root', '', 'greenwave'); 
	
	//if the register button is clicked
	if(isset($_POST['register'])){
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$fullname = mysqli_real_escape_string($db, $_POST['fullname']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$totalPoints = mysqli_real_escape_string($db, $_POST['totalPoints']);
		$ecolevel = mysqli_real_escape_string($db, $_POST['ecolevel']);
		$schedule = mysqli_real_escape_string($db, $_POST['schedule']);
		$userType = mysqli_real_escape_string($db, $_POST['userType']);
		
	// ensure that form fields are filled properly
	if(empty($username)){
		array_push($errors, "Username is required"); //add error to errors array
	}
	if(empty($password)){
		array_push($errors, "Password is required"); //add error to errors array
	}
	if(empty($fullname)){
		array_push($errors, "Fullname is required"); //add error to errors array
	}
	
	
	//if there are no errors, save user to database
	if(count($errors)== 0){
		$sql = "INSERT INTO user (username, password, fullname, address, totalPoints, ecolevel, schedule, userType) 
					VALUES ('$username', '$password' , '$fullname' , '$address', '$totalPoints','$ecolevel', '$schedule','$userType' )";
		mysqli_query($db, $sql);
		$_SESSION['username'] = $username;
		$SESSION['success'] = "You are now logged in";
		header('location: recyclerIndex.php'); //redirect to home page
	}
	}
	

				
?>