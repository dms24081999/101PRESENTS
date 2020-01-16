<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/developer/settings.php');
     $conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD);
     $db   = mysqli_select_db($conn,DB_NAME);
?>
