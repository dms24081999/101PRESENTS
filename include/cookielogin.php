<?php
// Verifying whether a cookie is set or not
if(isset($_COOKIE["username"]) && isset($_COOKIE["password"])){
    $stmt = $con->prepare("SELECT * FROM users WHERE username = '".$_COOKIE['username']."';");     
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_object();
    // Verify user password and set $_SESSION
    if ( $_COOKIE["password"] == $user->passwd ) {
        $_SESSION['user_id'] = $user->username;
        // echo "<script>console.log(".$_SESSION['user_id'].");</script>";
    }
} else{
    // echo "Welcome Guest!";
}
?>