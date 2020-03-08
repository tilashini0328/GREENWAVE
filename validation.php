<?php

session_start();
$invalid = '';


    if(empty($_POST['username']) || empty($_POST['password'])){
        $invalid = "Username or Password is invalid.";
    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        
        $conn = new mysqli("localhost", "root","", "greenwave");

        if ( $conn->connect_error) {
            die (" Connection failure" );
        }
        
        $_SESSION['message']= " Connected Successfully";

        $sql = "SELECT username, password from user where username=? AND password=? LIMIT 1";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $stmt->bind_result($username, $password);
        $stmt->store_result();

        if($stmt->fetch())
        {
            $_SESSION['loggedUser'] = $username;

            $query = "SELECT userType from user where username = '$username';";
            $ses_sql = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($ses_sql);
            $_SESSION['username']= $username;

            //insert remaining code and if statement here to fetch other attributes of the table
            if($row['userType'] == 'recycler'){
                header("Location: recyclerIndex.php");
            }else{
                header("Location: collectorIndex.php");
            }
        }
        else{
            $message = "Username and/or Password incorrect.";
            echo "<script type='text/javascript'>
            
            alert('$message'); 
            window.onunload = refreshParent;

            function refreshParent() {
                window.opener.location.reload();
            }
            </script>";
                echo '<a href="recyclerLogin.php"><button >Try Again</button></a>';
            }
        mysqli_close($conn);
    }








?>