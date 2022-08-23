<?php
include('connect.php');
$sql="SELECT MAX(logid) FROM auth";
$res=$conn->query($sql);
if($res){
    while($row=$res->fetch_assoc()){
       $num=implode($row);
       echo $num;
    }
    
}
?>