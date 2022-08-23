<?php 
session_start();?>
<?php
if(isset($_POST['changeme'])){
    $new=$_POST['new'];
    $new1=$_POST['new1'];
    
    $old=$_POST['old'];
    $sess=$_SESSION['password'];
    $oldhash=password_verify($old,$sess);
    $sessmail=$_SESSION['email'];
    
    if($oldhash!=1){
echo "<script>alert('old password did not matched');</script>";
sleep(3);
header('location:changepassword');
    }
else if($new!=$new1){
    echo "<script>alert('New password and confirmed password did not matched');</script>";
    sleep(3);
header('location:changepassword');
}
    else{
         $newhash=password_hash($new,PASSWORD_BCRYPT);
        include('connect.php');
   $sql="UPDATE auth SET password='$newhash' WHERE email='$sessmail'";
   if($conn->query($sql)==TRUE){
       $sess=$new;
       
       header('location:customer');
   }
   else{
    include('error.php');
   }
    }
        
}


?>