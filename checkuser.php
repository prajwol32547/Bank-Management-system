
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check User Account</title>
</head>
<body>
    <div>
Enter the account number of user:
<form >
<input type="number" name="accountnumber">
<button  id="search" >submit</button>
</form>

</div>
<script>
    let searchaccount = document.getElementById('search');
      searchaccount.addEventListener('click', function () {
      let xhr = new XMLHttpRequest();
      xhr.open('GET', "checkuser.php", true);
      xhr.onprogress = function () {
        console.log("ready");

      }
      xhr.onload = function () {
        home.style.display = "none";
        block.style.display = "flex";
        block.innerHTML = this.responseText;
      }
      xhr.send();
    });
</script>

</body>

</html>


