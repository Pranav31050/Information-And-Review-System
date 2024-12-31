<?php 
    //Start Session
    session_start();


    //Create Constants to Store Non Repeating Values
    //define('SITEURL', 'http://localhost/infosys/');
    define('SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
    
   
    define('LOCALHOST', 'localhost');
    define('DB_email', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'infosys');
    
    $conn = mysqli_connect(LOCALHOST, DB_email, DB_PASSWORD) or die(mysqli_error()); //Database Connection
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //SElecting Database


?>
