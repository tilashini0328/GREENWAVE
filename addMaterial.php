<?php 
session_start();
$username = $_SESSION['username'];
$mysqli = new mysqli("localhost", 'root', '', 'greenwave'); 

	$type=$_POST['add'];
	
	$query = "SELECT materialID FROM user WHERE username = '$username';";
	$result = $mysqli -> query($query);
	if ( $mysqli->query($query) == FALSE){
    echo "<br> FAIL";
	}

if ($result-> num_rows > 0){
	
	while($row = $result-> fetch_assoc()){
	

	for($i = 0; $i < count($type); $i++){
		$currentMaterialId = $type[$i];
		
		if($row['materialID'] == 0){
            $sql2 = "UPDATE user SET materialID = '$currentMaterialId' where username = '$username';";
            $result2 = $mysqli-> query($sql2);
            
            if ( $mysqli->query($sql2) == FALSE){
                echo "<br> insert materialID FAIL";
            }else{
				echo '<script type="text/javascript"> alert("Material Added."); 
                window.location= "material1List.php?formSubmitted";
				</script>';
            }
        }else{
			
            $conCat = $row['materialID'].','.$currentMaterialId;
            $sql3 = "UPDATE user SET materialID = '$conCat' WHERE username = '$username';";
            $result3 = $mysqli-> query($sql3);
			echo '<script type="text/javascript"> alert("Material Added."); 
                window.location= "material1List.php?formSubmitted";
				</script>';
		}
	}
	}
	
} 
?>