<html>
    <head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
<?php

error_reporting(E_ERROR|E_PARSE);
if(isset($_POST['submitbtn'])){

$gendertype=$_POST['gender'];
$fname=strip_tags($_POST['fname']);
$mname=strip_tags($_POST['mname']);
$lname=strip_tags($_POST['lname']);
$currnumber=strip_tags($_POST['number']);
$email=strip_tags($_POST['email']);
$fathername=strip_tags($_POST['fathername']);
$fathercitizen=$_FILES['citizen'];
$citizenshipcard=$_FILES['citizen'];
$citizennumber=strip_tags($_POST['cnumber']);
$dob=$_POST['dob'];
$newDate = date("Y-m-d", strtotime($dob)); 
$recentphoto=$_FILES['ppphoto'];
$profession=strip_tags($_POST['profession']);
$soi=strip_tags($_POST['sourceofincome']);
$branch=strip_tags($_POST['branch']);
$accounttype=strip_tags($_POST['accounttype']);
$perprovince=strip_tags($_POST['perprovince']);
$perdistric=strip_tags($_POST['perdistrict']);
$permunicipality=strip_tags($_POST['permun']);
$perward=strip_tags($_POST['perward']);
$pertole=strip_tags($_POST['pertole']);
$tprovince=strip_tags($_POST['tprovince']);
$tdistric=strip_tags($_POST['tdistrict']);
$tmunicipality=strip_tags($_POST['tmun']);
$tward=strip_tags($_POST['tward']);
$ttole=strip_tags($_POST['ttole']);
$ibank=$_POST['ibank'];

$filename=$fathercitizen['name'];
$filepath=$fathercitizen['tmp_name'];
$fileerror=$fathercitizen['error'];
if($fileerror==0){
    $dest="imgup/".$filename;
    move_uploaded_file($filepath,$dest);}
    $filename1=$citizenshipcard['name'];
$filepath1=$citizenshipcard['tmp_name'];
$fileerror1=$citizenshipcard['error'];
if($fileerror1==0){
    $dest1="imgup/".$filename1;
    move_uploaded_file($filepath1,$dest1);}
    $filename2=$recentphoto['name'];
    $filepath2=$recentphoto['tmp_name'];
    $fileerror2=$recentphoto['error'];
    if($fileerror2==0){
        $dest2="imgup/".$filename2;
        move_uploaded_file($filepath2,$dest2);}


include 'connect.php';
$sql="SELECT * FROM central Where email='$email'";
$sql2="SELECT * FROM unverifiedaccount Where email='$email'";

$res=$conn->query($sql);
// while($row=$res->fetch_assoc()){
//     if($row["email"]==$email){
//        header("location:error.php");
//         break;
//     }

// }
$res2=$conn->query($sql2);
$row2 =$res2->num_rows;
$row=$res->num_rows;
if($row==0 && $row2==0){

$sql1="INSERT INTO unverifiedaccount (firsname, middlename, lastname, curentnumber, email, fathername, citizenship, citizennumber, fathercitizenship, dob, recentphoto, profession, sourceofincome, branch, accountype, permanentprovince, permanentdistrict, permanentmun, permanentward, permanenttole, temporaryprovince, temporarydistrict, temporarymun, temporaryward, temporarytole, ibank) VALUES ('$fname', '$mname', '$lname', '$currnumber', '$email', '$fathername', '$dest', '$citizennumber', '$dest1', '$newDate', '$dest2', '$profession', '$soi', '$branch', '$accounttype', '$perprovince', '$perdistric', '$permunicipality', '$perward', '$pertole', '$tprovince', '$tdistric', '$tmunicipality', '$tward', '$ttole', '$ibank');";
$res1=$conn->query($sql1);
if($res1){
    
    include 'success.php';
    ?>
    <script>
        alert('you will get notified about your account activation via email `\n` Thank you');
    </script>
    <?php
   
} 
else {
    include 'error.php';
}

}
else{
    echo 'email exists';
}
}

?>

</html>
