

<?php
error_reporting(E_ERROR|E_PARSE);
$fullname = $_POST['fullname'];
$date = $_POST['date'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];

if(isset($_POST['click']))
{
    $date_clicked = date('Y-m-d H:i:s');
}

$epoch = strtotime($date_clicked);
$add7days = strtotime("+7days", $epoch);

$dt = new DateTime("@$add7days");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-loan.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Confirmation</title>
    <style>
      *{
        padding:0px;
        margin:0px;
        box-sizing:border-box;
      }
    </style>
</head>
<body>
  
<div class="my-5 px-0" style="overflow-x:hidden;max-width:100vw;">
<div class="card bg-grey mb-3 shadow  bg-body rounded" style="max-width: 18rem; position:relative; left:10%;">
  <div class="card-header">Information</div>
  <div class="card-body">
    <h5 class="card-title">Appointment </h5>
    <p class="card-text">Thank You for Applying Loan in the Bank</p>
    <p class="card-text"> The Appointment is in <?php echo $dt->format("y-m-d")?></p>
  </div>

</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>

