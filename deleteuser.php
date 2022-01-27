




<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$conn = new mysqli($servname, $username, $password, $dbname);


$accountnumber= $_POST["accountnumber"];
$reaccountnumber=$_POST["reaccountnumber"];

echo $accountnumber;
if($accountnumber !== $reaccountnumber){
    echo "Re typed password isn't same";
}
else{
$create = "INSERT INTO `deletedaccount` SELECT * FROM `verifiedaccount` WHERE `verifiedaccount`.`accountnumber` = '$accountnumber'";
$delete = "DELETE  FROM `verifiedaccount` WHERE `verifiedaccount`.`accountnumber` = '$accountnumber' ";
if ($conn->query($create) && $conn->query($delete) === TRUE) {
    // header("Location: http://localhost/internetBanking/index.html");
    

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}