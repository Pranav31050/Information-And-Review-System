
<?php
session_start();
define('SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/');
include 'class/Rating.php';
$rating = new Rating();
if(!empty($_POST['action']) && $_POST['action'] == 'userLogin') {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$loginDetails = $rating->userLogin($user, $pass);	
	$loginStatus = 0;
	$email = "";
	if (!empty($loginDetails)) {
		$loginStatus = 1;
		$_SESSION['userid'] = $loginDetails[0]['userid'];
		$_SESSION['email'] = $loginDetails[0]['email'];		
		$email = $loginDetails[0]['email'];
	}		
	$data = array(
		"email" => $email,
		"success"	=> $loginStatus,	
	);
	echo json_encode($data);	
}
if(!empty($_POST['action']) && $_POST['action'] == 'saveRating' 
	&& !empty($_SESSION['userid']) 
	&& !empty($_POST['rating']) 
	&& !empty($_POST['insid'])) {
		$userid = $_SESSION['userid'];	
		$rating->saveRating($_POST, $userid);	
		$data = array(
			"success"	=> 1,	
		);
		echo json_encode($data);		
}
if(!empty($_GET['action']) && $_GET['action'] == 'logout') {
	session_unset();
	session_destroy();
	echo "<script>alert('Logout Sucessfully');</script>";
    header("location:".SITEURL.'index.php');
}
?>