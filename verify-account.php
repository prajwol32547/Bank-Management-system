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
$accountnumber =$_POST["accountnumber"];
$accountbalance =$_POST["accountbalance"];
$city =$_POST["city"];
$district =$_POST["district"];
$pincode =$_POST["pincode"];
$state =$_POST["state"];
$gender =$_POST["gender"];


$create = "INSERT INTO `verifiedaccount` (`id`, `firstname`, `lastname`, `middlename`, `fathername`, `email`, `mobilenumber`, `dateofbirth`, `accountnumber`, `accountbalance`, `city`, `district`, `pincode`, `state`,`gender`) VALUES (NULL, '$firstname', '$lastname', '$middlename', '$fathername', '$email', '$mobilenumber', '$newDate', '$accountnumber', '$accountbalance', '$city', '$district', '$pincode', '$state', '$gender')";
$delete = "DELETE  FROM `newaccount` WHERE `newaccount`.`firstname` = '$firstname' ";
if ($conn->query($create) && $conn->query($delete) === TRUE) {
    // header("Location: http://localhost/internetBanking/index.html");
    

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>