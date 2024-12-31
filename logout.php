<?php 
    //Include constants.php for SITEURL
    include('config/constants.php');
    //1. Destory the Session
    session_destroy(); //Unsets $_SESSION['user']
   


    echo "<script>alert('Logout Sucessfully');</script>";
    echo "<script>window.location = 'index.php';</script>";;
    //2. REdirect to Login Page
    
 
?>
  
