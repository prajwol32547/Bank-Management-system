
<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$conn = new mysqli($servname, $username, $password, $dbname);


$accountnumber = $_POST["accountnumber"];
// echo $firstname;
$sql = "SELECT *  FROM `verifiedaccount` WHERE `accountnumber` = '$accountnumber';";

$result = $conn->query($sql);



if (!$firstname = "") 
{
  if(mysqli_num_rows($result) >0){ 
    while ($row = $result->fetch_assoc()) {
        ?>
        <html>
          <head>
        <link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <div class="signup-page" id="profile" >
    </head>
    <body>
          <center class="m-4"><h4>Add New Customer</h4></center>

          <form class="signup-form" action="verify-account.php" method="post" enctype="multipart/form-data">
              <div class="column form-items col-sm-4 col-md-3">
                <label>Firstname</label>
                <input type="text" class="input-field form-control" name="firstname" value="<?php echo $row['firstname'];?>" required >
              </div>
              <div class="column form-items col-sm-4 col-md-3">
                <label>Middlename</label>
                <input type="text" class="input-field form-control" name="middlename" value="<?php echo $row['middlename'];?>" required>
              </div>
              <div class="column form-items col-sm-4 col-md-3">
                <label>Lastname</label>
                <input type="text" class="input-field form-control" name="lastname" value="<?php echo $row['lastname'];?>" required>
              </div>
              <div class="column form-items col-sm-4 col-md-3">
                <label>Email</label>
                <input type="email" class="input-field form-control" name="email" value="<?php echo $row['email'];?>" required>
              </div>
              <div class="column form-items col-sm-4 col-md-3">
                <label>Mobile Number</label>
                <input type="number" class="input-field form-control" name="mobilenumber" value="<?php echo $row['mobilenumber'];?>" required>
              </div>
             
              <div class="column form-items col-sm-4 col-md-3">
                <label>Date Of Birth</label>
                <input type="date" class="input-field form-control" name="dateofbirth" value="<?php echo $row['dateofbirth'];?>" required>
              </div>
              <div class="column form-items col-sm-4 col-md-3">

                <label>Account Number (Don't Edit)</label>
                <input type="number" class="input-field form-control" value="<?php echo $row['accountnumber'];?>" name="accountnumber">
              </div>
              <div class="column form-items col-sm-4 col-md-3">
                <label>Account Balance</label>
                <input type="number" class="input-field form-control" value="200" value="<?php echo $row['accountbalance'];?>" name="accountbalance">
              </div>
              
              <div class="column form-items col-sm-4 col-md-3">
                <label>City</label>
                <input type="text" class="input-field form-control" name="city" value="<?php echo $row['city'];?>" required>
              </div>
              
              <div class="column form-items col-sm-4 col-md-3">
                <label>District</label>
                <input type="text" class="input-field form-control" name="district" value="<?php echo $row['district'];?>" required>
              </div>
              <div class="column form-items col-sm-4 col-md-3">
                <label>pincode</label>
                <input type="number" class="input-field form-control" name="pincode" value="<?php echo $row['pincode'];?>" required>
              </div>
              <div class="column form-items col-sm-4 col-md-3">
                      <label  required>Select state</label>
                              <select class="form-select" name="state">
                                    <option >Select State</option>
                                    <option value="Province 1" <?php if($row['state']=="Province 1") echo 'selected'; ?>>Province 1</option>
                                    <option value="Province 2" <?php if($row['state']=="Province 2") echo 'selected'; ?>>Province 2</option>
                                    <option value="Province 3" <?php if($row['state']=="Province 3") echo 'selected'; ?>>Province 3</option>
                                    <option value="Province 4" <?php if($row['state']=="Province 4") echo 'selected'; ?>>Province 4</option>
                                    <option value="Province 5" <?php if($row['state']=="Province 5") echo 'selected'; ?>>Province 5</option>
                                    <option value="Province 6" <?php if($row['state']=="Province 6") echo 'selected'; ?>>Province 6</option>
                                    <option value="Province 7" <?php if($row['state']=="Province 7") echo 'selected'; ?>>Province 7</option>
                            </select>
            </div> 

            <div class="column form-items col-sm-4 col-md-3">
                <div class="form-check">
                      <input  type="radio" value="Male" name="gender" <?php if($row['gender']=="Male") echo 'checked'; ?> >
                      <label for="gender">Male</label>
                </div>
                <div class="form-check">
                      <input  type="radio" value="Female" name="gender" <?php if($row['gender']=="Female") echo 'checkedsu'; ?> >
                      <label for="gender">Female</label>
                      
                </div>
            </div>

              <div class="column form-items col-sm-4 col-md-3">
                    <input type="submit" name="addcustomer" >
              </div>
          </form>
        </div>
    </body>
        </html>
        <?php
    }
  }
    else {
      echo "no user found";
    }
}
    ?>

