<?php
session_start();
?>

<!doctype html>
<html lang="en">
    <title>seting/change password & pin</title>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <style>
           @media screen and (min-width:800px){
            body{
                background: white;
            }
          
            .container{
            
                width: 500px;
                margin-top: 30px;
            }

           }
            </style>
        </head>
        <body>
            <div class="container bg-light" style="width:100%;height:100%;padding-top:70px;padding-bottom:70px;padding-left:20px;color:black;">
                   
                
                    <h3 class="text-center">change password</h3>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <label for="">
                        Old password:
                    </label>
                    <input type="password" class="form-control required" name="old" id="inputPassword1"minlength="4">

                    <br>
                    <br>
                    <label for="">
                        New password:
                    </label>
                    <input type="password" class="form-control required" name="new" id="inputPassword2"MinLength="8" MaxLength="15" >

                    <label for="">
                        <br>
                        <br>
                        Re-type password:
                    </label>
                    <input type="password" class="form-control required" name="new1" id="inputPassword3" MinLength="8" MaxLength="15">

                    <br>
                    <br>
                    <div class="row text-center">
                        <div class="col">
                    <button  class="btn btn-success px-2 rounded-pill"  name="changeme">save changes</button>
                </div>
                    <div class="col">
                    <button type="button" class="btn btn-primary px-2 rounded-pill"id="cancel" onclick="back()">cancel</button>
                    </div>
        </form>
                    </div>
                </div>
                   
            </div>
        

            <script>
               
                function back(){
                    history.back();
                }
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        </body>
    </head>
</html>
<?php
if(isset($_POST['changeme'])){
    $oldpw=$_POST['old'];
    $oldhash=$_SESSION["mpw"];
    $oldverify=password_verify($oldpw,$oldhash);
    $newpw=$_POST['new'];
    
    $repw=$_POST['new1'];

    $email=$_SESSION['memail'];
    if($oldverify==1){
     if($newpw===$repw){
         $newpwhash=password_hash($newpw,PASSWORD_BCRYPT);
         include 'connect.php';
         $sql="UPDATE `manager` SET `password` = '$newpwhash' WHERE `manager`.`email` = '$email' ";
         $res=$conn->query($sql);
         if($res){
             header("location:adminsetting");
         }
         else{
             header("location:changemanpassword");
         }
     }
    }
}