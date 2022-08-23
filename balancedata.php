<?php
error_reporting(E_ERROR|E_PARSE);
session_start();
include 'connect.php';
$id=$_SESSION['account'];
$logid=$_SESSION['number'];
$sql="SELECT balance FROM central WHERE id='$id'";
$res=$conn->query($sql);
if($res){
    $row=$res->fetch_assoc();
// print_r($row);
// echo $id;
// echo "</br>";
// echo $logid;
    $blcdata=implode($row);
  
}
else{
    die("error");
}
?>