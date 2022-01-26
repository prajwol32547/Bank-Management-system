<html>

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sign up</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>

<body>

  <div class="signup-page" id="profile">
    <h2 class="create">Add New Customer</h2>

    <form class="signup-form" action="create-account.php" method="post" enctype="multipart/form-data">
      <div class="signup-form-type">
        <select class="signup-form-type-select form-select" name="signup-form-type">
          <option>saving account</option>
          <option>credit account</option>
          <option>women saving</option>
        </select>
      </div>
      <div class="signup-form-data">
        <div class="form-items col-sm-4 col-md-3">
          <label>Firstname</label>
          <input type="text" class="input-field form-control" name="firstname" required>
        </div>
        <div class="form-items col-sm-4 col-md-3">
          <label>Middlename</label>
          <input type="text" class="input-field form-control" name="middlename" required>
        </div>
        <div class="form-items col-sm-4 col-md-3">
          <label>Lastname</label>
          <input type="text" class="input-field form-control" name="lastname" required>
        </div>
        <div class="form-items col-sm-4 col-md-3">
          <label>Fathername</label>
          <input type="text" class="input-field form-control" name="fathername" required>
        </div>
        <div class="form-items col-sm-4 col-md-3">
          <label>Email</label>
          <input type="email" class="input-field form-control" name="email" required>
        </div>
        <div class="form-items col-sm-4 col-md-3">
          <label>Mobile Number</label>
          <input type="number" class="input-field form-control" name="mobilenumber" required>
        </div>


        <div class="form-items col-sm-4 col-md-3">

          <label>Account Number </label>
          <input type="number" class="input-field form-control" value="1120000" name="accountnumber">
        </div>
        <div class="form-items col-sm-4 col-md-3">
          <label>Account Balance</label>
          <input type="number" class="input-field form-control" value="200" name="accountbalance">
        </div>

        <div class="form-items col-sm-4 col-md-3">
          <label>City</label>
          <input type="text" class="input-field form-control" name="city" required>
        </div>

        <div class="form-items col-sm-4 col-md-3">
          <label>District</label>
          <input type="text" class="input-field form-control" name="district" required>
        </div>
        <div class="form-items col-sm-4 col-md-3">
          <label>pincode</label>
          <input type="number" class="input-field form-control" name="pincode" required>
        </div>
        <div class="form-items col-sm-4 col-md-3">
          <label required>Select state</label>
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
        <div class="form-items col-sm-4 col-md-3">
          <label>Date Of Birth</label>
          <input type="date" class="input-field form-control" name="dateofbirth" required>
        </div>

        <div class="form-items col-sm-4 col-md-3">
          <div class="form-check">
            <input type="radio" value="Male" name="gender">
            <label for="gender">Male</label>
          </div>
          <div class="form-check">
            <input type="radio" value="Female" name="gender">
            <label for="gender">Female</label>
          </div>
        </div>
      </div>

      <div class="submitbutton form-items">
        <input type="submit" name="addcustomer">
      </div>
      <div class="resetbutton form-items" >
        <input type="reset" name="reset-form">

    </form>
  </div>
  <?php

  if (isset($_GET['options'])) {

    if ($_GET['options'] == "credit") {

      // header("Location: http://localhost/internetBanking/signup.php");

    } elseif ($_GET['options'] == "saving") {

      // echo "m";

    }
  }


  ?>
</body>

</html>