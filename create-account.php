<?php
if(isset($_POST['submitbtn'])){
$gendertype=strip_tags($_POST['gender']);
$fname=strip_tags($_POST['fname']);
$mname=strip_tags($_POST['mname']);
$lname=strip_tags($_POST['lname']);
$currnumber=$_POST['number'];
$email=strip_tags($_POST['email']);
$fathername=strip_tags($_POST['fathername']);
$fathercitizen=$_FILES['citizen'];
$citizenshipcard=$_FILES['citizen'];
$citizennumber=strip_tags($_POST['cnumber']);
$dob=strip_tags($_POST['dob']);
$newDate = date("Y-m-d", strtotime($dob)); 
$recentphoto=$_FILES['ppphoto'];
$profession=strip_tags($_POST['profession']);
$soi=strip_tags($_POST['sourceofincome']);
$branch=strip_tags($_POST['branch']);
$accounttype=strip_tags($_POST['accounttype']);

$tprovince=strip_tags($_POST['tprovince']);
$tdistric=strip_tags($_POST['tdistrict']);
$tmunicipality=strip_tags($_POST['tmun']);
$tward=strip_tags($_POST['tward']);
$ttole=strip_tags($_POST['ttole']);

$deposit=strip_tags($_POST['deposit']);
$ibank=$_POST['ibank'];
}
$loop=array($fname,$mname,$lname,$fathername,$tprovince,$tdistric,$tmunicipality);
$reg= "/^([^0-9]*)$/";
for($i=0;$i<=6;$i++){
if(preg_match($reg,$loop[$i])){
    break;
}
else{
    echo "</br>"."You have entered number in the field where there should be only number";
    
header("Refresh:5,url=employee");
}
}

$filename=$fathercitizen['name'];
$filepath=$fathercitizen['tmp_name'];
$fileerror=$fathercitizen['error'];
$filetype=$fathercitizen['type'];
$filesize=$fathercitizen['size'];
if($fileerror!=0 && $filesize>5242880){
    echo "</br>"."file size must be lesser than 5 MB for father citizenship please try again";
header("Refresh:5,url=employee");
}
else if( strtolower($filetype)!='image/jpeg' && strtolower($filetype)!='image/jpg'&& strtolower($filetype)!='image/png'){
    echo "</br>"."file must be in the form of png, jpg and jpeg format only"; 
    
header("Refresh:5,url=employee");
}
else{
    $dest="imgup/".$filename;
    move_uploaded_file($filepath,$dest);}

    $filename1=$citizenshipcard['name'];
$filepath1=$citizenshipcard['tmp_name'];
$fileerror1=$citizenshipcard['error'];
$filetype1=$citizenshipcard['type'];
$filesize1=$citizenshipcard['size'];
if($fileerror1!=0  && $filesize1>5242880){
      echo "</br>"."file size must be lesser than 5 MB for citizenship card please try again";
}
else if(strtolower($filetype1)!= "image/jpeg" && strtolower($filetype1)!="image/jpg" && strtolower($filetype1)!="image/png"){
    echo "</br>"."file must be in the form of png, jpg and jpeg format only for citizenship card";
      header("Refresh:5,url=employee");
}
else{
    $dest1="imgup/".$filename1;
    move_uploaded_file($filepath1,$dest1);}

    $filename2=$recentphoto['name'];
    $filepath2=$recentphoto['tmp_name'];
    $fileerror2=$recentphoto['error'];
    $filetype2=$recentphoto['type'];
    $filesize2=$recentphoto['size'];
    if($fileerror2!=0 && $filesize2>5242880){
      echo "</br>"."file size must be lesser than 5 MB for recent photo please try again";
}
else if(strtolower($filetype2)!= "image/jpeg" && strtolower($filetype2)!="image/jpg"&& strtolower($filetype2)!="image/png"){
    echo "</br>"."file must be in the form of png, jpg and jpeg format only for your recent photo";
header("Refresh:5,url=employee");
}
else{
        $dest2="imgup/".$filename2;
        move_uploaded_file($filepath2,$dest2);}

include 'connect.php';
$sql0="SELECT * FROM Central WHERE email='$email'";
$res0=$conn->query($sql0);
$row=$res0->fetch_assoc();
if($row==0){
$sql="INSERT INTO `central` (`fname`, `mname`, `lname`, `email`, `number`, `balance`, `interest`, `intdate`, `accounttype`, `branch`, `date`, `logid`, `image`, `citizenshipnumber`, `citizenship`, `fathersname`, `fathercitizenship`, `dob`, `tprovince`, `tdistrict`, `tmun`, `tward`, `ttole`, `ibank`) VALUES ( '$fname', '$mname', '$lname', '$email', $currnumber, '$deposit', '', current_timestamp(), '$accounttype', '$branch', current_timestamp(), '', '$dest2', '$citizennumber', '$dest1', '$fathername', '$dest', $dob, '$tprovince', '$tdistric', '$tmunicipality', $tward, '$ttole', '$ibank');";
$res=$conn->query($sql);
if($res){
    if($ibank=="yes"){
        $sql4="SELECT id from central where email='$email';";
        $res4=$conn->query($sql4);
        if($res4){
            while($row4=$res4->fetch_assoc()){
                $id11=implode($row4);
            }
        }
        $passhash=password_hash($currnumber,PASSWORD_BCRYPT);
        $sql3="INSERT INTO `auth` (`logid`, `username`, `email`, `password`) VALUES ($id11, '$fname $lname', '$email', '$passhash');";
        $res3=$conn->query($sql3);
        if($res3){
        $sql5="update central set logid=$id11 where email='$email';";
        $res5=$conn->query($sql5);
        if($res5){
         $message="Your account was succesfully activated."."\n". "If you have chosen internet banking facility you can login via Email='your email' and password='your number'."."\n"." please change your credentials after your first login." ;
        $to =$email;
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
    }
    else{
        echo "<script>alert('Ok you don't want Internet banking');</script>";
    }
    include "success.php";
}
else{
include 'error.php';
}}
else{
    ?>
    <script>alert('email exists')</script>
    <?php
}
?>