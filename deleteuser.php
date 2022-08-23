<?php
if(isset($_POST['btntwo'])){
$account=$_POST['number'];
 $number=(int)$account;
 include 'connect.php';
 $sql="DELETE FROM `central` WHERE `central`.`id` = $number";
 $res=$conn->query($sql);
 if($res){
   $sql2="DELETE FROM `auth` WHERE `auth`.`logid`=$number";
   $res2=$conn->query($sql2);
   if($res2){
       header("location:employee.php");
 }

else{
    include 'error.php';
}
}
}

?>