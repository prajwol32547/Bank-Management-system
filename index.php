<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['user'];
  $address=$_POST['email'];
}
echo $username;

?>