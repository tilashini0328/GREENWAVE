<?php
include 'connection.php'; 
   if (isset($_GET['user'])) {
   $user = $_GET['user'];
   $get_user = $mysqli->query("SELECT * FROM user WHERE username = '$user'");
   $user_data = $get_user->fetch_assoc();
    } else {
    header("Location: recyclerIndex.php");
    }?>
<!DOCTYPE html>
<html>
    <head>  
 <meta charset="UTF-8">
 <title><?php echo $user_data['username'] ?>'s Profile Settings</title>
    </head> 
<style>
.bg {background-image: url("profile.jpg");
	size : 100% 100%;
}




</style>	
	
 <body>        <a href="recyclerIndex.php">Home</a> | Back to <a href="profile.php?user=<?php echo $user_data['username'] ?>"><?php echo $user_data['username'] ?></a>'s Profile        

 
  <!-- bradcam_area_start  -->
    <div class="bradcam_area bg overlay d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                         <h3>Update Profile Information</h3> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
        <form align="center"  method="post" action="update-profile.php?user=<?php echo $user_data['username'] ?>">
		  <label>Fullname:</label><br> 
          <input type="text" name="fullname" value="<?php echo $user_data['fullname'] ?>" /><br> 
          <label>Password:</label><br>
          <input type="text" name="password" value="<?php echo $user_data['password'] ?>" /><br> 
  
          <label>Address:</label><br>          
          <input type="text" name="address" value="<?php echo $user_data['address'] ?>" /><br><br>  
          <input type="submit" name="update_profile" value="Update Profile" />        
 </form>    
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