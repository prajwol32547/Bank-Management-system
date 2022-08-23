<?php
if(isset($_POST['load'])){
    $number=$_POST['number'];
    $amount=$_POST['cramount'];

    include "connect.php";
    $sql="SELECT balance FROM central WHERE id=$number";
    $res=$conn->query($sql);
    if($res){
      while($row=$res->fetch_assoc()){
          $oldbalance=$row["balance"];
          $newbalance=(int)$oldbalance+(int)$amount;
          $sql1="UPDATE central SET balance='$newbalance' WHERE id=$number";
          if($conn->query($sql1)){
              include 'success.php';
         
          }
          else{
              echo "oops";
          }
      }

    }
}
?>