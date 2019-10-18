<?php
session_start();
?>
<html>

<head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <?php
        include("db.php");
        include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/include/cookielogin.php");
    ?>
    <title>Update Profile | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">
    body {
        background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("assets/images/bg.jpg");
    }

    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    .input-text:valid~.label,
    .select-text:valid~.label {
        color: #2F80ED;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .notempty~.label {
        color: red;
        top: -12px;
        transition: 0.2s ease all;
        font-size: 14px;
    }

    .notempty~.password-view-icon {
        display: block;
    }


    .tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 300px;
}
    </style>
</head>

<body>
<?php
// echo "Favorite color is " . $_SESSION["user_id"] . ".<br>";

if ( isset( $_POST['updprofbtn'] ) ) {
    if ( isset( $_POST['username'] ) && isset( $_POST['fname'] )  && isset( $_POST['lname'] )  && isset( $_POST['email'] )  && isset( $_POST['age'] )  && isset( $_POST['gender'] ) ) {
        // Getting submitted user data from database   
        $username=$_POST['username'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $age=$_POST['age'];
        $gender=$_POST['gender'];
//INSERT INTO shippers(fname,lname,username,email,passwd,age,gender) VALUES ('Alliance  Shippers','1-800-222-0451');

        $sql = "UPDATE users SET fname='".$fname."',lname='".$lname."',username='".$username."',email='".$email."',age=".$age.",gender='".$gender."' WHERE username = '". $_SESSION["user_id"] ."';";        
        if ($con->query($sql) === TRUE) {
            // echo "New record created successfully";
            $_SESSION["user_id"]=$username;
        } else {
            // echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
}
$selectuser = "SELECT * FROM users where username='".$_SESSION['user_id']."'  limit 1;";
$resultuser = mysqli_query($con,$selectuser);
$valueuser=mysqli_fetch_assoc($resultuser);

$con->close();
?>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <div class="main body-top">
        <article>
       
            <div style="vertical-align: middle;text-align: center;color: white;">
                <form name="signup" method="post" class="box">
                    <h1 class="signup-signin-text">Update Profile</h1>
                    <div>
                        <a href=''><img src="/101PRESENTS/assets/images/icon/circle-image.png" id="signup-avatar" style="width: 125px;height: 125px;border-radius: 50%;margin-bottom: 25px;"><input accept='image/*' type='file' style='display:none;' name='avatar' id='profile-image-change-button' onchange="readImageURL(this);"></a>
                    </div>
                    <div class="row">
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" pattern="[A-Za-z]{1,}" title="Enter a valid Name!" name="fname" value="<?php echo $valueuser["fname"]; ?>" autofocus required autocomplete>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">First Name</label>
                        </div>
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" pattern="[A-Za-z]{1,}" title="Enter a valid Surame!" name="lname" value="<?php echo $valueuser["lname"]; ?>" autocomplete required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Last Name</label>
                        </div>
                    </div>
                    <div class="group">
                        <input class="input-text" type="text" pattern=".{6,}" title="Must contain six or more characters!" name="username" id="signup-username" value="<?php echo $valueuser["username"]; ?>" required autocomplete>
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">Username</label>
                    </div>
                    <div class="group">
                        <input class="input-text" type="email" value="<?php echo $valueuser["email"]; ?>" name="email" id="signup-email" required autocomplete>
                        <!-- pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" -->
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label class="label">E-mail</label>
                    </div>
                    <!-- <div class="group">
                        <input class="input-text passwd" type="password" id="passwd-input" name="passwd" value="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters!" required aria-required="true">
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <span toggle1="#passwd-input" id="toggle-password1" class="fa fa-fw fa-eye password-view-icon toggle-password" style=""></span>
                        <label class="label">Password</label>
                    </div> -->
                    <div class="row">
                        <div class="group" style="width:18%;display: inline-block;">
                            <input class="input-text" type="number" value="<?php echo $valueuser["age"]; ?>" min="13" max="100" name="age" required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Age</label>
                        </div>
                        <div class="group" style="width:80%;display: inline-block;">
                            <div class="select">
                                <select class="select-text" value="<?php echo $valueuser["gender"]; ?>" name="gender" required>
                                <?php
                                    if($valueuser["gender"]=="male"){
                                        echo "<option value='' disabled></option>
                                        <option value='Male' selected>Male</option>
                                        <option value='Female' >Female</option>";
                                    }else if($valueuser["gender"]=="female"){
                                        echo "<option value='' disabled></option>
                                        <option value='Male' >Male</option>
                                        <option value='Female' selected>Female</option>";
                                    }else{
                                        echo "<option value='' disabled selected></option>
                                        <option value='Male' >Male</option>
                                        <option value='Female' >Female</option>";
                                    }
                                ?>
                                    
                                </select>
                                <span class="highlight"></span>
                                <span class="select-bar"></span>
                                <label class="label">Gender</label>
                            </div>
                        </div>
                     

                    </div>
                    <button class="ripplelink block primary" type="submit" name="updprofbtn">Update Profile</button>
                    <!-- onclick="document.forms['signup'].reportValidity() ? alert('Sign-Up Successful!') : alert('Plese enter correct information!');" -->
                   
                </form>
            </div>
        </article>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/notificationbox.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/loading.php'); ?>
    <script src="/101PRESENTS/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/101PRESENTS/assets/js/script.js"> </script>
    <script src="/101PRESENTS/assets/js/navbar.js"> </script>
    <script src="/101PRESENTS/assets/js/forms.js"> </script>
    <script src="/101PRESENTS/assets/js/notificationbox.js"></script>
    <script type="text/javascript">
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/jscode.php'); ?> 
//     navigator.serviceWorker.getRegistrations().then(
// function(registrations) {
//     for(let registration of registrations) {  
//         registration.unregister();
//     }
// });



// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();
    $(document).ready(function(){
        $("input[name=username]").keyup(function(){
            var uname = $("input[name=username]").val().trim();
            console.log(uname)
            if(uname != ''){
                //$("#uname_response").show();
                $.ajax({
                    url: 'ajax/username.php',
                    type: 'post',
                    data: {uname:uname},
                    success: function(response){
                    //console.log(response)
                        if(response>0){
                            console.log("Username Already in use.");
                        }else{
                            console.log("Available.");
                        }
                    }
                });
            }else{
                //$("#uname_response").hide();
            }
        });            
    });

    $(document).ready(function(){
        $("input[name=email]").keyup(function(){
            var mail = $("input[name=email]").val().trim();
            console.log(mail)
            if(mail != ''){
                //$("#uname_response").show();
                $.ajax({
                    url: 'ajax/email.php',
                    type: 'post',
                    data: {mail:mail},
                    success: function(response){
                    //console.log(response)
                        if(response>0){
                            console.log("Email Already in use.");
                        }else{
                            console.log("Available.");
                        }
                    }
                });
            }else{
                //$("#uname_response").hide();
            }
        });            
    });
    </script>
</body>

</html>