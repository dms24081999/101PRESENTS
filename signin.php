<?php
session_start();
require_once('api/GoogleAPI/settings.php');
$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
?>



<html>

<head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
<?php
    include("db.php");
    include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/include/cookielogin.php");
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
                $_SESSION['user_id'] = $user->username;
                if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on'){
                    $hour = time() + 3600 * 24 * 30;
                    setcookie('username', $_POST['username'], $hour);
                    setcookie('password', $_POST['passwd'], $hour);
                }
                // echo "<script>console.log(".$_SESSION['user_id'].");</script>";
            }
        }
        mysqli_close($con);
    }
?>
    <title>Sign-In | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

    .loginBtn {
  box-sizing: border-box;
  text-align: center;
  position: relative;
  width: 100%;
  margin: 0 auto;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}


/* Google */
.loginBtn--google {
  /*font-family: "Roboto", Roboto, arial, sans-serif;*/
  background: #DD4B39;
}
.loginBtn--google:before {
  border-right: #BB3F30 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png') 6px 6px no-repeat;
}
.loginBtn--google:hover,
.loginBtn--google:focus {
  background: #E74B37;
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
                <label><input type="checkbox" name="remember_me" id="remember_me">Remember me</label>
                    <button class="ripplelink block primary" type="submit" name="signinbtn" onclick="return deleteAllCookies()">Sign-In</button>
                    <!-- onclick="return validateSingInForm()" -->
                    <a href="<?= $login_url ?>">
                    <button class="loginBtn loginBtn--google" type="button" >Login with Google</button>
                    </a>
                    <!-- <a href="<?= $login_url ?>" class="ripplelink block primary">Login with Google</a> -->
                 
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

navigator.serviceWorker.getRegistrations().then(
function(registrations) {
    for(let registration of registrations) {  
        registration.unregister();
    }
});


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