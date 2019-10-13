<?php

include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/db.php");
/* Get username */
$userid = $_POST['userid'];
$prodid = $_POST['prodid'];
$checkexist = "select * from cart where productid=".$prodid." and userid=".$userid.";";
// echo $checkexist;
$resultcheckexist = mysqli_query($con,$checkexist);
$valuecheckexist=mysqli_fetch_assoc($resultcheckexist);
$countcheckexist = mysqli_num_rows($resultcheckexist);
if($countcheckexist > 0){
    $quantity=$valuecheckexist["quantity"]+1;
    $qry = "UPDATE cart SET quantity = ".$quantity." WHERE productid=".$prodid." and userid=".$userid.";";
    $result=mysqli_query($con,$qry);
    if(isset($result)) {
        echo "YES";
    } else {
        echo "NO";
    }
}else{
    $sql = "INSERT INTO cart (productid,userid,quantity) VALUES (".$prodid.",".$userid.",1);";         
    if ($con->query($sql) === TRUE) {
        echo "YES";
    } else {
        echo "NO";
    }
}
?>