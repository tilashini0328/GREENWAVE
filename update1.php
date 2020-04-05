<?php
			
					
						include('connection.php');
						
						if(isset($_POST['submit'])){
							$submissionID = $_POST['submissionID'];
							 $recycler = $_POST['recycler'];
							$materialID  = $_POST['materialID'];
							$proposedDate  = $_POST['proposedDate'];
							$collector = $_POST['collector'];
							 $actualDate = $_POST['actualDate'];
							 $weightInKg = $_POST['weightInKg'];
							 $status = $_POST['status'];
				$pointsPerKg = 50;
			
			(int)$pointsAwarded = (int)$pointsPerKg * (int)$weightInKg;

						$sql = " UPDATE submission SET submissionID = '$submissionID',materialID = '$materialID',
                      recycler = '$recycler', collector = '$collector', proposedDate = '$proposedDate', actualDate = '$actualDate', weightInKg = '$weightInKg', pointsAwarded='$pointsAwarded', status = '$status' WHERE submissionID = '$submissionID'";
						
					if ( $mysqli->query($sql) == TRUE){
						 echo "<script>alert('Your submission has been updated!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}


    //Update collector's and recycler's points/
    $sql3 = "UPDATE user SET totalPoints = '$pointsAwarded' + totalpoints WHERE username = '$collector' OR username = '$recycler';";
    if ( $mysqli->query($sql3) == FALSE){
        echo "<br>Points Fail";
    }else{
        echo "<br>POINTS SUCCESS";
    }

    //Update ecoLevel/
    $sql4 = "SELECT totalPoints FROM user WHERE username = '$recycler';";
    $result4 = $mysqli-> query($sql4);

						
    if ($result4-> num_rows > 0){
        while($row4 =$result4-> fetch_assoc()){

            if($row4["totalPoints"] >= 1000 ){
                $sql5 = "UPDATE user SET ecoLevel = 'Eco-Warrior' WHERE username = '$recycler';";
                if ( $mysqli->query($sql5) == FALSE){
                    echo "<br>Eco-Warrior Fail";
                }else{
                    echo "<br>Ecolevel Updated";
                }
            }else if($row4["totalPoints"] >= 500 ){
                $sql6 = "UPDATE user SET ecoLevel = 'Eco-Hero' WHERE username = '$recycler';";
                if ( $mysqli->query($sql6) == FALSE){
                    echo "<br>Eco-Hero Fail";
                }else{
                    echo "<br>Ecolevel Updated";
                }
            }else if($row4["totalPoints"] >= 100 ){
                $sql7 = "UPDATE user SET ecoLevel = 'Eco-Saver' WHERE username = '$recycler';";
                if ( $mysqli->query($sql7) == FALSE){
                    echo "<br>Eco-Saver Fail";
                }else{
                    echo "<br>Ecolevel Updated";
                }
            }else{
                echo "<br>No Update";
            }
			
	}
	}
					}
					$selectID = $_POST['submissionID'];

					if(isset($_POST['del'])){
		$sql = " DELETE FROM submission WHERE submissionID = '$selectID'";

							if ($mysqli->query($sql) === TRUE) {
							    echo'<script type="text/javascript"> alert("Appointment Deleted."); 
                window.location= "colAppointment.php?rejected"
				</script>';
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$mysqli->close();
						}
											
					
						
						?>