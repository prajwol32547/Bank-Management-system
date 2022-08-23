<?php
if(isset($_POST['send'])){
    $from=$_POST['from_email'];
    $name=$_POST['name'];
    $message=$_POST['message'];
    $sub=$_POST['subject'];
    $to = "xyzbanklimited1@gmail.com";
    $subject = $sub."from".$from ;
    $txt = $message;
    


     if(mail($to,$subject,$txt)){
    include 'success.php';
    
}
else{
    include 'error.php';
}
}
?>