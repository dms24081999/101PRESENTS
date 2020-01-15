<?php session_set_cookie_params(0, '/101PRESENTS');session_start();?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/db.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/login_middleware.php'); ?>
<?php
if ( isset( $_SESSION['user_id'] ) ) {
          // Grab user data from the database using the user_id
          // Let them access the "logged in only" pages
} else {
          // Redirect them to the login page
    echo "<script type='text/javascript'> document.location = 'signin.php'; </script>";
    header("Location: signin.php");
}   
 

// echo "Favorite color is " . $_SESSION["user_id"] . ".<br>";
if ( isset( $_POST['changebtn'] ) ) {
    
    // Getting submitted user data from database   
    $username=$_SESSION['user_id'];
    $stmt = $con->prepare("SELECT * FROM users WHERE username = '".$username."';");     
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_object();
    // Verify user password and set $_SESSION

    if($_POST['passwd1']==$_POST['passwd2']){
        
        $sql = "UPDATE users SET passwd='".md5($_POST['passwd1'])."' WHERE username = '".$username."';";
        
        if (mysqli_query($con, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "<script>alert('An Error Occured! Unable to Change Password!');</script>";
            echo "Error updating record: " . mysqli_error($con);
        }
    }else{
        echo "<script>alert('An Error Occured! Unable to Change Password!');</script>";
    }
    echo "<script>console.log('".$_SESSION['user_id']."');</script>";
    
    
    mysqli_close($con);
}
?>



<html>

<head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
<?php
   
?>
    <title>Set Password | 101PRESENTS</title>
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
    .empty~.label {
        color: red;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .valid~.password-view-icon,
    .invalid~.password-view-icon {
        display: block;
    }


    .empty~.error-message {
        display:none;
    }
    .input-text.notempty.invalid~.error-message,
    .select-text.notempty.invalid~.error-message {
        display:block;
    }
    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <div class="main body-top">
        <article>
            <div style="vertical-align: middle;text-align: center;color: white;">
                <form class="box" name="signin" method="post">
                    <h1 class="signup-signin-text">Set Password</h1>
                    
                    <div class="group">
                        <input class="input-text passwd" type="password" id="passwd1-input" value="" onblur="validatePasswd(this)" name="passwd1" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <span toggle1="#passwd1-input" id="toggle-password1" class="fa fa-fw fa-eye password-view-icon toggle-passwords" style=""></span>
                        <div class="label">Password</div>
                        <span class="error-message">Invalid field!</span>
                    </div>
                    <div class="group">
                        <input class="input-text passwd" type="password" id="passwd2-input" name="passwd2" value="" onblur="validatePasswd(this)" required>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <span toggle1="#passwd2-input" id="toggle-password2" class="fa fa-fw fa-eye password-view-icon toggle-passwords" style=""></span>
                        <div class="label">Confirm-Password</div>
                        <span class="error-message">Invalid field!</span>
                    </div>
                    <br>
                    <button class="ripplelink block primary" type="submit" name="changebtn" >Change Password</button>
                    <br>
                 
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
        document.getElementById("passwd-input").focus();
    };
    

    $("#toggle-password").click(function() {
        $('#toggle-password').toggleClass("fa-eye fa-eye-slash");
        var input3 = $($('#toggle-password').attr("toggle1"));
        if (input3.attr("type") == "password") {
            input3.attr("type", "text");
        } else {
            input3.attr("type", "password");
        }
        
    });

    $("#toggle-password1").click(function() {
        $('#toggle-password1').toggleClass("fa-eye fa-eye-slash");
        var input1 = $($('#toggle-password1').attr("toggle1"));
        if (input1.attr("type") == "password") {
            input1.attr("type", "text");
        } else {
            input1.attr("type", "password");
        }
    });

    $("#toggle-password2").click(function() {
        $('#toggle-password2').toggleClass("fa-eye fa-eye-slash");
        var input2 = $($('#toggle-password2').attr("toggle1"));
        
        if (input2.attr("type") == "password") {
            input2.attr("type", "text");
        } else {
            input2.attr("type", "password");
        }
    });

    function validatePasswd(passd) {
        var passwd = passd.value;
        console.log(passwd)
        if (passwd == "") {
            // console.log("nameErr", "Please enter your username");
            $("#passwd1-input").removeClass("valid");
            $("#passwd2-input").removeClass("valid");
            $("#passwd1-input").removeClass("invalid");
            $("#passwd2-input").removeClass("invalid");
            return false;
        } else {
            var regex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
            if($('#passwd1-input').val()==$('#passwd2-input').val()){
                if (regex.test($('#passwd1-input').val()) === true) {
                    console.log("Trueall")
                    $("#passwd1-input").addClass("valid");
                    $("#passwd2-input").addClass("valid");
                    $("#passwd1-input").removeClass("invalid");
                    $("#passwd2-input").removeClass("invalid");
                    return true;
                }else{
                    $("#passwd1-input").addClass("invalid");
                    $("#passwd2-input").addClass("invalid");
                    $("#passwd1-input").removeClass("valid");
                    $("#passwd2-input").removeClass("valid");
                    $(".error-message").html("Invalid Field!")
                    return false;
                }
            } else {
                $("#passwd1-input").addClass("invalid");
                $("#passwd2-input").addClass("invalid");
                $("#passwd1-input").removeClass("valid");
                $("#passwd2-input").removeClass("valid");
                $(".error-message").html("Passwords do not match!")
                return false;
            }
        }
    }


    </script>
</body>

</html>