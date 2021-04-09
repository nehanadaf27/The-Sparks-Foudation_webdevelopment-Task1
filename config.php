<?php 

$server="localhost";
$username="root";
$password="";
$db="basic_bank_system_Database";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  
}

else
die("connection to this database failed due to " .mysqli_connect_error());


?>
