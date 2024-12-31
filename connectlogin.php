<?php include('config/constants.php'); ?>
<?php 

    //CHeck whether the Submit Button is Clicked or NOt
    if(isset($_POST['submit']))
    {
        //Process for Login
        //1. Get the Data from Login form
         $email = $_POST['email'];
         $password = md5($_POST['password']);
        $username = mysqli_real_escape_string($conn, $_POST['email']);
        
        $raw_password = $_POST['password'];
        $password = mysqli_real_escape_string($conn, $raw_password);

        //2. SQL to check whether the user with username and password exists or not
        $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password' Limit 1";

        //3. Execute the Query
        $res = mysqli_query($conn, $sql);

        //4. COunt rows to check whether the user exists or not
if($res->num_rows!=0){
    //;login
    $row=$res->fetch_assoc();
    $verified= $row['verified'];
    $email= $row['email'];
    if($verified == 1){
$_SESSION['login'] = "<div class='success'>Login Successful.</div>";
$_SESSION['user'] = $email;
echo "<script>alert('Login Successful.');</script>";
echo "<script>window.location = 'addinfo.php';</script>";;
        //continue
    }else{
        $_SESSION['login'] = "<div class='error text-center'>Email Not verified.</div>";
        header('location:'.SITEURL.'login.php');
        }
    
 } else {
        //INVALID
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
 header('location:'.SITEURL.'login.php');

    }



    }

?>
