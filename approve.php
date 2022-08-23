<?php
error_reporting(E_ERROR|E_PARSE);
include 'connect.php';
$id=$_GET['id'];
$sql="SELECT * FROM `unverifiedaccount` WHERE id=$id";
$res=$conn->query($sql);
if($res){
    while($row=$res->fetch_assoc()){
$fname=$row["firsname"];
$mname=$row["middlename"];
$lname=$row["lastname"];
$number=$row["curentnumber"];
$email=$row["email"];
$fathername=$row["fathername"];
$citizen=$row["citizenship"];
$citizennumber=$row["citizennumber"];
$fathercitizen=$row["fathercitizenship"];
$dob=$row["dob"];
$recentphoto=$row["recentphoto"];
$profession=$row["profession"];
$soi=$row["sourceofincome"];
$branch=$row["branch"];
$acctype=$row["accountype"];
$perprovince=$row["permanentprovince"];
$perdistrict=$row["permanentdistrict"];
$permun=$row["permanentmun"];
$perward=$row["permanentward"];
$pertole=$row["permanenttole"];
$tprovince=$row["temporaryprovince"];
$tdistrict=$row["temporarydistrict"];
$tmun=$row["temporarymun"];
$tward=$row["temporaryward"];
$ttole=$row["temporarytole"];
$ibank=$row["ibank"];

$sql1=$sql="INSERT INTO `central` (`fname`, `mname`, `lname`, `email`,`number`,`accounttype`,`intdate`, `branch`, `date`, `logid`, `image`, `citizenshipnumber`, `citizenship`, `fathersname`, `fathercitizenship`,`dob`, `perprovince`, `perdistrict`, `permun`, `perward`, `pertole`, `tprovince`, `tdistrict`, `tmun`, `tward`, `ttole`, `loanid`, `ibank`) VALUES ( '$fname', '$mname', '$lname', '$email',$number,'$acctype',current_timestamp(), '$branch', current_timestamp(), ' ', '$recentphoto', '$citizennumber', '$citizen', '$fathername', '$fathercitizen', '$dob','$perprovince', '$perdistrict', '$permun', $perward, '$pertole', '$tprovince', '$tdistrict', '$tmun', $tward, '$ttole', '', '$ibank'); ";
$res1=$conn->query($sql1);
if($res1){
if($ibank=="yes"){
    $sql4="SELECT id from central where email='$email';";
    $res4=$conn->query($sql4);
    if($res4){
        while($row4=$res4->fetch_assoc()){
            $id11=implode($row4);
        }
    }
    $passhash=password_hash($number,PASSWORD_BCRYPT);
    $sql3="INSERT INTO `auth` (`logid`, `username`, `email`, `password`) VALUES ($id11, '$fname $lname', '$email', '$passhash');";
    $res3=$conn->query($sql3);
    if($res3){
        $sql5="update central set logid=$id11 where email='$email';";
        $res5=$conn->query($sql5);
    }
}
 $sql2="DELETE FROM unverifiedaccount WHERE id = $id";
 $res2=$conn->query($sql2);
 if($res2){
        $message="Your account was succesfully activated."."\n". "If you have chosen internet banking facility you can login via Email='your email' and password='your number'."."\n"." please change your credentials after your first login." ;
        $to = $email;
        $subject = "Account activation";
        $txt = $message;
        
     if(mail($to,$subject,$txt)){
        include 'success.php';
        
    }
    else{
        include 'error.php';
    }
    }
 }


else{
    include 'error.php';
}

    }

}


?>