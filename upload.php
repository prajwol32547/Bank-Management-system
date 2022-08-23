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
    $id=$_SESSION['account'];
    include 'connect.php';
    $sql="UPDATE central SET image='$dest' WHERE id= $id";
    if($conn->query($sql)==TRUE){
        $_SESSION['photo']=$dest;
        header("location:setting.php");

    }
    else{
        echo "naah".$conn->error;
    }
}
}
?>n 
