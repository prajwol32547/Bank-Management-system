<?php 
session_start();
?>
<?php

error_reporting(E_ERROR|E_PARSE);


if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
}
include 'connect.php';
    $sql="SELECT * FROM manager,mandb WHERE manager.email=mandb.email";
    $result=$conn->query($sql);
    if($result){
        while($row=$result->fetch_assoc()){
            $passhash=$row["password"];
            $passcheck=password_verify($password,$passhash);
            if($row["email"]==$email && $passcheck==1){
              $_SESSION['mfname']=$row["firstname"];
              $_SESSION['mlname']=$row["lastname"];
              $_SESSION['mid']=$row["manid"];
              $_SESSION['mbranch']=$row["branch"];
              $_SESSION['mphoto']=$row["image"];
              $_SESSION['maccnumber']=$row["number"];
              $_SESSION['memail']=$row["email"];
              $_SESSION['mpw']=$row["password"];
              header("location:employee");
   }
            
               

            
        }
        include "error";
        ?>
<script>
//   
setTimeout(()=>{
location.replace("signin")},1500);
</script>
<?php
    }


 




?>