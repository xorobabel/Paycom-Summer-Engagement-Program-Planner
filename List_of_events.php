<?php
session_start();

	if (isset($_GET)) {

    $host = "nehajain.uta.cloud";
    $dbusername = "nehajain_admin";
    $dbpassword = "nehajain123";
    $dbname = "nehajain_Paycom";

		$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);

		if(!$conn){
		  die("Connection Failed");
		}

    // get all products
    $query = "SELECT * FROM events";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

  ?>

<!DOCTYPE html>
<html lang = "en">
<head>
<title> List Of Events </Title>
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="Planner.css">
</head>
<body>
  <div class="wrapper">
  <div class="topnav">
  <ul class="h">
  <li><img src="Logo1.png" alt="Logo" height="60" width="170"></li>
  <li id="home"><a href="#home" onclick="window.location.href='Home.php'">Home</a></li>
  <li><a href="#Dashboard" onclick="window.location.href='Home_Individual.php'">Dashboard</a></li>
  <li><a href="#SignUp" onclick="window.location.href='SignUp.php'">Sign Up</a></li>
  <li><a href="#Login" onclick="window.location.href='Login.php'">Logout</a></li>
  </ul>
  </div>
<div class="t">


<table id="fix" style="overflow-x:auto;">
  <caption>List Of Events</caption>
<tr id="fix">
  <th id="fix">Event ID</th>    
  <th id="fix">Event Name</th>
  <th id="fix">Description</th>
  <th id="fix">Date</th>
  <th id="fix">Time</th>
  <th id="fix">Venue</th>
  <th id="fix">Confirmation</th>
  <th id="fix">Attendees</th>
</tr>
<?php
$numProducts = count($rows, COUNT_NORMAL);
if ($numProducts > 0) {
  foreach ($rows as $row) {
    // echo '<tr id="fix">';echo $row["id"]; echo'</td>';
    echo '<tr id="fix">';
    echo '<td id="fix">';echo $row["id"]; echo'</td>';
    echo '<td id="fix">';echo $row["name"]; echo'</td>';
    echo '<td id="fix">'; echo $row["description"]; echo '</td>';
    echo '<td id="fix">';echo $row["date"]; echo'</td>';
    echo '<td id="fix">';echo $row["time"]; echo'</td>';
    echo '<td id="fix">';echo $row["venue"]; echo'</td>';
    echo '<form method="post" action="Event.controller.php">';
    echo '<input type="hidden" value="'.$row["id"].'" name="eventId">';
    echo '<td id="fix">';echo '<input id="message" type= "submit" value="CONFIRM" name="Event_confirm">'; echo'</td>';
    echo '<td id="fix">';
      echo '<a href="List_Attend.php?eventId='.$row['id'].'" class="link-bt">View</a>';
    echo'</td>';
    echo '</form>';
    echo '</tr>';
  }
} else {
  echo "<div>No events found</div>";
}
?>
</table>
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
