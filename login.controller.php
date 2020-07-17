<?php

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');

 if (!empty($email)){
 if (!empty($password)){

   $host = "nehajain.uta.cloud";
   $dbusername = "nehajain_admin";
   $dbpassword = "nehajain123";
   $dbname = "nehajain_Paycom";


// Create connection

$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);
if(!$db) {
  die("Connection failed");
}
else{

  if($query = "SELECT * FROM users join roles on users.roleId = roles.id where email = :email and password = :password")
  {
    if($query==null){
      echo "hello";
      die();
    }
    else{
  $stmt = $db->prepare($query);
  $stmt->execute(array(':email' => $email, ':password' => $password));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);

  session_start();
  $_SESSION['id'] = $row['id'];
  $_SESSION['firstName'] = $row['firstName'];
  $_SESSION['lastName'] = $row['lastName'];
  $_SESSION['role'] = $row['role'];
  $_SESSION['email'] = $row['email'];
  $_SESSION['roleId'] = $row['roleId'];

  if($row['roleId'] == 1){
    // print_r($row);
    header("Location: Home_Individual.php?login=success");
         }
  else{
    // print_r($row);
      header("Location: Home_EventandConference.php?login=success");
  }
}
}
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}


?>
