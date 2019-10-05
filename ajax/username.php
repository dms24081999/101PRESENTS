<?php

include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/db.php");
/* Get username */
$uname = $_POST['uname'];

/* Query */
$query = "select * from users where username='".$uname."'";
$result = mysqli_query($con,$query);
$rowcount = mysqli_num_rows($result);

echo $rowcount;
?>