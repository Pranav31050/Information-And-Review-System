<?php include('config/constants.php'); ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'mail/Exception.php';
require 'mail/PHPMailer.php';
require 'mail/SMTP.php';



//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

   $email = $_POST['email'];
	$password = $_POST['password'];
	$location = $_POST['location'];
    $number = $_POST['number'];
	$vkey = md5(time().$email);



	// Database connection
	$conn = new mysqli('localhost','root','','infosys');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(email, password, location, number,vkey) values(?, ?, ?, ?,?)");
		$stmt->bind_param("sssis", $email, $password, $location, $number,$vkey);
		$execval = $stmt->execute();
		echo $execval;
        $stmt->close();
		$conn->close();
	}

	//send mail

			
try {
    //Server settings
                        //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'add email';                     //SMTP username
    $mail->Password   = 'add password';                               //SMTP password
              //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('add email', 'Info & Review System');
    $mail->addAddress($email);     //Add a recipient
  

 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email verification';
    $mail->Body    = "Thanks for Registration
	Click the link below to verify the email address
    <a 	href='" . SITEURL . "verify.php?code=$vkey'>Click Here</a>";
    
	
    
   

    $mail->send();
    echo "<script>alert('Message has been sent');</script>";
    echo "<script>window.location = 'login.php';</script>";;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "<script>window.location = 'signup.php';</script>";;
}


	
?>