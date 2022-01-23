<html>
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">

<title>Sign up</title>

</head>
        <body>
        
        <div class="signup-page" id="profile" >
          <center class="m-4"><h4>Add New Customer</h4></center>

          <form class="signup-form" action="create-account.php" method="post" enctype="multipart/form-data">
              <div class="column">
                <label>Firstname</label>
                <input type="text" class="input-field" name="firstname" required>
              </div>
              <div class="column">
                <label>Middlename</label>
                <input type="text" class="input-field" name="middlename" required>
              </div>
              <div class="column">
                <label>Lastname</label>
                <input type="text" class="input-field" name="lastname" required>
              </div>
              <div class="column">
                <label>Fathername</label>
                <input type="text" class="input-field" name="fathername" required>
              </div>
              <div class="column">
                <label>Email</label>
                <input type="email" class="input-field" name="email" required>
              </div>
              <div class="column">
                <label>Mobile Number</label>
                <input type="number" class="input-field" name="mobilenumber" required>
              </div>
             
              <div class="column">
                <label>Date Of Birth</label>
                <input type="date" class="input-field" name="dateofbirth" required>
              </div>
              <div class="column">

                <label>Account Number (Don't Edit)</label>
                <input type="number" class="input-field" value="<?php echo rand(); ?>" name="accountnumber">
              </div>
              <div class="column">
                <label>Account Balance</label>
                <input type="number" class="input-field" value="200" name="accountbalance">
              </div>
              
              <div class="column">
                <label>City</label>
                <input type="text" class="input-field" name="city" required>
              </div>
              
              <div class="column">
                <label>District</label>
                <input type="text" class="input-field" name="district" required>
              </div>
              <div class="column">
                <label>pincode</label>
                <input type="number" class="input-field" name="pincode" required>
              </div>
              <div class="column">
                      <label  required>Select state</label>
                              <select class="form-select" name="state">
                                    <option selected>Select State</option>
                                    <option value="Province 1">Province 1</option>
                                    <option value="Province 2">Province 2</option>
                                    <option value="Province 3">Province 3</option>
                                    <option value="Province 4">Province 4</option>
                                    <option value="Province 5">Province 5</option>
                                    <option value="Province 6">Province 6</option>
                                    <option value="Province 7">Province 7</option>
                            </select>
            </div> 

            <div class="column">
                <div class="form-check">
                      <input  type="radio" value="Male" name="gender" >
                      <label for="gender">Male</label>
                </div>
                <div class="form-check">
                      <input  type="radio" value="Female" name="gender" >
                      <label for="gender">Female</label>
                </div>
            </div>

              <div class="column">
                    <input type="submit" name="addcustomer" >
              </div>
              <div class="column">                                                
                    <input type="reset" name="reset-form">
              </div>
          </form>
        </div>
<?php

        if(isset($_GET['options'])){

            if($_GET['options']=="credit"){

                // header("Location: http://localhost/internetBanking/signup.php");

            }elseif($_GET['options']=="saving"){

              // echo "m";

            }

        }


        ?>
        </body>
        </html>