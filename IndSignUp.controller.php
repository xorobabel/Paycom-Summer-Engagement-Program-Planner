<?php

 $email = filter_input(INPUT_POST, 'email');
 $password = filter_input(INPUT_POST, 'password');
 $placeOfWork = filter_input(INPUT_POST, 'placeOfWork');
 $school = filter_input(INPUT_POST, 'school');
 $firstName = filter_input(INPUT_POST, 'firstName');
 $lastName = filter_input(INPUT_POST, 'lastName');

 if (!empty($email)){
   if (preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)) {
 if (!empty($password)){
   if (!empty($placeOfWork)){
     if (!empty($school)){
       if (!empty($firstName)){
         if (!empty($lastName)){
           $host = "nehajain.uta.cloud";
           $dbusername = "nehajain_admin";
           $dbpassword = "nehajain123";
           $dbname = "nehajain_Paycom";


// Create connection

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (email, password, firstName, lastName, roleId, placeOfWork, school)
values ('$email','$password','$firstName','$lastName',1,'$placeOfWork','$school')";
if ($conn->query($sql)){
header("Location: IndividualSignUp.php?SignUp-Successful");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "LastName should not be empty";
die();
}
}
else{
echo "FirstName should not be empty";
die();
}
}
else{
echo "NameOfSchool should not be empty";
die();
}
}
else{
echo "PlaceOfWork should not be empty";
die();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "email is invalid";
die();
}
}
else{
echo "email should not be empty";
die();
}


?>
