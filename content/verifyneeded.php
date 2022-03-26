<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="container py-3"  style="height:500px;">
        <p class="h2 text-center">Transaction history</p>
 <div class="overflow-auto">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<table class="table">
<tr>
            <th scope="col">Name</th>
            <th scope="col">Accountnumber</th>
            <th scope="col">Applied Date</th>
            <th scope="col">Credit</th>
            <th scope="col">Status</th>
        </tr>
<?php
require_once "../backend/db.php";


$sql = "SELECT * FROM `newaccount`";
$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) {
  while($row = $result->fetch_assoc()) {
   ?>
   <tr>
   <td><?php echo $row["firstname"];?></td>
   <td name="accountnumber"><?php echo $row["accountnumber"];?></td>
   <td><?php echo $row["reg_date"];?></td>
   <td><?php echo $row["accountbalance"];?></td>
   <td><?php echo '<a href="../backend/verify-account.php"><button> unverified</button></a>';?></td>
   </tr>
   
   <?php
   
  }
  
  }


?>
</table>

