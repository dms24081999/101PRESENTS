<?php

include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/db.php");
/* Get username */
$mail = $_POST['mail'];

/* Query */
$query = "select * from users where email='".$mail."'";
$result = mysqli_query($con,$query);
$rowcount = mysqli_num_rows($result);
echo $rowcount;
?>