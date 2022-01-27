<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
    $username=$_POST['user'];
  $address=$_POST['add'];
}
if(empty($username)){
    $user_error="no username";
}
if(empty($address)){
    $add_error="no address";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=" " method="post" autocomplete="off">
        name:<input type="text" name="user"> <br>
        <span> <?php if(isset($user_error))echo $user_error;?></span> <br>
        address: <input type="text" name="add"> <br>
        <span> <?php if(isset($add_error)) echo $add_error;?></span> <br>
        <input type="submit">
    </form>
  

</body>
</html>