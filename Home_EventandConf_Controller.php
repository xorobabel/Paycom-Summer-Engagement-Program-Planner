<?php
session_start();
$host = "nehajain.uta.cloud";
$dbusername = "nehajain_admin";
$dbpassword = "nehajain123";
$dbname = "nehajain_Paycom";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{

 $createdBy = $_SESSION['roleId'];
 if ($createdBy == null) {
   // print_r($_SESSION);
   header("Location: login.php?error=auth");
   exit();
 }

 $name = filter_input(INPUT_POST, 'name');
 $venue = filter_input(INPUT_POST, 'venue');
 $date = filter_input(INPUT_POST, 'date');
 $time = filter_input(INPUT_POST, 'time');
 $description = filter_input(INPUT_POST, 'description');


 if (!empty($name)){
   if (!empty($venue)){
      if (!empty($date)){
         if (!empty($time)){
           if (!empty($description)){

$sql = "INSERT INTO events (name, createdBy, description, date, time, venue)
values ('$name','$createdBy','$description','$date','$time','$venue')";
if ($conn->query($sql)){
header("Location: CreatedEvent.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();

}
else{
echo "Description should not be empty";
die();
}
}
else{
echo "Time should not be empty";
die();
}
}
else{
echo "Date Number should not be empty";
die();
}
}
else{
echo "Venue should not be empty";
die();
}
}
else{
echo "Name should not be empty";
die();
}
}


?>
