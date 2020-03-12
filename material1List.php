<?php include('material1_server.php'); 
?>

<html class="no-js" lang="zxx">

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

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                               
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">
                                <a href="#">
                                    <i class=""></i>
                                </a>
                                <a href="#">
                                    <i class=""></i>
                                </a>
                                <a href="#">
                                    <i class=""></i>
                                </a>
                                <a href="#">
                                    <i class=""></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="collectorIndex.php">
                                    <img src="img/leaf_logo.jpg" alt="" height="50px" width="50px"> GreenWave</img>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
									<li><a href="collectorIndex.php">Home</a></li>
                                        <li><a href="material1List.php">Material List<i class=""></i></a>
										<li><a href="#">View Submission<i class=""></i></a>
                                        </li>
                                    </ul>
                                </nav>
								 <?php   
								if (!isset($_SESSION['username'])) {
								?>  <a href="recyclerLogin.php";</a>
																
								<?php } else 
								if (isset($_SESSION['username'])) { 
								?>      
								<a href="profile.php?user=<?php echo $_SESSION['username'] ?>" title="View My Profile"><?php echo $_SESSION['username'] ?></a> | <a href="adminLogout.php">Logout</a>       
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
    <!-- header-end -->

    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Maintain Material </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
	<br>
	
    <!-- reson_area_start  -->
		<div class="bs-example" >
		<br>
		<h1>List of Materials</h1>
<?php $results = mysqli_query($db, "SELECT * FROM material"); ?>   
   <form method="post" action="addMaterial.php">
   <table>
		<thead>
		
			<table class="table table-condensed">
    <thead>
      <tr>
        <th>MaterialID</th>
        <th>Name</th>
        <th>Description</th>
		<th>PointsPerKg</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
     
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				
				<td><?php echo $row['materialID']; ?></td>
				<td><?php echo $row['materialName']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['pointsPerKg']; ?></td>
				<td><input type="checkbox" name="checkbox[]" value="'.$materialID.'" /></td>
				
				
			</tr>
		<?php } ?>

		</thead>
			
	<br>
	</table>
			<button class="btn" type="submit" name="add" >Add material</button>
	</form>
	
	
	
	

	
	
</div>

    <!-- reson_area_end  -->
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
                                <p>03 - 912345678<br>
                                    greenwave.com <br>
                                    Wave 20, Petaling Jaya, PJ
                                    Selangor,543000.
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
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
	<!------->
	
</body>
</html>