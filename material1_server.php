<?php
	
	session_start();
	
	$edit_state = false;
	$materialID = "";
	$materialName = "";
	$description = "";
	$pointsPerKg = "";
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'greenwave');
	
	// if save button is clicked
	if (isset($_POST['save'])) {
		$materialName = mysqli_real_escape_string($db, $_POST['materialName']);
		$description = mysqli_real_escape_string($db, $_POST['description']);
		$pointsPerKg = mysqli_real_escape_string($db, $_POST['pointsPerKg']);
		
		$query = "INSERT INTO material (materialName, description, pointsPerKg) VALUES ('$materialName','$description', '$pointsPerKg')";
		mysqli_query($db, $query);
		$_SESSION['msg'] = "Material saved";
		header('location: material1.php'); //redirect to index pg after insertting
	
	
	}
	
	//update records
	if(isset($_POST['update'])){
		$materialName = mysqli_real_escape_string($_POST['materialName']);
		$description = mysqli_real_escape_string($_POST['description']);
		$pointsPerKg = mysqli_real_escape_string($_POST['pointsPerKg']);
		
		mysqli_query ($db, "UPDATE material SET materialName = '$materialName', description='$description', pointsPerKg='$pointsPerKg' WHERE materialID=$materialID");
		$_SESSION['msg'] = "Material updated";
		header('location: material1.php');
	}
	
	//delete records
	if (isset($_GET['del'])) {
		
		$materialName = $_GET['del'];
		mysqli_query($db, "DELETE FROM material WHERE materialName = $materialName");
		$_SESSION['msg'] = "Material Deleted";
		header('location: material1.php');
		
		
	}
	
	//retrieve records
	$results = mysqli_query($db, "SELECT * FROM material");
	


?>