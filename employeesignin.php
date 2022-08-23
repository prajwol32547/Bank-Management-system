
<?php 
session_start();
?>
<!doctype html>
<html lang="en">
<title>signin</title>
<link rel="stylesheet" href="style.css?v=2">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body id="body">
<div class="center">

  <form action="login.php" id="form" method="post">

    <h1>Sign-in</h1>
    <div class="txt_field"> <span class="name"></span>  <input type="text"  name="username" required> <label for=""> Name</label></div>
    <div class="txt_field"> <span class="name"></span> <input type="email"  name="email" required><label for=""> Email</label></div>
    <div class="txt_field"><span class="name"></span> <input type="password" name="password"  required> <label for="">Password</label></div>
   

    <input type="submit" value="Sign in" id="btn">
    <br>
    <br>
    <br>
    
  </form>
  <!-- <button value="new User" id="signupButton" onclick="window.location.href='signup.html'"> sign up </button> -->
</div>

<script>
  let btn = document.getElementById('btn');
  btn.addEventListener('click', function () {
    window.location.href = "employee.html";
  });
</script>

</body>
</head>

</html>
