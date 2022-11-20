<?php 

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'lpu';

   $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    // Check connection
   if ($conn->connect_error) 
   {
      die("Connection failed: " . $conn->connect_error);
   } 
   //echo "Connected successfully ";
?>