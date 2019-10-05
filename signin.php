<?php
require_once('api/GoogleAPI/settings.php');
$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
?>

<?php
// Always start this first
include("db.php");
session_start();
echo "Favorite color is " . $_SESSION["user_id"] . ".<br>";

if ( isset( $_POST['signinbtn'] ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['passwd'] ) ) {
        
        // Getting submitted user data from database   
        $username=$_POST['username'];
        $stmt = $con->prepare("SELECT * FROM users WHERE username = '".$username."';");     
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_object();
        // Verify user password and set $_SESSION
    	if ( $_POST['passwd'] == $user->passwd ) {
            //if(! isset($_SESSION['user_id'])){
              //  if (isset($_SERVER['HTTP_COOKIE'])) {
                //    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                  //  foreach($cookies as $cookie) {
                    //    $parts = explode('=', $cookie);
                      //  $name = trim($parts[0]);
                        //setcookie($name, '', time()-1000);
                        //setcookie($name, '', time()-1000, '/');
                   // }
                //}
            //}
            $_SESSION['user_id'] = $user->username;
            echo "<script>console.log(".$_SESSION['user_id'].");</script>";
        }
        
    }
    mysqli_close($con);
}

?>

<html>

<head>
    <title>Sign-In | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <style type="text/css">
    body {
        background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("assets/images/bg.jpg");
    }

    .valid~.label {
        color: #2F80ED;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .invalid~.label {
        color: red;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .valid~.password-view-icon,
    .invalid~.password-view-icon {
        display: block;
    }
    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <div class="main body-top">
        <article>
            <div style="vertical-align: middle;text-align: center;color: white;">
                <form class="box" name="signin" method="post">
                    <h1 class="signup-signin-text">Sign-In</h1>
                    <div class="group">
                        <input class="input-text" type="text" id="username-input" value="" onblur="validateUsername(this)" name="username" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <div class="label">Username</div>
                    </div>
                    <div class="group">
                        <input class="input-text passwd" type="password" id="passwd-input" name="passwd" value="" onblur="validatePasswd(this)" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <span toggle1="#passwd-input" id="toggle-password1" class="fa fa-fw fa-eye password-view-icon toggle-password" style=""></span>
                        <div class="label">Password</div>
                    </div>
                    <!--  <input class="mb-5 " type="text" placeholder="Username" required autocomplete>
                <br>
                <input class="mb-5 " type="password" placeholder="Password" required aria-required="true">
                <br> -->
                    <button class="ripplelink block primary" type="submit" name="signinbtn" onclick="return deleteAllCookies()">Sign-In</button>
                    <!-- onclick="return validateSingInForm()" -->
                    <!-- <button class="ripplelink block primary" onclick="return SocialGoogleLogin()">Sign-In with Google</button> -->
                    <a href="<?= $login_url ?>" class="ripplelink block primary">Login with Google</a>
                    <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
                </form>
            </div>
        </article>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/notificationbox.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/loading.php'); ?>
    <script src="/101PRESENTS/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/101PRESENTS/assets/js/script.js"></script>
    <script src="/101PRESENTS/assets/js/navbar.js"> </script>
    <script src="/101PRESENTS/assets/js/forms.js"> </script>
    <script src="/101PRESENTS/assets/js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/jscode.php'); ?> 
    
// function onSignIn(googleUser) {
//   var profile = googleUser.getBasicProfile();
//   console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
//   console.log('Name: ' + profile.getName());
//   console.log('Image URL: ' + profile.getImageUrl());
//   console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
// }


    window.onload = function() {
        document.getElementById("username-input").focus();
    };

    // $(document).ready(function(){
    //     var cookies = document.cookie.split(";");
    //     for (var i = 0; i < cookies.length; i++)
    //     eraseCookie(cookies[i].split("=")[0]);
    // })

    function validateUsername(user) {
        var username = user.value;
        console.log(username)
        if (username == "") {
            // console.log("nameErr", "Please enter your username");
            $("#username-input").removeClass("valid");
            $("#username-input").removeClass("invalid");
            return false;
        } else {
            var regex = /^[a-zA-Z\s]+$/;
            if (regex.test(username) === false) {
                // console.log("nameErr", "Please enter a valid username");
                $("#username-input").removeClass("valid");
                $("#username-input").addClass("invalid");
                return false;
            } else {
                // console.log("nameErr", "");
                $("#username-input").addClass("valid");
                $("#username-input").removeClass("invalid");
                return true;
            }
        }
    }

    function validatePasswd(passd) {
        var passwd = passd.value;
        console.log(passwd)
        if (passwd == "") {
            // console.log("nameErr", "Please enter your username");
            $("#passwd-input").removeClass("valid");
            $("#passwd-input").removeClass("invalid");
            return false;
        } else {
            var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            if (regex.test(passwd) === false) {
                // console.log("nameErr", "Please enter a valid username");
                $("#passwd-input").removeClass("valid");
                $("#passwd-input").addClass("invalid");
                return false;
            } else {
                // console.log("nameErr", "");
                $("#passwd-input").addClass("valid");
                $("#passwd-input").removeClass("invalid");
                return true;
            }
        }
    }

    function validateSingInForm() {
        if ((validateUsername(document.forms["signin"]["username"])) && (validatePasswd(document.forms["signin"]["passwd"]))) {
            console.log("valid")
            if (confirm("Confirm Sign-In?")) {
                return true;
            } else {
                return false;
            }
        } else {
            console.log("invalid")
            return false;
        }
    }


    function deleteAllCookies() {
       
        return true;
    }
    </script>
</body>

</html>