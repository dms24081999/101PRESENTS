<?php session_set_cookie_params(0, '/101PRESENTS');session_start();?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/db.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/login_middleware.php'); ?>
<?php 
if ( isset( $_POST['signinbtn'] ) ) {
    // Getting submitted user data from database   

     
    if(isset($_SESSION['user_id'])){
        try{
            $stmt = $con->prepare("SELECT * FROM users WHERE username = '".$_SESSION['user_id']."';");     
            $stmt->execute();
            $result = $stmt->get_result();
            $user = $result->fetch_object();
            if(isset($user)){
                    $sql = "INSERT INTO oauth_users (username, password, first_name,last_name,email) VALUES ('".$user->username."','".$user->passwd."','".$user->fname."','".$user->lname."','".$user->email."')";
                    if ($con->query($sql) === TRUE) {
                        echo "New record created successfully";
                    } else {
                        echo "Record already exists";
                    }

                    echo "<script type='text/javascript'> document.location = '/101PRESENTS/index.php'; </script>";
                    header("location:/101PRESENTS/index.php"); 
    
            }
        }catch(Exception $e) {
            // echo 'Message: ' .$e->getMessage();
        }
    } else {
        // Redirect them to the login page
        echo "<script type='text/javascript'> document.location = '/101PRESENTS/signin.php'; </script>";
        header("Location: /101PRESENTS/signin.php");
    }  
    mysqli_close($con);
}
?>



<html>

<head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>

    <title>Sign-Up | Dev-101PRESENTS</title>
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
                    <h1 class="signup-signin-text">Sign-Up for Developers Account</h1>
                    <button class="ripplelink block primary mb-5" type="submit" name="signinbtn">Sign-In</button>
                    <!-- onclick="return validateSingInForm()" -->

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
    </script>
</body>

</html>