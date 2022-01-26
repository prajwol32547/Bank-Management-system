<html>
    <head> 
        <title>Delete user account</title>
    </head>
<body><div style="padding-left:25%; padding-top:5rem;">
<h1>Delete user account</h1>
<br><hr>
<form action="" method="post">
    Enter the account number:<input class="form-control" type="number" name="accountnumber"><br>
    Re enter the account number:  <input class="form-control" type="number" name="Reaccountnumber"><br>
    <input type="submit" value="Delete the user account">

</form>
<hr>
</div>
</body>

</html>




<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "internetBanking";


$conn = new mysqli($servname, $username, $password, $dbname);


$accountnumber= $_POST["accountnumber"];
$reaccountnumber=$_POST["reaccountnumber"];
if($accountnumber !== $reaccountnumber){
    echo "Re typed password isn't same";
}
else{
$create = "INSERT INTO `deletededaccount` SELECT * FROM `verifiedaccount` WHERE `verifiedaccount`.`accountnumber` = '$accountnumber'";
$delete = "DELETE  FROM `verifiedccount` WHERE `verifiedaccount`.`accountnumber` = '$accountnumber' ";
}