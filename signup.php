<link rel="stylesheet" href="css/style.css">
<?php include('partials-front/menu.php'); ?>

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
  background-color: red;
  color: white;
}
.signupbtn {
  padding: 16px 20px;
  background-color: green;
  color: white;
}
.linkbtn {
  padding: 18px 700px;
  background-color: #ff7200;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn{
  float: left;
  width: 50%;
}
.linkbtn{
  float: left;
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
  height: 590px;

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

  <form action="connect.php" method="post" class="modal-content" >
    <div class="containerr">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <label for="text"><b>Location</b></label>
      <input type="text" name="location" placeholder="Enter Location Here" id="location"
                    required='required'>
                    <label for="text"><b>Number</b></label>
                    <input type="number" name="number" placeholder="Enter number Here" id="number" required='required'>
                    <div class="clearfix">
       <a href="index.php" type="button"  class="cancelbtn" >Cancel</a>
        <button type="submit" class="signupbtn" >Sign Up</button>
        
      </div>
            <br>       
                      <p><a href="#" style="color: #fff"><b>By creating an account you agree to our Terms & Privacy</b></a>.</p>
                    

                </div>
            </form>
                    </div>
      
    

      
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
