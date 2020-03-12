
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
		$userType = mysqli_real_escape_string($db, $_POST['userType']);
		
		$chk="select * from user where username = '$username';";
		
		//store the above query
		$result= mysqli_query($db, $chk);
		
		//count the number of rows that username appeared in DB
		$num= mysqli_num_rows($result);
		
		if($num >= 1){
			echo '<script type="text/javascript"> alert("Username already taken.") 
			window.location= "recyclerLogin.php?formSubmitted";
				</script>';
		}
		else{
			if($userType == "recycler"){
				$ecolevel = "Newbie";
			}
			else{
				$ecolevel = '';
			}
			
			$schedule='';
			$totalPoints = 0;
			$materialID = '';
			
			
			
		
			
			
		
		
		//if there are no errors, save user to database
		if(count($errors)== 0){
			$sql = "INSERT INTO user (username, password, fullname, address, totalPoints, ecolevel, schedule, userType) 
						VALUES ('$username', '$password' , '$fullname' , '$address', '$totalPoints','$ecolevel', '$schedule','$userType' )";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			
			if($sql){
			echo '<script type="text/javascript"> alert("Register Successful!") 
			window.location= "recyclerLogin.php?formSubmitted";
				</script>';
			}
			
			
	}
	}
	
	}
				
?>