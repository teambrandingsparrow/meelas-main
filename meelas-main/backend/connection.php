<?php
$hName='localhost'; // host name
$uName='root';   // database user name
$password='';   // database password
$dbName = "meelas"; // database name


// $uName='brandwee_meelas';   // database user name
// $password='X}=h#r*xFsX[';   // database password
// $dbName = "brandwee_meelas"; // database name


$conn = mysqli_connect($hName,$uName,$password,"$dbName");
      if(!$conn){
          die('Could not Connect MySql Server:' .mysqli_error());
      }