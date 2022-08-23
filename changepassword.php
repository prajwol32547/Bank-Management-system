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
            <div class="container-fluid" style="width:100%;height:100%;padding-top:70px;padding-left:20px;color:black;">

               
                    <div class="container bg-light py-3">
                    <h3 class="text-center">change password</h3>
<form action="pwupdate.php" method="post">
                    <label for="">
                        Old password:
                    </label>
                    <input type="password" class="form-control required" name="old" id="inputPassword1" required>

                    <br>
                    <br>
                    <label for="">
                        New password:
                        <br>
                         <span id="msg"></span>

                    </label>
                    <input type="password" class="form-control required" required name="new" id="inputPassword2" MinLength="8" MaxLength="15">
                        
                    <label for="">
                        <br>
                        <br>
                        Re-type password:
                    </label>
                    <input type="password" class="form-control required"  required name="new1" id="inputPassword3"MinLength="8" MaxLength="15">

                    <br>
                    <br>
                    <div class="row text-center">
                        <div class="col">
                    <button  class="btn btn-success rounded-pill"  name="changeme">save changes</button>
                </div>
                    <div class="col">
                    <button type="button" id="cancel" class="btn btn-primary rounded-pill">cancel</button>
                    </div>
        </form>
                    </div>
                </div>
                   
            </div>
        </div>

            <script>
                let btn=document.getElementById('cancel');
                btn.addEventListener('click',()=>{
location.replace('customer');
                });
            let newl=document.getElementsByName('new')[0];
            let mssg=document.getElementById('msg');
            let chng=document.getElementsByName('changeme')[0];
 let regex=/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9_])/;
            newl.addEventListener('change',()=>{

            if(regex.test(newl.value)==false){
   
                mssg.innerHTML="password must contain Uppercase Lowercase Number and Special characters";
               mssg.style.color="red";
                chng.disabled=true;
            }
            else{
                mssg.innerHTML="";
                 chng.disabled=false;
            }
      })
            
            
          
            </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
        </body>
    </head>
</html>
