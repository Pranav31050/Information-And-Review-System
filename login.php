<?php include('partials-front/menu.php'); ?>
<link rel="stylesheet" href="css/style.css">

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}


/* Full-width input fields */
input[type=text], input[type=password],input[type=number], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}


.icons a{
    text-decoration: none;
    color: #fff;
}
.icons ion-icon{
    color: #fff;
    font-size: 30px;
    padding-left: 14px;
    padding-top: 5px;
    transition: 0.3s ease;
}
.icons ion-icon:hover{
    color: #ff7200;
}


/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus, input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 0px 0px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 300px;
  background-color: #f44336;
}
.signupbtn {
  padding: 16px 20px;
  background-color: #04AA6D;
}
.linkbtn {
  padding: 18px 700px;
  background-color: #ff7200;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn{
  float: left;
  width: 50%;
  color: white;
}
.linkbtn{
  float: left;
  color: white;
  width: 100%;
}

/* Add padding to container elements */
.containerr {
    background-image: url(images/search.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
  padding: 16px;
  width: auto;
  height: 550px;

}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  width: auto; /* Could be more or less, depending on screen size */
  height: auto;
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>
<div class="login">
            <?php 
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }

                if(isset($_SESSION['no-login-message']))
                {
                    echo $_SESSION['no-login-message'];
                    unset($_SESSION['no-login-message']);
                }
            ?>
            <br><br>

  <form action="connectlogin.php" method="POST" class="modal-content" >
    <div class="containerr">
      <h1>Login</h1>
      <p>Login to add information.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
  
       <a href="index.php" type="button"  class="cancelbtn">Cancel</a>
       <input type="submit" name="submit" value="Login" class="signupbtn">
        
        <p>Don't have an account<br></p>
        <a   class="linkbtn"   href="signup.php">Sign up </a>
                   
                    
    </div>
            </form>
                    </div>
                    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>



</body>
</html>

