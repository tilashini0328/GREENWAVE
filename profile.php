<?php 
include 'connection.php';
session_start();
if (isset($_GET['user']))
{
$user = $_GET['user'];
$get_user = $mysqli->query("SELECT * FROM user WHERE username = '$user'");
if ($get_user->num_rows == 1)
{
    $profile_data = $get_user->fetch_assoc();
           
}
       
} 
?>
<!DOCTYPE html>
<html>    
<head>        
 <meta charset="UTF-8">
         <title><?php echo $profile_data['username'] ?>'s Profile</title>
</head>
<style>
.bg {background-image: url("profile.jpg");
size : 100% 100%;}

table{
  padding: 15px;
  text-align: left;
  background-color: #f1f1c1;
}



</style>




<body>
    <a href="recyclerIndex.php">Home</a> | <?php echo $profile_data['username'] ?>'s Profile        

 <!-- bradcam_area_start  -->
    <div class="bradcam_area bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Personal Information</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
  
		<br>
		<div >
        <table align="center"  style="width:20%"  border = "1px solid black"  >
                    <tr>                
                     <td>FullName:</td><td><?php echo $profile_data['fullname'] ?></td>   
                    </tr>
                    <tr>                
                     <td>Password:</td><td><?php echo $profile_data['password'] ?></td> 
                    </tr> 
                    <tr>
                        <td>Address:</td><td><?php echo $profile_data['address'] ?></td> 
                    </tr>  
					<tr>
                        <td>Total Points:</td><td><?php echo $profile_data['totalPoints'] ?></td> 
                    </tr> 
					<tr>
                        <td>Ecolevel:</td><td><?php echo $profile_data['ecolevel'] ?></td> 
                    </tr>  
					
					
					
        </table> 
		</div>
		<div align="center">
		 <? php            $visitor = $_SESSION['username'];
           if ($user == $visitor)
{ ?>            <a href="edit-profile.php?user=<?php echo $profile_data['username'] ?>">Edit Profile</a>           

		</div>
    </body>
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
</html> 
