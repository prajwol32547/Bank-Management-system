<?php
if(isset($_POST['receiveotp'])){
$rotp=$_POST['rotp'];
$newpass=$_POST['newpass'];
$cpass=$_POST['cpass'];
$email=$_POST['email'];
include 'connect.php';
$sql="SELECT * FROM auth WHERE email='$email'";
$res=$conn->query($sql);
if($res){
    $row=$res->fetch_assoc();
    $otp=$row["otp"];
    if($otp==$rotp){
       if($newpass==$cpass){
        $newhash=password_hash($newpass,PASSWORD_BCRYPT);
        $sql="UPDATE auth SET password='$newhash' WHERE email='$email'";
        $res=$conn->query($sql);
        if($res){
          $nextotp=rand(5000,10000);
          $sql2="UPDATE auth SET otp=$nextotp WHERE email='$email'";
          $res2=$conn->query($sql2);
        if($res2){
          include 'success.php';
        }
        else{
          $msg= "some error occured try again.";
      }
       }
       else{
        include 'error.php';
       }
    }
    else{
      $msg= "enter same password";
    }
}
else{
  $msg= "OTP did not matched";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container  my-5 py-5">
    <h1 class="text-center mb-4">Reset password</h1>
    
 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="form" method="post">
 <div class="mb-3 py-2">
  <p class="text-center my-2"><?php if(isset($msg)){ echo $msg;}
  else{ echo"OTP is sent to your Email plase verify your account to proceed";}?></p>
</div>
 <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label"> OTP</label>
  <input type="number" name="rotp"class="form-control" id="formGroupExampleInput" placeholder="otp">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label"> Email</label>
  <input type="email" name="email" class="form-control" id="formGroupExampleInput" placeholder="email">
</div>
 <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label"> New password</label>
  <input type="password" name="newpass"class="form-control" id="formGroupExampleInput" placeholder="" MinLength="8" MaxLength="15">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Re type password</label>
  <input type="password"  name="cpass"class="form-control" id="formGroupExampleInput2" placeholder="" MinLength="8" MaxLength="15">
</div>
<input type="submit" class="btn btn-primary " value="change" name="receiveotp">
 </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
