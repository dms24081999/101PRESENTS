<?php
// echo $_COOKIE['PHPSESSID'];
// include("../db.php");
$date = new DateTime();
$stmt = $con->prepare("SELECT * FROM sessions WHERE session_id = '".session_id()."' and expired_timestamp > '".$date->format('Y-m-d H:i:s')."';");     
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_object();
if(isset($user)){
    $_SESSION['user_id'] = $user->user_id;
}else{
    unset($_SESSION['user_id']);
    include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/clear_login.php');
}
?>