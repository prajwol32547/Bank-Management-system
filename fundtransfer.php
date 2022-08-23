<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .border1{
        border:none;
        padding:10px 40px 10px 40px;
        margin-top:30px;
        position:relative;
        left:40%;
    
    }
    .border1:hover{
        transform: scale(1.1);
    }
    @media screen and (max-width:640px) {
        .border1{
        border:none;
        padding:10px 40px 10px 40px;
        margin-top:30px;
        position:relative;
        left:25%;
    
    }
    }
</style>
</head>
<body>
    
    <div class="container bg-light">
        <p class="h2 text-center my-3 text-primary">Transfer money</p>
<form action="moneysend.php" method="post">
        <div class="container py-3 text-dark">
            <div class="row"><div class="col-md-6"><p>Receiver first name</p> 
           <input type="text" class="form-control" placeholder="receiver first name" aria-label="Username" aria-describedby="basic-addon1" name="receiverfirst" required></div><div class="col-md-6"><p>Receiver last name</p> 
           <input type="text" class="form-control" placeholder="receiver last name" aria-label="Username" aria-describedby="basic-addon1" name="receiverlast" required></div></div>
           
           <br><p>account number</p> 
           <input type="text" class="form-control" placeholder="account number" aria-label="Username" aria-describedby="basic-addon1" name="number"required>
<br> <p>Bank</p>
<select class="form-select" aria-label="Default select example">
    <option selected>select bank</option>
    <option value="1" name="XYZ bank limited">xyz bank limited</option>
    <option value="2"name="sidhartha bank">sidhartha bank limited</option>
    <option value="3"name="NIC bank">NIC bank</option>
  </select>
<br><p>amount</p> 
<input type="number" class="form-control" placeholder="amount" aria-label="Username" aria-describedby="basic-addon1" name="paisa" required>
         
        <button class="bg-primary text-white border1 rounded-pill" name="money" >send money</button>
        </div>
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>