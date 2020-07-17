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
  $userId = $_SESSION['id'];
  // fetch user details
  $query = "SELECT * FROM events where createdBy = $userId and id = $id" ;
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
<li><a href="#SignUp" onclick="window.location.href='SignUp.php'">Sign Up</a></li>
<li><a href="#Logout" onclick="window.location.href='Logout.php'">Logout</a></li>
</ul>
</div>
<input id="button2" type= "submit" value="VIEW EVENTS" onclick="window.location.href='CreatedEvent.php'" >
<!--<input id="button2" type= "submit" value="VIEW CONFERENCES" onclick="window.location.href='CreatedConferences.php'">-->
<h2 id="label4"> Create Event or Conference </h2>
<div class="card5"><br>
<form name="myForm" action="Event.controller.php" onsubmit="return validateForm()" method="post">
<h4> Select Type
<input type="radio" name="Business" checked> Event
<!--<input type="radio" name="Business"> Conference  </h4>-->
<input type="hidden" name="eventId" value="<?php echo $id; ?>">
<input id="log" name="name" placeholder="Enter Name" type="text" value="<?php echo $row['name']; ?>" required aria-required="true">
<input id="log" name="venue" placeholder="Enter Location" type="text" value="<?php echo $row['venue']; ?>" required aria-required="true">
<input id="log" name="date" type="date" value="<?php echo $row['date']; ?>" required aria-required="true">
<input id="log" name="time" type="time" value="<?php echo $row['time']; ?>" required aria-required="true">
<textarea id="textarea" name="description" rows="10" cols="30" placeholder="Enter description" required aria-required="true"><?php echo $row['description']; ?></textarea> <br>
<input id="add" type= "submit" value="UPDATE" name="Submit_Event_Edit">
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
