<?php
// It doesn't look to me like these configs are every directly used.
$host = "yashdani.uta.cloud";
$dbusername = "yashdani_wdm";
$dbpassword = "yashdani1234";
$dbname = "yashdani_Project4";

$conn = new PDO('mysql:host='.$host.';dbname'.$dbname, $dbusername, $dbpassword);

if(!$conn){
  die("Connection Failed");
}
?>
