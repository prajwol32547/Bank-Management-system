<?php


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$sql =new mysqli($servname, $username, $password, $dbname);

// $sqlm = "CREATE DATABASE internetBanking";
// if ($sql->connect_error) {
//   die("Connection failed: " . $sql->connect_error);
// } 


// if($_SERVER['REQUEST_METHOD']=="POST"){
//     $username=$_POST['user'];
//   $address=$_POST['email'];
// }
// echo $username;


?>