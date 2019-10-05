<?php
session_start();// initialize session
session_unset(); #removes all the variables in session
session_destroy(); #destroys the session
if (!isset($_SESSION['userName'])){
   	echo "Successfully logged out!<br />";
	echo "<br /><a href='signupform.php'>SignUp</a>";
    echo "<br /><a href='signinform.php'>SignIn</a>";
}else
   	echo "Error Occured!!<br />";
$_SESSION = array();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 60*60,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
//unset($_SESSION['user_id']);

//setcookie("PHPSESSID","",time()-3600,"/"); // delete session cookie
//header("location:home.php"); 
//echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
?>