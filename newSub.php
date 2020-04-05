<?php 


session_start();
if (isset($_POST['materialID'])){
    $_SESSION['user'] = $_POST['username'];
    $_SESSION['selectMID'] = $_POST['materialID'];
}


$user = $_SESSION['username'];

include 'connection.php';
if (isset($_GET['username']))
{
$user = $_GET['username'];
$get_user = $mysqli->query("SELECT * FROM submission WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
	
							
						
						
						
						
}}

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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<style>
.bg{
    background-image: url("record.jpg");
}
</style>
<body>
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
	

   
<!-- result -->
  <?php
	    $mysqli = new mysqli("localhost","root", "", "greenwave") or die (mysqli_error($mysqli));
	    $result = $mysqli->query("SELECT * FROM user WHERE username = '$user' ") or die($mysqli->error);
    ?>
		<div class="limiter">
		<div class="container-login100 bg" align="center">
			<div class="wrap-login100">	    
        <form id="submission" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="update.php" >
				
        <?php while($row = $result->fetch_assoc())
		$materialID = $row['materialID'];
			$recycler = $row['username'];
				$weightInKg = $row['weightInKg'];
				$collector = $row['collector'];
			
				{
			
			
			?>
			<span class="login100-form-title">
						RECORD SUBMISSION
					</span>
            <div class="wrap-input100 validate-input m-b-16">
            <label class="username">Recycler Username</label>
            <input type="text" class="form-control"  name="username" placeholder="username" required></input>
            </div>
            <br>
            <div class="wrap-input100 validate-input m-b-16">
            <label class="daysOfWeek">MaterialID</label>
            <input type="text" class="form-control"  name="materialID" placeholder="materialID" required ></input>
            </div>
            <br>
            <div class="wrap-input100 validate-input m-b-16">
            <label class="weightInKg">WeightInKg</label>
            <input type="text" class="form-control"  name="weightInKg" placeholder="weightInKg" required></input>
            </div>
            <br>
			<div class="wrap-input100 validate-input m-b-16">
            <label class="actualDate">Actual Date</label>
            <input type="date" class="form-control"  name="actualDate" placeholder="actualDate" required></input>
            </div>
			<br>
            <div class="wrap-input100 validate-input m-b-16">
            <label class="username">Collector Username</label>
            <input type="text" class="form-control"  name="collector" placeholder="username" required value="<?php echo $_SESSION['username']; ?>"disabled></input>
            </div>
            <br>
			
			
            <input class="btn btn-sm btn-primary" type="submit" value="Submit" name="submit" >
			
            <br>
			<label>
						  <input type="hidden" name="collector" value="<?php echo $_SESSION['username']; ?>">
						  
					</label><br><br>
		
        
			

					<?php }?>
					
        </form>
		
	</div>
	</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					

				<!-- confirming booking -->

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


