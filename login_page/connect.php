<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "medilocker.sql";
 $conn = new mysqli($servername, $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
 
 if($conn)
 {
  echo "done";

 }
 else{
  echo "connection failed";
 }
 ?>