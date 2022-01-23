

<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$conn =new mysqli($servername, $username, $password, $dbname);


$firstname = $_POST['firstname'];
$lastname =$_POST['lastname'];
$email =$_POST['email'];
$messages =$_POST['message'];
$sql = "INSERT INTO `contact` (`id`, `firstname`, `lastname`, `Email`, `Message`, `reg_date`) 
VALUES (NULL, '$firstname', '$lastname', '$email', '$messages', current_timestamp());";

if ($conn->query($sql) === TRUE) {
    header("Location: http://localhost/internetBanking/index.html");
    

  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>

