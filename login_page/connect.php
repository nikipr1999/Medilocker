<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "medilocker.sql";
 $conn = new mysqli($servername, $username, $password,$dbname) or die("Connect failed: %s\n". $conn -> error);
 

$fullname=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];




 if($conn)
 {
  $stmt=$conn->prepare("insert into customer(fullname,email,password) values(?,?,?)");

  $stmt->bind_param("sss", $fullname,$email,$password);
  $stmt->execute();
  
  $stmt->close();
  $conn->close();

 }
 else{
  alert('Sorry, unable to connect to the server.');
 }

 header('location: ../index.html');
 ?>