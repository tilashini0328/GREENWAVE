<?php include('material1_server.php'); 

	//fetch the record to be updated
	if (isset($_GET['edit'])){
		$materialID = $_GET['edit'];
		$edit_state = true;
		$rec = mysqli_query($db, "SELECT * FROM material WHERE materialID");
		$record = mysqli_fetch_array($rec);
		//$materialID = $record['materialD'];
		$materialName = $record['materialName'];
		$description = $record['description'];
		$pointsPerKg = $record['pointsPerKg'];
		
	}
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
                                <a href="index.html">
                                    <img src="img/leaf_logo.jpg" alt="" height="50px" width="50px"> GreenWave</img>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
									<li><a href="home.html">Home</a></li>
                                        <li><a href="Material1.html">Maintain Material<i class=""></i></a>
										<li><a href="#">View Submission<i class=""></i></a>
                                        </li>
                                    </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a data-scroll-nav='1' href="#">Login / Sign Up</a>
                                    </div>
                                </div>
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
		<?php if(isset($_SESSION['msg'])); ?>
			<div class="msg">
				<?php 
					echo $_SESSION['msg'];
					//unset($_SESSION['msg']);
				?>
			</div>
		<?php   ?>
	
    <!-- reson_area_start  -->
		<div class="bs-example" >
		<br>
		<h1>List of Materials</h1>
    <table>
		<thead>
		
			<table class="table table-condensed">
    <thead>
      <tr>
        <th>MaterialID</th>
        <th>Name</th>
        <th>Description</th>
		<th>PointsPerKg</th>
		<th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
     
		<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr>
				
				<td><?php echo $row['materialID']; ?></td>
				<td><?php echo $row['materialName']; ?></td>
				<td><?php echo $row['description']; ?></td>
				<td><?php echo $row['pointsPerKg']; ?></td>
				
				<td>
					<a class="edit_btn" href="Material1.php?edit=<?php echo $row['materialID']; ?>">Edit</a>
				</td>
				<td>
					<a class="del_btn" href="Material1_server.php?del=<?php echo $row['materialID']; ?>">Delete</a>
				</td>
			</tr>
		<?php } ?>
		</thead>
			
	<br>
	</table>
	
	
	<form method="post" action="material1_server.php">
	
	<input type="hidden" name="materialID" value="<?php echo $materialID; ?>">
		<div class="input-group">
			<label><br>Material Name : <input type="text" name="materialName" value="<?php echo $materialName; ?>"></label>
		</div>
		
		<div class="input-group">
			<label>Description : <input type="text" name="description" value="<?php echo $description; ?>"></label>
		</div>
		
		<div class="input-group">
			<label>PointsPerKg : <input type="text" name="pointsPerKg" value="<?php echo $pointsPerKg; ?>"></label>
		</div>
		
		<div class ="input-group">
		<?php if($edit_state == flase): ?>
			<button type="submit" name="update" class="btn">Update</button>
		<?php else: ?>
			<button type="submit" name="delete" class="btn" >Delete</button>
		<?php endif ?>
		
		</div>
		
		
		
	</form>
	<?php  ?>
</div>

    <!-- reson_area_end  -->
   
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