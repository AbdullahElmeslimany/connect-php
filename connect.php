<?php

$dsn = "mysql:host=localhost;dbname=learn";
$user = "root" ;
$pass = "" ;
$option = array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8"
);
try {
   	$con = new PDO($dsn , $user , $pass , $option);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";
      include "function.php";

 }catch(PDOException $e) {
  echo $e->getMessage() ;
 }
