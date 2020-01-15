<?php session_set_cookie_params(0, '/101PRESENTS');session_start();?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/db.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/login_middleware.php'); ?>
<?php
require_once('api/SocialDjangoAPI/settings.php');
require_once('api/GoogleAPI/settings.php');
$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
?>
<?php 
if ( isset( $_POST['signinbtn'] ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['passwd'] ) ) {
    // Getting submitted user data from database   
        try{
            $username=$_POST['username'];
            $stmt = $con->prepare("SELECT * FROM users WHERE username = '".$username."';");     
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_object();
            if(isset($user)){
            // Verify user password and set $_SESSION
                if ( md5($_POST['passwd']) == $user->passwd ) {
                    $date = new DateTime();
                    $date->modify('+1 month');
                    print $date->format('Y-m-d H:i:s');
                    $sql = "INSERT INTO sessions (session_id, expired_timestamp, user_id) VALUES ('".session_id()."','".$date->format('Y-m-d H:i:s')."','".$user->username."')";
                    if ($con->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Record already exists";
                    }
                    if(isset($_GET['redirect'])){
                            header("Location: ".$_GET['redirect']); 
                    }
                    $_SESSION['user_id'] = $user->username;
                    if(isset($_POST["remember_me"])){
                        if($_POST["remember_me"]=='1' || $_POST["remember_me"]=='on'){
                            $hour = time() + 3600 * 24 * 30;
                            setcookie('PHPSESSID', session_id(), $hour);
                            setcookie('username', $_POST['username'], $hour);
                            setcookie('password', md5($_POST['passwd']), $hour);
                        }
                    }
                    echo "<script>console.log('".$_SESSION['user_id']."');</script>";
                
                    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
                    header("location:index.php"); 
                }else{
                    echo "<script>alert('Invalid Login Details!');</script>";
                }
            }
        }catch(Exception $e) {
            // echo 'Message: ' .$e->getMessage();
        }
    }
    mysqli_close($con);
}
?>



<html>

<head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>

    <title>Sign-In | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
    body {
        background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("/101PRESENTS/assets/images/bg.jpg");
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

    .loginBtnDesign {
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
    .loginBtnDesign:before {
        content: "";
        box-sizing: border-box;
        position: absolute;
        top: 0;
        left: 0;
        width: 34px;
        height: 100%;
    }
    .loginBtnDesign:focus {
        outline: none;
    }
    .loginBtnDesign:active {
        box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
    }


        /* Google */
    .loginBtn--Design {
        /*font-family: "Roboto", Roboto, arial, sans-serif;*/
        background: #DD4B39;
    }
    .loginBtn--Design:before {
        border-right: #BB3F30 1px solid;
        background: url('/101PRESENTS/assets/images/icon/icon_google.png') 6px 6px no-repeat;
    }
    
    .loginBtn--Design:hover,
    .loginBtn--Design:focus {
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
                <!-- <label><input type="checkbox" name="remember_me" id="remember_me">Remember me</label> -->
                <label class="pure-material-checkbox mb-5">
                <input type="checkbox" name="remember_me" id="remember_me">
                <span>Remember Me</span>
                </label>
                    <button class="ripplelink block primary mb-5" type="submit" name="signinbtn">Sign-In</button>
                    <!-- onclick="return validateSingInForm()" -->
                    <a href="<?= $login_url ?>">
                        <button class="loginBtnDesign loginBtn--Design loginBtn loginBtn--google " type="button" >Login with Google</button>
                    </a>
                    <br>
                    <a href="<?= SOCIAL_AUTHORIZE_URL ?>">
                        <button class="loginBtnDesign loginBtn--Design" type="button"  style="background-color:grey">Login with Social Web App</button>
                    </a>
                 
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

// navigator.serviceWorker.getRegistrations().then(
// function(registrations) {
//     for(let registration of registrations) {  
//         registration.unregister();
//     }
// });


    window.onload = function() {
        document.getElementById("username-input").focus();
    };



    function validateUsername(user) {
        var username = user.value;
        console.log(username)
        if (username == "") {
            // console.log("nameErr", "Please enter your username");
            $("#username-input").removeClass("valid");
            $("#username-input").removeClass("invalid");
            return false;
        } else {
            var regex = /^[a-zA-Z0-9]+$/;
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