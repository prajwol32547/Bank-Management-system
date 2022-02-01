<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$conn =new mysqli($servname, $username, $password, $dbname);

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$middlename = $_POST["middlename"];
$fathername = $_POST["fathername"];
$email = $_POST["email"];
$mobilenumber =$_POST["mobilenumber"];  
$dateofbirth =$_POST["dateofbirth"];
$newDate = date("Y-m-d", strtotime($dateofbirth)); 
$accountbalance =$_POST["accountbalance"];
$city =$_POST["city"];
$district =$_POST["district"];
$pincode =$_POST["pincode"];
$state =$_POST["state"];
$gender =$_POST["gender"];



$create = "INSERT INTO `newaccount` (`accountnumber`,`firstname`, `lastname`, `middlename`, `fathername`, `email`, `mobilenumber`, `dateofbirth`, `accountbalance`, `city`, `district`, `pincode`, `state`,`gender`) VALUES (NULL,'$firstname', '$lastname', '$middlename', '$fathername', '$email', '$mobilenumber', '$newDate', '$accountbalance', '$city', '$district', '$pincode', '$state', '$gender')";

if ($conn->query($create) === TRUE) {
    header("Location: http://localhost/internetBanking/internetBanking/employee.html");
   
    

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>