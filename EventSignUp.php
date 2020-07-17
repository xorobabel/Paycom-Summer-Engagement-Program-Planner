<!DOCTYPE html>
<html lang = "en">
<head>
<title> Sign Up Event</title>
<script type="text/javascript" src="EventSignUp.js"></script>
<link rel="stylesheet" href="Planner.css">
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>
<body>
  <div class="wrapper">
<div class="topnav">
<ul class="h">
<li><img src="Logo1.png" alt="Logo" height="60" width="170"></li>
<li id="home"><a href="#home" onclick="window.location.href='Home.php'">Home</a></li>
<li><a href="#SignUp" onclick="window.location.href='SignUp.php'">Sign Up</a></li>
<li><a href="#Login" onclick="window.location.href='Login.php'">Login</a></li>
</ul>
</div>
<div class="container">
<img width=100% src="home-banner.jpg" alt="Home Banner">
<div class="centered"><h1> <strong> SIGN UP EVENT </strong> </h1></div> <br>
</div>
<div class="card3">
<form name="myForm" action="EventSignUp.controller.php" onsubmit="return validateForm()" method="post">
<h2> Select Type of User </h2>
<button id="button" type= "button" onclick="window.location.href='IndividualSignUp.php'"> Attendee </button>
<button id="button1" type= "button" onclick="window.location.href='EventSignUp.php'"> Admin </button>
<!--<button id="button" type= "button" onclick="window.location.href='BusinessSignUp.php'"> Business </button>-->
<h4> Welcome To Event Log </h4>
<input id="log" name="firstName" placeholder="Enter your firstname" type="text" > <br>
<input id="log" name="lastName" placeholder="Enter your lastname" type="text" > <br>
<input id="log" name="email" placeholder="Enter your email address" type="email" >  <br>
<input id="log" name="password" placeholder="Set password" type="password" > <br>
<input id="send" type= "submit" value="Submit">
</form>
</div>
<div class="footer">
  <footer>
    <hr>
  <p> Copyright&COPY; 2020 All rights reserved This web is made with &hearts; by <font color='black'>Neha Jain</font> </p>
  </footer>
</div>
</div>
</body>
</html>
