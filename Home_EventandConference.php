<?php
session_start();
?>
<!DOCTYPE html>
<html lang = "en">
<head>
<title> Home   </title>
<script type="text/javascript" src="Home_EventandConference.js"></script>
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
<li><a href="#Logout" onclick="window.location.href='Logout.php'">Logout</a></li>
</ul>
</div>
<input id="button2" type= "submit" value="VIEW EVENTS" onclick="window.location.href='CreatedEvent.php'" >
<h2 id="label4"> Create Event </h2>
<div class="card5"><br>
<form name="myForm" action="Home_EventandConf_Controller.php" onsubmit="return validateForm()" method="post">
<h4> Select Type
<input type="radio" name="Business" checked> Event
<!--<input type="radio" name="Business"> Conference  </h4>-->
<input id="log" name="name" placeholder="Enter Name" type="text" required aria-required="true">
<input id="log" name="venue" placeholder="Enter Location" type="text" required aria-required="true">
<input id="log" name="date" type="date" required aria-required="true">
<input id="log" name="time" type="time" required aria-required="true">
<textarea id="textarea" name="description" rows="10" cols="30" placeholder="Enter description" required aria-required="true" minlength="10" maxlength="30"></textarea> <br>
<input id="add" type= "submit" value="CREATE">
</div>
<div class="footer">
  <footer>
    <hr>
  <p> Copyright&COPY; 2020 All rights reserved This web is made with &hearts; by <font color='black'>Neha Jain</font> </p>
  </footer>
</div>
</form>
</div>
</div>
</body>
</html>
