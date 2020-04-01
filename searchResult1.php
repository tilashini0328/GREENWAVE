<?php 
include 'connection.php';
session_start();
if (isset($_GET['username']))
{
$user = $_GET['username'];
$get_user = $mysqli->query("SELECT * FROM user WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
       
}?>

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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<style>
.bg{
    background-image: url("home.jpeg");
}
</style>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


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
                                        <li><a href="adminIndex.php">Home</a></li>
                                       
                                        <li><a href="Material1.php">Maintain material</a>
											
										   </li>
										
										<li><a href="#">Submission<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="viewHistoryA.php">View Submission History</a></li>
                                              
                                            </ul>
                                        </li>

										
								<?php
									echo $_SESSION['adminUsername'];
									echo "<a href='adminLogout.php'> logout</a>";
									?>

                            </li>
                                    </ul>
                                </nav>
								
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
<br>
<br>
<br>
<br>
<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


	<div class="search form-group"  style="background-color: #7faf81;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search result</h3>
		
	</div>
	
<!-- result -->

					<?php 
					include('connection.php');
					

					$sql = " SELECT * FROM material";
					$result = mysqli_query($mysqli,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){

						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>materialID</th>
								<th>Material Name</th>
								<th>Description</th>
								<th>Points Per Kg</th>
								<th>Book</th>
								
							</tr>";
						while ($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['materialID']."</td>";
								echo "<td>".$row['materialName']."</td>";
								echo "<td>".$row['description']."</td>";
								
								echo "<td>".$row['pointsPerKg']."</td>";
								echo'<td>'.		
							'<form method="POST" action="viewHistoryA.php">
							<input type="hidden" name="materialID" value="'.$row['materialID'].'"/>
							<input type="submit" name="select" value="Select"/>
							
							</form></td>';						
								
						

								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
					<!-- result -->


	<button style="margin-left: 605px;background-color:#332f30;color: antiquewhite;width: 115px;height: 30px;margin-bottom: 5px;">
	<a href="search_doctor.php">Search Again</a></button>
	
 


	
	</div><!--  containerFluid Ends -->

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
        
                </div>
            </div>
        </div>
    </footer>
    <!-- footer_end  -->
    <!-- footer_end  -->

    <!-- link that opens popup -->

    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>


	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
