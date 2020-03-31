<?php
	
	session_start();
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'greenwave');
	if (isset($_GET['username']))
{
$user = $_GET['username'];
$get_user = $mysqli->query("SELECT * FROM user WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
		
	
	
	$update = false;
	$submissionID = 0;
	$materialID = "";
	$recycler = "";
	$collector = $user;
	$weightInKg = "";
	$status = "";
}
	
	// if save button is clicked
	
	if (isset($_POST['save'])) {
		$materialID = $_POST['materialID'];
		$recycler = $_POST['username'];
		$weightInKg = $_POST['weightInKg'];
		$status = $_POST['status'];

		mysqli_query($db, "INSERT INTO submission (submissionID, materialID,recycler,collector,weightInKg,status) VALUES ('$submissionID','$materialID',$recycler','$collector','$weightInKg','$status')");
		$_SESSION['message'] = "Submission recorded"; 
		header('location: submission.php');
	}
	
	
	//update records
	
	if (isset($_POST['update'])) {
		$submissionID = $_POST['submissionID'];
		$materialID = $_POST['materialID'];
		$recycler = $_POST['recycler'];
		$collector = $_POST['collector'];
		$weightInKg = $_POST['weightInKg'];
		$status = $_POST['status'];

	mysqli_query($db, "UPDATE submission SET materialID='$materialID', recycler='$recycler', collector ='$collector', weightInKg = '$weightInKg', status = '$status' WHERE submissionID= $submissionID");
	$_SESSION['message'] = "Appointment updated!"; 
	header('location: submission.php');
}
	
	//delete records
	
	
	if (isset($_GET['del'])) {
	$materialID = $_GET['del'];
	mysqli_query($db, "DELETE FROM submission WHERE submissionID = $submissionID");
	$_SESSION['message'] = "Material deleted!"; 
	header('location: submission.php');
	}
	

	//retrieve records
	$results = mysqli_query($db, "SELECT * FROM submission");
	
	


?>