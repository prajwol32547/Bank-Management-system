<?php 
session_start();
?>
<?php

error_reporting(E_ERROR|E_PARSE);

if($_SERVER['REQUEST_METHOD']=="POST"){
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    
    echo $passhash;
}
include 'connect.php';
    $sql="SELECT * FROM auth,central WHERE central.email=auth.email";
    $result=$conn->query($sql);
    if($result){
        while($row=$result->fetch_assoc()){
            $passhash=$row["password"];
            $passcheck=password_verify($password,$passhash);
            // echo $passcheck;
            if($row["email"]==$email && $passcheck==1){
              $_SESSION['fname']=$row["fname"];
              $_SESSION['lname']=$row["lname"];
              $_SESSION['balance']=$row["balance"];
              $_SESSION['unreal']=$row["unrealizedamt"];
              $_SESSION['interest']=$row["interest"];
              $_SESSION['number']=$row["logid"];
              $_SESSION['branch']=$row["branch"];
              $_SESSION['date']=$row["date"];
              $_SESSION['photo']=$row["image"];
              $_SESSION['password']=$row["password"];
              $_SESSION['email']=$row["email"];
              $_SESSION['account']=$row["id"];
              $_SESSION['intdate']=$row["intdate"];
              header("location:customer");
   }
   
  

   
            
        }
        ?>
        <script>
        //   
        setTimeout(()=>{
        location.replace("signin")},1500);
        </script>
        <?php
         include 'error.php';
      
    }


 




?>