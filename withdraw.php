<?php
if(isset($_POST['withdraw'])){
    $number=$_POST['number1'];
    $amount=$_POST['dramount'];

    include "connect.php";
    $sql="SELECT balance FROM central WHERE id=$number";
    $res=$conn->query($sql);
    if($res){
      while($row=$res->fetch_assoc()){
          $oldbalance=$row["balance"];
          if($oldbalance>=$amount){
          $newbalance=(int)$oldbalance-(int)$amount;
          $sql1="UPDATE central SET balance='$newbalance' WHERE id=$number";
          if($conn->query($sql1)){
              include 'success.php';
         
          }
          else{
            include 'error.php';
          }
      }
      else
      {
          echo "not sufficient balance";
      }
    }
    }
}
?>