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
    $productid=$product["productid"];
    $name=$product["name"];
    $producttype=$product["producttype"];
    $price=$product["price"];
    $tag=$product["tag"];
    $bdi=$product["bdi"];
    $description=$product["description"];
    $detailsxml=$product["detailsxml"];
    $img1=$product["img1"];
    $img2=$product["img2"];
    $img3=$product["img3"];
    $result1[]='["productid"=>'.$productid.',"name"=>'.$name.',"producttype"=>'.$producttype.',"price"=>'.$price.',"tag"=>'.$tag.',"bdi"=>'.$bdi.',
    "description"=>'.$description.',"detailsxml"=>'.$detailsxml.']';
    // ,"img1"=>base64_encode($img1),"img2"=>base64_encode($img2),"img3"=>base64_encode($img3));
}

print json_encode($result1);
?>