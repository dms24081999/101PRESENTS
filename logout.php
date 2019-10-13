<?php
session_start();// initialize session
session_unset(); #removes all the variables in session
session_destroy(); #destroys the session
unset($_SESSION['user_id']);
setcookie("username", "", time() - 3600); 
setcookie("password", "", time() - 3600); 
if (!isset($_SESSION['user_id'])){
   	echo "Successfully logged out!<br />";
	echo "<br /><a href='signupform.php'>SignUp</a>";
    echo "<br /><a href='signinform.php'>SignIn</a>";
}else 
   	echo "Error Occured!!<br />";
// $_SESSION = array();
// if (ini_get("session.use_cookies")) {
//     $params = session_get_cookie_params();
//     setcookie(session_name(), '', time() - 60*60,
//         $params["path"], $params["domain"],
//         $params["secure"], $params["httponly"]
//     );
// }

//header("location:index.php"); 
//echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
?>