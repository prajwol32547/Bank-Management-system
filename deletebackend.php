<?php
include 'connect.php';
$id=$_GET['id'];

$sql="DELETE FROM unverifiedaccount WHERE id=$id";
$res=$conn->query($sql);
if($res){
header("location:unverified.php");
}
else{
    echo "oops";
}
?>