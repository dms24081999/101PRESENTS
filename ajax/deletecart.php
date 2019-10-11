<?php

include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/db.php");
/* Get username */
$del_id = $_POST['del_id'];
$qry = "DELETE FROM cart WHERE cartid ='$del_id'";
$result=mysqli_query($con,$qry);
if(isset($result)) {
   echo "YES";
} else {
   echo "NO";
}
?>