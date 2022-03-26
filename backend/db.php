
<?php 
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$conn = new mysqli($servname, $username, $password, $dbname);

if(!$conn){
    die("Database connection error");
}
?>

