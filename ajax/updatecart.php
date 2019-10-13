<?php

include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/db.php");
/* Get username */
$prodid = $_POST['prodid'];
$quantity = $_POST['quantity'];
$qry = "UPDATE cart SET quantity = ".$quantity." WHERE cartid ='".$prodid."';";
$result=mysqli_query($con,$qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>