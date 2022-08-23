<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
      a{
        text-decoration:none;
        color:white;
      }
    </style>
  </head>
<body>
  <div class="container overflow-auto" >
<table class="table">
        <thead>
          <tr>
         
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Number</th>
            <th scope="col">Branch</th>
            <th scope="col">Account Type</th>
            <th scope="col">Citizenship Number</th>
            <th scope="col">Fathers Name</th>
            <th scope="col">Permanent Address</th>
            <th scope="col">Temporary Address</th>
            

          </tr>
        </thead>    
        <tbody>
        <?php 
          include 'connect.php';
        
          $sql="SELECT * FROM unverifiedaccount";
          $res=$conn->query($sql);
          if($res){
            while($row=$res->fetch_assoc()){
                ?>
                <tr>
                
                <td><?php echo $row["firsname"]?> <br> <?php echo $row["middlename"]?> <br> <?php echo $row["lastname"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["curentnumber"]?></td>
                <td><?php echo $row["branch"]?></td>
                <td><?php echo $row["accountype"]?></td>
                <td><?php echo $row["citizennumber"]?></td>
                <td><?php echo $row["fathername"]?></td>
                <td><?php echo $row["permanentmun"]?></br> <?php echo $row["permanentward"]?></br> <?php echo $row["permanenttole"]?></td>
                <td><?php echo $row["temporarymun"]?></br> <?php echo $row["temporaryward"]?></br> <?php echo $row["temporarytole"]?></td>
                <td><button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    view photo
  </button></td>
                <td><button class="btn btn-success "><a href="approve.php?id=<?php echo $row["id"];?>" >approve</button></td>
                <td><button class="btn btn-danger "><a href="deletebackend.php?id=<?php echo $row["id"];?>" >delete</button></td>
              </tr>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">recent photo> citzenship > father's citizenship</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php echo $row["recentphoto"]?>" class="d-block w-100" alt="recent photo">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $row["citizenship"]?>" class="d-block w-100" alt="citizenship">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $row["fathercitizenship"]?>" class="d-block w-100" alt="father's citizrnship">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
          <button type="button" class="btn btn-primary">ok</button>
        </div>
      </div>
    </div>
  </div>
          </div>
          
              <?php
              }
            }
            ?>
        </tbody>
        </table>
        
</body>
</html>