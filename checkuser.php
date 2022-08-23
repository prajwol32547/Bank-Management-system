
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container px-2 text-center" style="margin-top:100px;">
<form action="search.php" method="post">
<div class="container">
<div class="col-12" style="">
<label for="inputaccount" class="form-label">account number</label>
<input type="text" class="form-control" name="number">
<br>
<button class="btn btn-primary rounded-pill px-5 py-2" name="btnone">search</button>
</div>
</form>
<br>
<br>
<form action="search.php" method="post">
<div class="col-12" style="">
<label for="inputaccount" class="form-label">accountholder email</label>
<input type="email" class="form-control" name="email">
<br>
<button class="btn btn-primary rounded-pill px-5 py-2" name="btntwo">search</button>
</div>
</div>
</form>
</div>
<br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>




