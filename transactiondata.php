<?php
include 'connect.php';
$janamt=0;
$febamt=0;
$maramt=0; 
$aprilamt=0;
$mayamt=0;
$juneamt=0;
$julyamt=0;
$augamt=0;
$septamt=0;
$octamt=0;
$novamt=0;
$decamt=0;
// $name=$_SESSION['fname'].' '.$_SESSION['lname'];
$id=$_SESSION['account'];

$sql="SELECT * FROM transaction WHERE senderid=$id OR receiverid=$id";
$res=$conn->query($sql);
if($res){
    while($row=$res->fetch_assoc()){
   $strdate=$row['date'];
   $date=explode("-",$strdate);
   if($date[1]=='01'){
    $janamt=(int)$janamt+(int)$row['amount'];
    
 }
   if($date[1]=='02'){
    $febamt=(int)$febamt+(int)$row['amount'];
    
 
 }
   if($date[1]=='03'){
       $maramt=(int)$maramt+(int)$row['amount'];
       
    }
    if($date[1]=='04'){
        $aprilamt=(int)$aprilamt+(int)$row['amount'];
   }
   if($date[1]=='05'){
    $mayamt=(int)$mayamt+(int)$row['amount'];
    
 }
 if($date[1]=='06'){
    $juneamt=(int)$juneamt+(int)$row['amount'];
    
 }
 if($date[1]=='07'){
    $julyamt=(int)$julyamt+(int)$row['amount'];
    
 }
 if($date[1]=='08'){
    $augamt=(int)$augamt+(int)$row['amount'];
    
 }
 if($date[1]=='09'){
    $septamt=(int)$septamt+(int)$row['amount'];
    
 }
 if($date[1]=='10'){
    $octamt=(int)$octamt+(int)$row['amount'];
    
 }
 if($date[1]=='11'){
    $novamt=(int)$novamt+(int)$row['amount'];
    
 }
 if($date[1]=='12'){
    $decamt=(int)$decamt+(int)$row['amount'];
    
 }
 
   
    }
   
}
else{
    echo "erroe";
}

?>