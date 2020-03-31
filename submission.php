<?php include ('submission_server.php');

	if (isset($_GET['edit'])) {
		$materialID = $_GET['edit'];
		$update = true;
		$update1 = true;
		$record = mysqli_query($db, "SELECT * FROM submission WHERE submissionID = '$submissionID'");
		
		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$submissionID = $n['submissionID'];
			$materialID = $n['materialID'];
			$recycler = $n['recycler'];
			$status = $n['status'];
		}
		
		if (isset($_GET['username']))
{
$user = $_GET['username'];
$get_user = $mysqli->query("SELECT * FROM user WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
		
	}
	}

?>


<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GreenWave</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
	<div>
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/leaf_logo.jpg" alt="" height="50px" width="50px"> GreenWave</img>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="collectorIndex.php">Home</a></li>
                                       
                                        <li><a href="material1List.php">Material List<i class="ti-angle-down"></i></a>
										<li><a href="#">Submission<i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="submission.php">Record New Submission</a></li>
                                                <li><a href="viewSubmission.php">View Submission History</a></li>
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
	
	
	
	
	</div><br><br>
	   <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>View Submission History</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class="container">
			<br />
			<br />
			<br />
			<h2 align="center">Ajax Live Data Search using Jquery PHP MySql</h2><br />
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
			</div>
			<br />
			<div id="result"></div>
		</div>
		<div style="clear:both"></div>
	
		
	<form id="MyForm" method="post" action="submission_server.php">
	<h3>Record appointment</h3>
	<input type="hidden" name="submissionID" value="<?php echo $submissionID; ?>">
		
		<div class="input-group">
			<label>MaterialID : <input type="text" name="materialID" value="<?php echo $materialID; ?>"></label>
		</div>
		
		<div class="input-group">
			<label>Recycler : <input type="text" name="recycler" value="<?php echo $recycler; ?>"></label>
		</div>
		<div class="input-group">
			<label>weightInKg : <input type="text" name="weightInKg"></label>
		</div>
		<div class="input-group">
			<label>status : <input type="text" name="status" value=""></label>
		</div>
		
		
	
		
		
		<?php if ($update == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
				
		
		
		</div>
		
	</form>
	
	<form id="MyForm1" method="post" action="submission_server.php">
	<h3>Record Submission</h3>
	<input type="hidden" name="submissionID" value="<?php echo $submissionID; ?>">
		<div class="input-group">
			<label>Collector Name: <input type="text" name="collector" value="<?php echo $_SESSION['username']; ?>"></label>
		</div>
		<div class="input-group">
			<label><br>MaterialID: <input type="text" name="materialID"></label>
		</div>
		
		<div class="input-group">
			<label>Recycler: <input type="text" name="recycler" ></label>
		</div>
		
		<div class="input-group">
			<label>status : <input type="text" name="status" value="submitted"></label>
		</div>
		
		<?php if ($update1 == true): ?>
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >Update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
				
		
		
		</div>
		
	</form>
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

<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"sFetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>