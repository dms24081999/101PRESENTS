<?php
session_start();// initialize session

$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 60*60,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
unset($_SESSION['user_id']);
session_destroy(); 
//setcookie("PHPSESSID","",time()-3600,"/"); // delete session cookie
//header("location:home.php"); 
//echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
?>