<?php

include($_SERVER["DOCUMENT_ROOT"]."/101PRESENTS/db.php");
/* Get username */
$search = $_GET["search"];

/* Query */
$query = "select * from products where name like '%".$search."%';";
$result = mysqli_query($con,$query);
// $value = mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo $value["name"];
$result1=array();
while($product=mysqli_fetch_assoc($result)){
    $result1[] = $product;
}
foreach($result1 as $key => $value)
{
    $img=$result1[$key]['img1'];
    $result1[$key]['img1'] = base64_encode($img);
    $img=$result1[$key]['img2'];
    $result1[$key]['img2'] = base64_encode($img);
    $img=$result1[$key]['img3'];
    $result1[$key]['img3'] = base64_encode($img);
}


echo json_encode($result1);
?>