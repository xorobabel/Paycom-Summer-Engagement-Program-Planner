<!DOCTYPE html>
<html lang = "en">
<head>
<title> Login </title>
<script type="text/javascript" src="Login.js"></script>
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
<img width=100% src="eventplanner.jpg" alt="Home Banner">
<div class="centered"><h1> <strong> LOGIN </strong> </h1></div> <br>
</div>
<div class="card1">
<form name="myForm" action="login.controller.php" onsubmit="return validateForm()" method="post">
<h2> <font-color: black> LOGIN </h2> <!-- font-color is deprecated in HTML5 -->
<input id="log" name="email" placeholder="Enter your email address" type="email">  <br>
<input id="log" name="password" placeholder="Enter password" type="password"> <br>
<input id="button" type= "submit" value= "LOGIN" name="login-submit">
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
