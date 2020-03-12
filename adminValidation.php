<?php
$db = mysqli_connect('localhost', 'root', '', 'greenwave'); 

	$myusername = "tila";
	$mypassword = "12345";

 if(isset($_POST['loginAdmin'])){
	$username = mysqli_real_escape_string($db, $_POST['adminUsername']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	if($username == $myusername and $password == $mypassword){
		setcookie('adminUsername', $username, time()+60*60*7);
		header("location: adminIndex.php");
	}
	session_start();
	$_SESSION['adminUsername'] = $username;
	header("location: adminIndex.php");
	
	}else{
	echo "Username or Password is Invalid.,br> click here <a href='adminLogin.php'> try again</a>";
	
	
	header("location: adminLogin.php");}
 
 
 ?>