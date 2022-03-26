<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>check User Account</title>
</head>
<style>
  .body{
    background:skyblue;
  }
  .submission {
    background-color: white;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    box-shadow: 3px 7px 20px -2px rgba(56,34,34,0.72);
    height:20rem;
    padding:2rem;
    margin: 0 auto;
  }
  form{
    padding-top:1rem ;
  }
  #search{
    margin:2rem 5.5rem;
    padding: .35rem;
  }
  .input-bar{
    margin: 2rem;
    border-radius: 10px;
    padding:.25rem;

  }
.div-button{
  display: flex;
  align-items: center;
  justify-content: center;
  }
  .text{
    padding: 1rem 0rem;
  }
</style>

<body class="body">
  <div class="submission">
   <div class="text" > Enter the account number of user:</div>
    <form action="../content/search-user-status.php" method="POST">
      <input type="text" class="input-bar" name="accountnumber">
      <br>
      <div class="div-button">
      <button id="search">Search</button>
      </div>
    </form>

  </div>
  <script>
    let searchaccount = document.getElementById('search');
    searchaccount.addEventListener('click', function() {
      let xhr = new XMLHttpRequest();
      xhr.open('GET', "../content/checkuser.php", true);
      xhr.onprogress = function() {
        console.log("ready");

      }
      xhr.onload = function() {
        home.style.display = "none";
        block.style.display = "flex";
        block.innerHTML = this.responseText;
      }
      xhr.send();
    });
  </script>

</body>

</html>