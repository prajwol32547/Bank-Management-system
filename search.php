<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$conn = new mysqli($servname, $username, $password, $dbname);


$firstname = $_POST["firstname"];
// echo $firstname;
$sql = "SELECT *  FROM `newaccount` WHERE `firstname` = '$firstname';";

$result = $conn->query($sql);



if (!$firstname = "") 
{
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="signup-page" id="profile" >
          <center class="m-4"><h4>Add New Customer</h4></center>

          <form class="signup-form" action="verify-account.php" method="post" enctype="multipart/form-data">
              <div class="column">
                <label>Firstname</label>
                <input type="text" class="input-field" name="firstname" value="<?php echo $row['firstname'];?>" required >
              </div>
              <div class="column">
                <label>Middlename</label>
                <input type="text" class="input-field" name="middlename" value="<?php echo $row['middlename'];?>" required>
              </div>
              <div class="column">
                <label>Lastname</label>
                <input type="text" class="input-field" name="lastname" value="<?php echo $row['lastname'];?>" required>
              </div>
              <div class="column">
                <label>Email</label>
                <input type="email" class="input-field" name="email" value="<?php echo $row['email'];?>" required>
              </div>
              <div class="column">
                <label>Mobile Number</label>
                <input type="number" class="input-field" name="mobilenumber" value="<?php echo $row['mobilenumber'];?>" required>
              </div>
             
              <div class="column">
                <label>Date Of Birth</label>
                <input type="date" class="input-field" name="dateofbirth" value="<?php echo $row['dateofbirth'];?>" required>
              </div>
              <div class="column">

                <label>Account Number (Don't Edit)</label>
                <input type="number" class="input-field" value="<?php echo $row['accountnumber'];?>" name="accountnumber">
              </div>
              <div class="column">
                <label>Account Balance</label>
                <input type="number" class="input-field" value="200" value="<?php echo $row['accountbalance'];?>" name="accountbalance">
              </div>
              
              <div class="column">
                <label>City</label>
                <input type="text" class="input-field" name="city" value="<?php echo $row['city'];?>" required>
              </div>
              
              <div class="column">
                <label>District</label>
                <input type="text" class="input-field" name="district" value="<?php echo $row['district'];?>" required>
              </div>
              <div class="column">
                <label>pincode</label>
                <input type="number" class="input-field" name="pincode" value="<?php echo $row['pincode'];?>" required>
              </div>
              <div class="column">
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

            <div class="column">
                <div class="form-check">
                      <input  type="radio" value="Male" name="gender" <?php if($row['gender']=="Male") echo 'checked'; ?> >
                      <label for="gender">Male</label>
                </div>
                <div class="form-check">
                      <input  type="radio" value="Female" name="gender" <?php if($row['gender']=="Female") echo 'checkedsu'; ?> >
                      <label for="gender">Female</label>
                      
                </div>
            </div>

              <div class="column">
                    <input type="submit" name="addcustomer" >
              </div>
          </form>
        </div>
        <?php
    }
}
    ?>

