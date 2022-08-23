<?php
session_start();
$date=$_SESSION['intdate'];
$interest=$_SESSION['interest'];
$balance=$_SESSION['balance'];
$email=$_SESSION['email'];
// echo $email;
$prevdate=explode("-",$date);
//  print_r($prevdate);
// echo $interest;
date_default_timezone_set('Asia/Kathmandu');
$d=date("Y-m-d");
// 
$newdate=explode("-",$d);
// echo $newdate[1];
// echo $prevdate[2];
// echo $newdate[2];
// echo "</br>";
$time=date("H:i:s");
$timeexplode=explode(":",$time);
$timegone=abs($newdate[2]-$prevdate[2]);
// print_r($timeexplode);
if($newdate[1]-$prevdate[1]==0){
if($timegone>0){
    
$newinterest=(float)$balance*0.00011111111*$timegone+(float)$interest;
        include 'connect.php';
        $sql="UPDATE central SET interest=$newinterest,intdate=current_timestamp() WHERE email='$email'";
        $res=$conn->query($sql);
        if ($res){
            $_SESSION['interest']=round($newinterest,3);
            $_SESSION['intdate']=$d;
            // echo "succesful";
            }
            else{
                echo "cant execute 1";
            }
    }
}

else if($newdate[1]-$prevdate[1]==1){
$newbalance=(float)$_SESSION['interest']+(float)$balance;
$sql1="UPDATE central SET balance=$newbalance,intdate=current_timestamp(),interest=0 WHERE email='$email'";
$res1=$conn->query($sql1);
if($res1){
    $_SESSION['interest']=0;
    $_SESSION['intdate']=$d;
}
}



    
   
    