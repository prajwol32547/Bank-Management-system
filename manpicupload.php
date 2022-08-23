<?php
session_start()
?>
<?php
if(isset($_POST['send'])){
    $file=$_FILES['updateprofile'];
     $filename=$file['name'];
$filepath=$file['tmp_name'];
$fileerror=$file['error'];
if($fileerror==0){
    $dest="imgup/".$filename;
    move_uploaded_file($filepath,$dest);
    $email=$_SESSION['memail'];
    include 'connect.php';
    $sql="UPDATE mandb SET image='$dest' WHERE email= '$email'";
    if($conn->query($sql)==TRUE){
        $_SESSION['mphoto']=$dest;
        header("location:adminsetting.php");

    }
    else{
        echo "naah".$conn->error;
    }
}
}
?>n 
