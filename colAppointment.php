<?php if(!isset($_SESSION)){
	session_start();
	
	}  
	
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GreenWave</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<style>
.bg{ background-color : #;}
</style>


	<!-- this is for donor registraton -->
	      <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/leaf_logo.jpg" alt="" height="50px" width="50px"> GreenWave</img>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="collectorIndex.php">Home</a></li>
                                       
                                        <li><a href="material1List.php">Material List</a>
										<li><a href="#">Submission<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="colAppointment.php">My Appointment /Record New Submission</a></li>
                                                <li><a href="viewHistoryC.php">View Submission History</a></li>
                                            </ul>
                                        </li>
                                       
                                    </ul>
                                </nav>
                               <?php   
								if (!isset($_SESSION['username'])) {
								?>  <a href="recyclerLogin.php";</a>
																
								<?php } else 
								if (isset($_SESSION['username'])) { 
								?>      
								<a href="cProfile.php?user=<?php echo $_SESSION['username'] ?>" title="View My Profile"><?php echo $_SESSION['username'] ?></a> | <a href="adminLogout.php">Logout</a>       
								<?php }  
								?>  
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="bg">
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">My Appoinment</h3>
		
		
	</div>
	<br>

		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('connection.php');
					

					$sql = " SELECT * FROM submission WHERE collector ='".$_SESSION["username"]."' AND status= 'proposed'";
					$result = mysqli_query($mysqli,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>Submission ID </th>
								<th>Recycler</th>
								<th>Material ID</th>
								<th>Proposed Date</th>
								<th>Status</th>
								
								<th>Select</th>
								
							
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['submissionID']."</td>";
								echo "<td>".$row['recycler']."</td>";
								echo "<td>".$row['materialID']."</td>";
								echo "<td>".$row['proposedDate']."</td>";
								echo "<td>".$row['status']."</td>";
								
								
								echo'<td>'.		
							'<form method="POST" action="acceptAppointment.php">
							<input type="hidden" name="submissionID" value="'.$row['submissionID'].'"/>
							<input type="hidden" name="recycler" value="'.$row['recycler'].'"/>
							<input type="hidden" name="materialID" value="'.$row['materialID'].'"/>
							<input type="hidden" name="proposedDate" value="'.$row['proposedDate'].'"/>
							<input type="hidden" name="pointsAwarded" value="'.$row['pointsAwarded'].'"/>
							<input class="btn btn-sm btn-primary" type="submit" name="select" value="Accept"/>
							<input class="btn btn-sm btn-primary" type="submit" value="Reject" name="del">
							
							
							</form></td>';
							
							
								echo "</tr>";
							
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No Appointment found..!!!</p>";
					}



					?>
					<br>
<br>
					<button type="button" onclick="window.location.href = 'newSub.php';" style="background-color:lighgreen;margin-left:auto;margin-right:auto;display:block;">
  Record New Submission
</button> 
			</div>
		
	
	
	

	



	
	</div><!--  containerFluid Ends -->
</div>
<br>
<br>
 <!-- footer_start  -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/leaf_logo.jpg" alt="" height="50px" width="50px">GreenWave</img>
                                </a>
                            </div>
							<h3> GreenWave 
                               IS THE CHOICE YOU NEED </h3>
                            <p>Recycle with us and save the environment<br></p>
                    
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Contacts
                            </h3>
                            <div class="contacts">
                                <p>+2(305) 587-3407 <br>
                                    info@loveuscharity.com <br>
                                    Flat 20, Reynolds Neck, North
                                    Helenaville, FV77 8WS
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                     
                    </div>
                </div>
            </div>
        </div>
       
    </footer>


	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
