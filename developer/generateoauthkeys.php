<?php session_set_cookie_params(0, '/101PRESENTS');session_start();?>

<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/db.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/login_middleware.php'); ?>
<html>

<head>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <?php
      if ( isset( $_SESSION['user_id'] ) ) {
          // Grab user data from the database using the user_id
          // Let them access the "logged in only" pages
      } else {
          // Redirect them to the login page
          echo "<script type='text/javascript'> document.location = '/101PRESENTS/signin.php'; </script>";
          header("Location: /101PRESENTS/signin.php");
      }   
    // You'd put this code at the top of any "protected" page you create
    // Always start this first
      
    ?>
    <?php 
// if(isset($_POST['category'])){
//     $name = $_POST['category'];
//     $categories='';
//     foreach ($name as $category){ 
//         $categories= $categories.$category." ";
//     }
//     // echo  $categories;
// }

include_once($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/developer/db.php'); 
$client_id = bin2hex(random_bytes(16));
$client_secret = bin2hex(random_bytes(32));
$date = new DateTime();
$user_id=null;
$sql = "SELECT user_id FROM sessions where session_id='".$_COOKIE['PHPSESSID']."' and expired_timestamp > '".$date->format('Y-m-d H:i:s')."';";
$result = $conn->query($sql);
if ($result->num_rows >0) {
  // echo "1 results";
  $user_session = $result->fetch_assoc();
  $user_id=$user_session['user_id'];
} else {
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
  header("location: signinform.php?redirect=".urlencode($url)); 
}
    // echo $_GET['redirect'];
    if(isset($_POST["Submit"])){
        if(isset($_POST['redirect_uri']) && isset($_POST['scope'])){
            if(isset($_POST['grant_types'])){
                $grant_types="'".$_POST['grant_types']."'";
            }else{
                $grant_types=null;
            }
            
            $sql = "INSERT INTO oauth_clients (client_id, client_secret, redirect_uri, scope, user_id) VALUES ('".$client_id."','".$client_secret."',
            '".$_POST['redirect_uri']."','".$_POST['scope']."','".$user_id."')";
            if ($conn->query($sql) === TRUE) {
                    // echo $client_id."<br>".$client_secret;
            } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>
    <title>App Token Generator | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">
    body {
        background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("/101PRESENTS/assets/images/bg.jpg");
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
    .empty~.error-message {
        display:none;
    }
    .input-text.notempty:invalid~.error-message,
    .select-text.notempty:invalid~.error-message {
        display:block;
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

    </style>
</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <div class="main body-top">
        <article>
       
            <div style="vertical-align: middle;text-align: center;color: white;">
                <form name="signup" method="post" class="box">
                    <h1 class="signup-signin-text">Application Token Generator</h1>
                    <div>
                        <a href=''><img src="/101PRESENTS/assets/images/icon/circle-image.png" id="signup-avatar" style="width: 125px;height: 125px;border-radius: 50%;margin-bottom: 25px;"><input accept='image/*' type='file' style='display:none;' name='avatar' id='profile-image-change-button' onchange="readImageURL(this);"></a>
                    </div>
                  
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" name="redirect_uri" autofocus required autocomplete>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Redirect URI</label>
                            <span class="error-message">Invalid Redirect URI field!</span>
                        </div>
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" name="scope"  autocomplete required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Scope</label>
                            <span class="error-message">Invalid Scope field!</span>
                        </div>
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" name="client-id" value="<?php echo $client_id ?>" autocomplete required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Client ID</label>
                            <span class="error-message">Invalid Client ID field!</span>
                        </div>
                        <div class="group" style="display: inline-block;">
                            <input class="input-text" type="text" name="client-secret" value="<?php echo $client_secret ?>" autocomplete required>
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label class="label">Client Secret Key</label>
                            <span class="error-message">Invalid Client Secret Key field!</span>
                        </div>
                   
                    <button class="ripplelink block primary" type="submit" name="Submit">Register Application</button>
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

    </script>
</body>

</html>

