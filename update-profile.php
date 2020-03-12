<?php
  include 'connection.php';
    if (isset($_POST['update_profile'])) {
 $user = $_GET['user'];
 $password = $_POST['password'];
 $fullname = $_POST['fullname'];
 $address = $_POST['address'];
 
 $update_profile = $mysqli->query("UPDATE user SET fullname = '$fullname', password = '$password',
                      fullname = '$fullname', address = '$address'
                      WHERE username = '$user'");
     if ($update_profile) {
    header("Location: profile.php?user=$user");
     } else {
   echo $mysqli->error;
     }
 }
?>