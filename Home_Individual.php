<?php
$host = "nehajain.uta.cloud";
$dbusername = "nehajain_admin";
$dbpassword = "nehajain123";
$dbname = "nehajain_Paycom";

$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);

if(!$conn){
  die("Connection Failed");
}
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<title> Home Individual  </title>
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
<div class="row1">
  <div class="column3">
    <div class="card6" style="background-color: #008f4b">
      <img src="globe.png" id="img1">
        <h4 id="label1"> <?php
							$query = 'SELECT count(*) from events';
							$stmt = $conn->prepare($query);
							$stmt->execute();
							$nRows = $stmt->fetchColumn();
							echo $nRows;
							?> </h4>
        <h5 id="label2"> List Of Events </h5>
        <button id="button4" type="button" name="events" onclick="window.location.href='List_of_events.php'"> Available Events </button>
      </div>
    </div>
</div>
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
