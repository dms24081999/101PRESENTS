<?php
// initialize session
session_unset(); #removes all the variables in session
session_destroy(); #destroys the session
unset($_SESSION['user_id']);
setcookie("username", "", time() - 3600); 
setcookie("password", "", time() - 3600); 
setcookie("PHPSESSID", "", time() - 3600); 
?>