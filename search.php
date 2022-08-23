<?php

error_reporting(E_ERROR|E_PARSE);

if(isset($_POST['btnone'])||isset($_POST['btntwo'])){?>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>

<?php 
          include 'connect.php';
          $number=$_POST['number'];
          $email=$_POST['email'];
          $sql="SELECT * FROM central where id='$number' OR email='$email'";
          $res=$conn->query($sql);
          if($res){
            while($row=$res->fetch_assoc()){
                ?>
                <div class="container overflow-auto">
                  
<table class="table">
        <thead>

          <tr>
          <th scope="col">account number</th>
            <th scope="col">fname</th>
            <th scope="col">mname</th>
            <th scope="col">lname</th>
            <th scope="col">email</th>
            <th scope="col">number</th>
            <th scope="col">branch</th>
            <th scope="col">balance</th>
            <th scope="col">interest</th>
            <th scope="col">account type</th>
            <th scope="col">citizenship number</th>
            <th scope="col">fathers name</th>
            <th scope="col">permanent address</th>
            <th scope="col">temporary address</th>
            

          </tr>
        </thead>    
        <tbody>
      

                <tr>
                <td><?php echo $row["id"]?></td>
                <td><?php echo $row["fname"]?></td>
                <td><?php echo $row["mname"]?></td>
                <td><?php echo $row["lname"]?></td>
                <td><?php echo $row["email"]?></td>
                <td><?php echo $row["number"]?></td>
                <td><?php echo $row["branch"]?></td>
                <td><?php echo $row["balance"]?></td>

                <td><?php echo $row["interest"]?></td>
                <td><?php echo $row["accounttype"]?></td>
                <td><?php echo $row["citizenshipnumber"]?></td>
                <td><?php echo $row["fathersname"]?></td>
                <td><?php echo $row["permun"]?></br> <?php echo $row["perward"]?></br> <?php echo $row["pertole"]?></td>
                <td><?php echo $row["tmun"]?></br> <?php echo $row["tward"]?></br> <?php echo $row["ttole"]?></td>
                <td><button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">View photo</td>
                
              </tr>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">recent photo > citizenship > father's citizenship</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="<?php echo $row['image']?>" class="d-block w-100" alt="recent photo">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $row['citizenship']?>" class="d-block w-100" alt="citizenship">
                  </div>
                  <div class="carousel-item">
                    <img src="<?php echo $row['fathercitizenship']?>" class="d-block w-100" alt="father's citizenship">
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
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Ok</button>
        </div>
      </div>
    </div>
  </div>
            </tbody>
        </table>
          </div>
              <?php
              }
            }
            
            else{
              echo "The acccount you are searching is no available in the database";
            }

            ?>
        
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
          </body>
          </html>
        <?php
}?>