<?php session_start();?>
<?php 
if(!isset($_SESSION['memail'])){
  header("location:signin");
}
?>
<?php include 'data.php';
include 'employeetransactiondata.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="scroll.css">
  <style>
    .bor {
      border: none;
      margin-left: 20px;
      margin-top: 8px;
    }

    .bor:hover {
      transform: scaleX(1.1);
    }
  </style>


</head>

<body>

  <div class="container-fluid bg-light mx-0 px-0">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <img src="lg.png" alt="xyz" height="50" width="100">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <button class="bg-light  bor" id="dash">Dashboard</button>

            </li>
            <li class="nav-item">
              <button class="bg-light  bor" id="createaccount">Create new account</button>

            </li>
            <li class="nav-item">
              <button class="bg-light  bor" id="statement">Verify account</button>

            </li>
            <li class="nav-item">
              <button class="bg-light  bor" id="checkaccount">Check details</button>

            </li>
            <li class="nav-item">
              <button class="bg-light bor" id="fund">Delete account</button>

            </li>
            <li class="nav-item">
              <button class="bg-light  bor" id="credit">credit&debit</button>

            </li>
            <li class="nav-item">
              <button class="bg-light  bor" id=""></button>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Login
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="adminsetting">profile</a></li>
                <li><a class="dropdown-item" href="logout">logout</a></li>

              </ul>
            </li>

          </ul>
          <form class="d-flex">
            <h5>Hello, <?php echo $_SESSION['mfname'];?></h5>
          </form>
        </div>
      </div>
    </nav>
  </div>

  <div class="container-fluid" id="block"></div>
  <div class="container my-5" id="home">
    <div class="container">
      <div class="row my-2 bg-primary text-white px-2 py-3 " id="detail">
        <div class="col">
          <span id="employeename"><?php echo $_SESSION['mfname']?> <?php echo $_SESSION['mlname']?> </span> <br>
          <span id="employeetype">Manager</span> <br>
          <span id="employeenum"><?php echo $_SESSION['mid']?></span>
        </div>
        <div class="col text-end">
          <img src="<?php echo $_SESSION['mphoto']?>" alt="image" class="rounded-circle" height="70px"width="70px">
        </div>
      </div>
      <div class="row py-4">

        <div class="col  bg-success mx-3 text-white h4 py-3">Total users:<br><br>
          <span id="balance " class="h3"><?php
 echo $row1;
 ?></span>

        </div>
        <div class="col bg-warning mx-3 text-white h4 py-3">Total saving:
          <br> <br> Rs. <span id="interest" class="h3"><?php echo $totalamt?></span>
        </div>
        <div class="col bg-dark mx-3 text-white h4 py-3" id="unrealizedblock">Total loan issued:
          <br> <br> Rs. <span id="unrealized" class="h3">100 million</span>
        </div>


      </div>

      <div class="container my-5 px-2 py-2 bg-light">
        <p class="text-center my-3 h3">Transaction analysis chart</p>
        <canvas id="myChart"></canvas>

      </div>


    </div>

  </div>




  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- <script src="graph.js"></script> -->
  <script>
      var jan=<?php echo $janamt?>;
    var feb=<?php echo $febamt ?>;
    var march=<?php echo $maramt ?>;
     var april=<?php echo $aprilamt?>;
     var may=<?php echo $mayamt?>;
     var june=<?php echo $juneamt ?>;
     var july=<?php echo $julyamt ?>;
     var aug=<?php echo $augamt?>;
     var sept=<?php echo $septamt ?>;
     var oct=<?php echo $octamt ?>;
     var nov=<?php echo $novamt?>;
     var dec=<?php echo $decamt?>;
     

var ctx = document.getElementById('myChart').getContext('2d');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['jan', 'Feb', 'march', 'april', 'may', 'june', 'july', 'aug','sept', 'oct','nov','Dec'],
        datasets: [{
            label: 'Transaction on Total',
            data: [jan,feb,march,april,may,june,july,aug,sept,oct,nov,dec],
            backgroundColor: [
                'green'
            ],
            borderColor: [
                'black'
            ],
            borderWidth: 2
        }]
    },
    options: {
      tension:0.4,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
 </script>
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
  <script src="request.js"></script>
 
</body>

</html>
