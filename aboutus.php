<?php include('partials-front/menu.php'); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-image: url(images/search.jpg);
  color: black;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us</h1><br>
  <p>This Website is all about providing the General Information of differnt institution mainly
    schools Coleges,Hospitals loacted inside Katmandu Valley  .</p>

</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="pranav.png" alt="Pranav" style="width:40%">
      <div class="container">
        <h2>Pranav Baskota</h2>
        <p class="title">Developer</p>
        <p>pepsicola,Katmandu</p>
       
        <p>Email:pranavb019360@gmail.com</p>
        <p>Phone Number:982312993</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="roshan.jpg" alt="Roshan" style="width:40%">
      <div class="container">
      <h2>Roshan Pariyar</h2>
        <p class="title">Developer</p>
        <p>Mulpani,Katmandu</p>
       
        <p>Email:roshanp019367@gmail.com</p>
        <p>Phone Number:9818710424</p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="saiyed.jpg" alt="Saiyed" style="width:40%">
      <div class="container">
      <h2>Saiyed Ali Halwai</h2>
        <p class="title">Developer</p>
        <p>Baneshwor,Katmandu</p>
       
        <p>Email:saiyeda019369@gmail.com</p>
        <p>Phone Number:98312993</p>
      </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
