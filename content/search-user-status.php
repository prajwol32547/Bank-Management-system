<?php
echo ("hello world");

require_once "../backend/db.php";


$accountnumber = $_POST["accountnumber"];

$sql = "SELECT *  FROM `verifiedaccount` WHERE `accountnumber` = '$accountnumber';";

$result = $conn->query($sql);


if (!$accountnumber = "") {
  if (mysqli_num_rows($result) > 0) {
    while ($row = $result->fetch_assoc()) {
?>    <!DOCTYPE html>
      <html>

      <head>
        <link rel="stylesheet" href="style.css?v=2">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <div class="signup-page" id="profile">
      </head>

      <body>
        <center class="m-4">
          <h4>Customer Information</h4>
        </center>

        <form class="user-status-form"  method="post" enctype="multipart/form-data">
          <div class="user-status-form-data">
            <div class="column form-items col-sm-4 col-md-3">
              <label>Firstname:</label>
              <span> <?php echo $row['firstname']; ?> </span>
            </div>
            <div class="column form-items col-sm-4 col-md-3">
              <label>Middlename:</label>
              <span> <?php echo $row['middlename']; ?> </span>
            </div>
            <div class="column form-items col-sm-4 col-md-3">
              <label>Lastname:</label>
              <span><?php echo $row['lastname']; ?></span>
            </div>
            <div class="column form-items col-sm-4 col-md-3">
              <label>Email:</label>
              <span> <?php echo $row['email']; ?></span>
            </div>
            <div class="column form-items col-sm-4 col-md-3">
              <label>Mobile Number:</label>
              <span> <?php echo $row['mobilenumber']; ?></span>
            </div>

            <div class="column form-items col-sm-4 col-md-3">
              <label>Date Of Birth:</label>
              <span> <?php echo $row['dateofbirth']; ?></span>
            </div>
            <div class="column form-items col-sm-4 col-md-3">

              <label>Account Number:</label>
              <span> <?php echo $row['accountnumber']; ?></span>
            </div>
            <div class="column form-items col-sm-4 col-md-3">
              <label>Account Balance:</label>
              <span> <?php echo $row['accountbalance']; ?></span>
            </div>

            <div class="column form-items col-sm-4 col-md-3">
              <label>City:</label>
              <span> <?php echo $row['city']; ?></span>
            </div>

            <div class="column form-items col-sm-4 col-md-3">
              <label>District:</label>
              <span> <?php echo $row['district']; ?></span>
            </div>
            <div class="column form-items col-sm-4 col-md-3">
              <label>pincode:</label>
              <span> <?php echo $row['pincode']; ?> </span>
            </div>
            <div class="column form-items col-sm-4 col-md-3">
              <label required>Select state:</label>
              <span><?php echo $row['state']; ?></span>
            </div>

            <div class="column form-items col-sm-4 col-md-3">
            <label required>Gender:</label>
              <?php
              echo $row['gender'];
              ?>
            </div>
          </div>
        </form>
        </div>
      </body>

      </html>
<?php
    }
  } else {
    echo "no user found";
  }
}
?>