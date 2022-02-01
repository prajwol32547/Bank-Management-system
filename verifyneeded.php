
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
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$conn = new mysqli($servername, $username, $password, $dbname);


$sql = "SELECT * FROM `newaccount`";
$result = $conn->query($sql);


if (mysqli_num_rows($result) > 0) {
  while($row = $result->fetch_assoc()) {
   ?>
   <tr>
   <td><?php echo $row["firstname"];?></td>
   <td><?php echo $row["accountnumber"];?></td>
   <td><?php echo $row["reg_date"];?></td>
   <td><?php echo $row["accountbalance"];?></td>
   <td><?php echo "unverified";?></td>
   </tr>
   </table>
   <?php
  };
  }
//  else {
//   echo "0 results";
// }
// $conn->close();

?>

=======


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<table class="table">
        <thead>
          <tr>
            <th scope="col">sn</th>
            <th scope="col">Account name</th>
            <th scope="col">Account number</th>
            <th scope="col">Date</th>
            <th scope="col">Credit Amount</th>
            <th scope="col">status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">2</th>
            <td>Mark ruffalo</td>
            <td>44322556</td>
            <td>2078-09-21</td>
            <td>5000</td>
            <td><button type="submit">Unverified</button></td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>genie huston</td>
            <td>9388385</td>
            <td>2078-08-02</td>
            <td>15000</td>
            <td><button type="submit">Unverified</button></td>
          </tr>
          
        </tbody>
      </table>

