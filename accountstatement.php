<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .labell{
        
        background-color: darkgrey;
        padding:15px;
        margin-top:15px;
    }
</style>
</head>
<body>
    <div class="container">
    <div class="container py-3"  style="height:500px;">
        <p class="h2 text-center">Transaction history</p>
 <div class="overflow-auto">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">sn</th>
            <th scope="col">Account name</th>
            <th scope="col">Account number</th>
            <th scope="col">Date</th>
            <th scope="col">Amount</th>
            <th scope="col">status</th>
          </tr>
        </thead>
        <tbody>
          <?php 
          include 'connect.php';
          $account=$_SESSION['account'];
          $sql="SELECT * FROM transaction WHERE senderid='$account' OR receiverid='$account'";
          $res=$conn->query($sql);
          if($res){
            while($row=$res->fetch_assoc()){
              if($account==$row["receiverid"]){
                ?>
                <tr>
                <th scope="row"><?php echo $row["id"]?></th>
                <td><?php echo $row["sendername"]?></td>
                <td><?php echo $row["senderid"]?></td>
                <td><?php echo $row["date"]?></td>
                <td><?php echo $row["amount"]?></td>
                <td class="bg-success text-light">received</td>
              </tr>
              <?php
              }
              ?>
              <?php
              if($account==$row["senderid"]){
                ?>
                 <tr>
                <th scope="row"><?php echo $row["id"]?></th>
                <td><?php echo $row["receivername"]?></td>
                <td><?php echo $row["receiverid"]?></td>
                <td><?php echo $row["date"]?></td>
                <td><?php echo $row["amount"]?></td>
                <td class="bg-primary text-light">sent</td>
              </tr>
              <?php
              }
              ?>
              <?php
            }
          }
          ?>
        
         
         
          
        </tbody>
      </table>
 </div>
</div>
<!----------------notification-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
  