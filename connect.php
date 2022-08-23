<?php

$server="localhost";
$user="root";
$pass="";
$db="hero";
$conn=new mysqli($server,$user,$pass,$db);
if($conn->connect_error){
    die("connect error ".$conn->connect_error);
}


        ?>