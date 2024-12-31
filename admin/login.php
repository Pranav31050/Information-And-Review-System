<?php 
include('../config/constants.php');
 // Ensure the session is started at the top
?>

<html>
    <head>
        <title>Login - Info&Review System</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body>
        
        <div class="login">
            <h1 class="text-center">Login</h1>
            <br><br>

            <?php 
                if (isset($_SESSION['login'])) {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if (isset($_SESSION['no-login-message'])) {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

            <!-- Login Form Starts Here -->
            <form action="" method="POST" class="text-center">
                Email: <br>
                <input type="email" name="email" placeholder="Enter Username"><br><br>

                Password: <br>
                <input type="password" name="password" placeholder="Enter Password"><br><br>

                <input type="submit" name="submit" value="Login" class="btn-primary">
                <br><br>
            </form>
            <!-- Login Form Ends Here -->
        
        </div>

    </body>
</html>

<?php 

// Check whether the Submit Button is Clicked or Not
if (isset($_POST['submit'])) {
    // Process for Login
    // 1. Get the Data from the Login form
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Password should be hashed for security

    // Default credentials
    $default_email = 'admin@pranav';
    $default_password = md5('pranav@admin'); // Default password hashed with md5

    // Check if the entered credentials match the default ones
    if ($email == $default_email && $password == $default_password) {
        // Default login success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $email; // Set session to track the logged-in user

        // Redirect to Admin Dashboard/Home Page
        header('location:' . SITEURL . 'admin/');
        exit(); // Ensure no further code is executed after the redirect
    }

    // 2. If not default, check the database for the user's credentials
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password'])); // Ensure the password is md5-hashed

    // 3. SQL to check whether the user with username and password exists or not
    $sql = "SELECT * FROM tbl_admin WHERE email='$email' AND password='$password'";

    // 4. Execute the Query
    $res = mysqli_query($conn, $sql);

    // 5. Count rows to check whether the user exists or not
    $count = mysqli_num_rows($res);

    if ($count == 1) {
        // User found and login success
        $_SESSION['login'] = "<div class='success'>Login Successful.</div>";
        $_SESSION['user'] = $email; // Store the user's email in session

        // Redirect to Admin Dashboard/Home Page
        header('location:' . SITEURL . 'admin/');
        exit(); // Ensure no further code is executed after the redirect
    } else {
        // User not found, login failed
        $_SESSION['login'] = "<div class='error text-center'>Username or Password did not match.</div>";
        
        // Redirect back to the login page
        header('location:' . SITEURL . 'admin/login.php');
        exit(); // Ensure no further code is executed after the redirect
    }
}

?>
