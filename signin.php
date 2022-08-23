<?php session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="logstyle.css">
</head>
<body>

 <div class="login-page">
 	<div class="box">
 		<div class="left">
 			<h3>User login</h3>
 			<button type="button" class="register-btn">User login</button>
 		</div>
 		<div class="right">
 			<h3>Admin ?</h3>
 			<button type="button" class="login-btn">Admin Login</button>
 		</div>
 		<div class="form">
 			 <!-- Login form Start -->
 			 <div class="login-form">
 			 	<h3>Admin Log In</h3>
                  <form action="manlogin.php" method="POST">
 			 	<div class="form-group">
 			 		<input type="email" placeholder="Email Address*" class="form-control" id="manemail" name="email" required>
 			 	</div>
 			 	<div class="form-group">
 			 		<input type="password" placeholder="Password*" class="form-control" id="manpw" name="password" required>
 			 	</div>
 			 	<div class="form-group">
 			 		<label>
 			 			<input type="checkbox" id="admin-see"> see password
 			 		</label>
 			 	</div>
 			 	<button type="submit" class="submit-btn">Login</button>
 			 	<p><a href="#" class="register-btn">Register</a> | <a href="#" class="lost-pass-btn">Lost Your Password ?</a></p>
            </form>
 			 </div>
 			 <!-- Login form End -->

             <!-- Register form Start -->
 			 <div class="register-form form-hidden">
                <h3> User Log In</h3>
                <form action="login.php" method="POST" >
                <div class="form-group">
                    <input type="email" placeholder="Email Address*" class="form-control" id="cemail" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password*" class="form-control" id="cpw" name="password" required>
                </div>
                <div class="form-group">
                    <label>
                        <input type="checkbox" id="user-see"> see password
                    </label>
                </div>
                <button type="submit" class="submit-btn">Login</button>
                <p><a href="#" class="register-btn">Register</a> | <a href="forgotpasswordotp" class="lost-pass-btn">Lost Your Password ?</a></p>
                </form>
 			 </div>
 			 <!-- Register form End -->

 			
 			 <!-- Lost Password form End -->

 		</div>
 	</div>
 </div>

 <script src="logscript.js"></script>


	
</body>
</html>