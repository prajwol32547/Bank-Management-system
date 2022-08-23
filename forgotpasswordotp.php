
<?php
if(isset($_POST["sendotp"])){
    $email=$_POST['to_email'];
  include 'connect.php';
  $sql="SELECT * FROM auth WHERE email='$email'";
  $res=$conn->query($sql);
  $row=$res->num_rows;
  if($row==1){
  $otp=rand(5000,10000);
  //  echo $otp;

  $sql1="UPDATE auth SET otp=$otp WHERE email='$email'";
  $res1=$conn->query($sql1);
  if($res1){
$to = $email;
$subject = "Change password";
$txt = "your Otp code is ".$otp."\n". "Donot share this otp with anyone";



if(mail($to,$subject,$txt)){
    header("location:forgotpwverification");}
else{
    $error= "Some error occured please try again in few seconds";
}
  }
}
else{
  $error= " Your email does not seem to be registered";
}
}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>forgot password</title>
   <style>
      .password{
        color:red;
        font-family:Helvetica,sans serif;

      }
      
    </style>
</head>
<body>
<div class="container  text-center py-5 ">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  class="form-group border" method="post" >
<div class="container shadow p-3 mb-5 bg-white rounded">
    <h1 name="sagar">Forgot password?</h1>
    <input type="hidden" name="contact_number">
    <br>
<label for="" class="form-label my-2" >Your email:</label><br>
<input type="email" class="form-action my-2" id="email" name="to_email" required><br>
<input type="hidden" class="form-action my-2"name="message">
<button class="btn btn-primary my-2"id="btn" name="sendotp" >submit</button><br><br><br>
<span class="message"><?php if(isset($error)){echo $error;}else{ echo "Enter your valid email";}?> </span>
<br>
</div>
</form>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>



