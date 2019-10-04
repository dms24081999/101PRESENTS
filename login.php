<?php
include("db.php");
session_start();
if ( isset( $_POST['signinbtn'] ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['passwd'] ) ) {
        
        // Getting submitted user data from database   
        $username=$_POST['username'];
        $stmt = $con->prepare("SELECT * FROM login WHERE username = '".$username."';");     
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();
        // Verify user password and set $_SESSION
    	if ( $_POST['passwd'] == $user->password ) {
            if(! isset($_SESSION['user_id'])){
                if (isset($_SERVER['HTTP_COOKIE'])) {
                    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                    foreach($cookies as $cookie) {
                        $parts = explode('=', $cookie);
                        $name = trim($parts[0]);
                        setcookie($name, '', time()-1000);
                        setcookie($name, '', time()-1000, '/');
                    }
                }
            }
            $_SESSION['user_id'] = $user->username;
            echo "<script>console.log(".$_SESSION['user_id'].");</script>";
    	}
    }
}
?>