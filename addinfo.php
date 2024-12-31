<?php include ('partials-front/menu2.php') ?><!DOCTYPE html>



<html>
<head>
<link rel="stylesheet" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text],input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}




.abc input{
    width: 100%;
    height: 35px;
    border-top: none;
    border-right: none;
    border-left: none;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 10px;
    font-family: sans-serif;
}

.abc input:focus{
    outline: none;
}
.menu{
    line-height: 90px;
}
.menu ul{
    list-style-type: none;
}

.menu ul li{
    display: inline;
    padding: 1%;
    font-weight: bold;
}

.dropdown {
    float: right;
    overflow: hidden;
}
  
.dropdown .dropbtn .a{
    width: 33%;
    float: right;
    height: 70px;
    font-size: medium;
    font-weight: bold;
}

.dropdown .dropbtn {
    font-size: medium;  
    font-weight: bold;
    width: 33%;
    height: 15px;
    border: none;
    outline: none;
    color: white;
    background-color: transparent;
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
}
  .abc{
    border-radius: 50px;
  background-color: #90c9c4;
  padding: 60px;
  height: 640px;
  

  }



</style>
</head>
<body>
  <form action="addin.php" method="POST" >
    <div class="abc">
  <label for="text"><b>Institute Name</b></label>
    <input type="text" name="title" placeholder="Enter Institute Name Here" id="title">
    <div class="drop">
      <label>Choose Organization	<span class="mandatory">*</span></label>
      <select name="category_id" id="category_id" class="form-control">
          <option value="" selected="selected">---Choose organization---</option>
          <option value="1">Hosptial</option>
          <option value="3">Collage</option>
          <option value="2">School </option>                                                      
      </select>
  </div>
  
    
    <label for="location"><b>location</b></label>
    <select id="location" name="location">
      <option value="Kathmandu">Kathmandu</option>
      <option value="Lalitpur">Lalitpur</option>
      <option value="Bhaktapur">Bhaktapur</option>
    </select>
    
    <label for="number"><b>Institute Number</b></label>
    <input type="number" name="phnnumber" placeholder="Enter number Here" id="phnnumber" >
  <label for="text"><b>Institute Description</b></label>
    
    <textarea name="description" cols="30" rows="5" placeholder="Description of the Insitutions." style="height: 60px;"></textarea>

    <label for="text"><b>Website Link</b></label>
    <input type="text" name="visit" placeholder="Enter Website Link Here" id="visit">
   
    <input type="submit" value="Submit">
</div>
  </form>
</div>
</body>
</html>