<?php

require_once "../backend/db.php";


$username = trim($_POST["username"]);
$password =trim($_POST["password"]);
$email =trim($_POST["email"]);
$repassword =trim($_POST["repassword"]);

$error = 0;
$result =true;



if($password !== $repassword){
    header("Location: ../signup.html?retypedpassworddoesn'tmatched");
    $error++;
}

if(strlen($password) < 8){
    header("Location: ../index.html?passwordtooshort");
    $error++;
}

else{
    // $sql = "SELECT *  FROM   `internetBanking`.`signin` WHERE `username` LIKE '$username'";
    // $result = $conn->query($sql);

    // echo mysqli_num_rows($result);
    $insert = "INSERT INTO `internetBanking`.`signin` (`id`,`username`, `password` ,`email`) VALUES (NULL, '$username','$password', '$email')";
    $check = $conn->query($insert);
  if ($check === TRUE) {
    header("Location: ../index.html?welcome.php");
  } else {
    echo "Error: " . $check. "<br>" . $conn->error;
    $error++;
  }
//     if(mysqli_num_rows($result) > 0 ){
//        header(("Location: ../index.html?usernametaken")); 
//        $error++;
//    }
   }

// if($error == 0){
  
  
// }

echo $error;

?>