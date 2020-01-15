<?php
// echo $_COOKIE['PHPSESSID'];
// include("../db.php");
$stmt = $con->prepare("SELECT * FROM sessions WHERE session_id = '".session_id()."';");     
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_object();
if(isset($user)){
    $_SESSION['user_id'] = $user->user_id;
}else{
    unset($_SESSION['user_id']);
}
?>