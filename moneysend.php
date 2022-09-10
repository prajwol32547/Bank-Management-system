
<?php
include 'balancedata.php';
if(isset($_POST['money'])){
$receiverfirst=$_POST['receiverfirst'];
$receiverlast=$_POST['receiverlast'];
 $account=$_POST['number'];
 $amount=$_POST['paisa'];
 $receiverfull=$receiverfirst.' '.$receiverlast;
 $sender=$_SESSION['fname'].' '.$_SESSION['lname'];
 $id=$_SESSION['account'];
 
 if(is_numeric($amount)=="" || is_numeric($account)==""){
  echo "</br>"."You have tried to put string in numeric field please go back and proceed after entering details in correct format";
 }
 if(is_string($receiverfirst)=="" || is_string($receiverlast)==""){
  echo "</br>"."name must be string please go back and proceed after entering details in correct format";
 }
 include 'connect.php';
if($id==$account){
  echo "self transfer is not allowed";
}
else if((int)$amount<0 || (int)$amount>$blcdata){
  echo "amount must be greater than 10 and lower than your current balance ";
}
else{
$sql="SELECT * FROM central WHERE logid='$account' AND fname='$receiverfirst' AND lname='$receiverlast'";
$res=$conn->query($sql);
if(!$res->num_rows>0){
  echo "Please make sure account number are matched with the user name";
}
else{
  while($row=$res->fetch_assoc()){
      $newmoney=(int)$row["balance"]+(int)$amount;
      $row["balance"]=$newmoney;
      $sql1="UPDATE central SET balance=$newmoney where logid='$account'AND fname='$receiverfirst' AND lname='$receiverlast'";
      if($conn->query($sql1)){
        $sql="INSERT INTO `transaction` ( `senderid`, `sendername`, `account number`, `date`, `amount`, `receiverid`, `receivername`) VALUES ( '$id', '$sender', '$id', current_timestamp(), '$amount', '$account', '$receiverfirst $receiverlast');";
        if($conn->query($sql)){
           $_SESSION['balance']=(int)$blcdata-(int)$amount;
           $newbalance=$_SESSION['balance'];
           $sql2="UPDATE central SET balance='$newbalance' WHERE logid=$id";
           if($conn->query($sql2)){
               header("location:customer.php");
           }
           else{
            echo "no";
           }

        }
        else{
          echo "cant subtract";
        }
      }
      else{echo "cant set in central";}
    }
}
}


}




?>