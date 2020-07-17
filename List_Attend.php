<?php
session_start();

if (isset($_GET)) {

  // check if logged in
  $email = $_SESSION['email'];
  if ($email == null) {
    header("Location: login.php?error=auth");
    exit();
  }
  $host = "nehajain.uta.cloud";
  $dbusername = "nehajain_admin";
  $dbpassword = "nehajain123";
  $dbname = "nehajain_Paycom";

  $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);

  if(!$conn){
    die("Connection Failed");
  }

  $id = $_GET["eventId"];
  // fetch user details
  $query = "SELECT count(*) as total FROM userevents where eventid = $id" ;
  $stmt = $conn->prepare($query);
  $stmt->execute();
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

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
<li><a href="#Dashboard" onclick="window.location.href='Home_Individual.php'">Dashboard</a></li>
<li><a href="#SignUp" onclick="window.location.href='SignUp.php'">Sign Up</a></li>
<li><a href="#Logout" onclick="window.location.href='Logout.php'">Logout</a></li>
<!--// <li><a href="#Login" onclick="window.location.href='Login.php'">Login</a></li>-->
</ul>
</div>
<div>
    <h1> Number Of Attendees for this Event: <?php echo $row['total']; ?> </h1>
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
