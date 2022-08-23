<?php include 'connect.php';
 $sql="SELECT * FROM central";
$result= $conn->query($sql);
if ($result){
$row1=$result->num_rows;
}

$sql="SELECT balance FROM central";
$res=$conn->query($sql);
if($res){

    $totalamt=0;
    while($row=$res->fetch_assoc()){
        $amt=(int)$row["balance"];
        $totalamt=$amt+$totalamt;
    }
}



?>