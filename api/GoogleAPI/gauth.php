<?php
require_once('settings.php');
require_once('google-login-api.php');
include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/db.php");
session_start();


// Google passes a parameter 'code' in the Redirect Url
if(isset($_GET['code'])) {
	
	try {
		$gapi = new GoogleLoginApi();
		
		// Get the access token 
		$data = $gapi->GetAccessToken(CLIENT_ID, CLIENT_REDIRECT_URL, CLIENT_SECRET, $_GET['code']);
		
		// Get user information
		$user_info = $gapi->GetUserProfileInfo($data['access_token']);
		
		$usernameex=explode('@',$user_info['email']);
		$username=$usernameex[0];
		//$passwd=$_POST['passwd'];
		$nameex=explode(' ',$user_info['name']);
        $fname=$nameex[0];
        $lname=$nameex[1];
		$email=$user_info['email'];
		$sql_u = "SELECT * FROM users WHERE email='".$email."';";
		$res_u = mysqli_query($con, $sql_u);
		if (mysqli_num_rows($res_u) > 0) {
			$_SESSION['user_id'] = $usernameex[0];
			echo "Sorry... username already taken"; 	
		}else{
			$sql = "INSERT INTO users (fname,lname,username,email) VALUES ('".$fname."','".$lname."','".$username."','".$email."');";     
        	if ($con->query($sql) === TRUE) {	
				$_SESSION['user_id'] = $usernameex[0];
				echo "New record created successfully";
			} else {
				echo "Error: " . $sql . "<br>" . $con->error;
			}
		}
		$con->close();
		echo "<script type='text/javascript'> document.location = '/101PRESENTS/index.php'; </script>";
		header("location: /101PRESENTS/index.php"); 
		
	}
	catch(Exception $e) {
		$con->close();
		echo $e->getMessage();
		exit();
	}

}
?>
<head>
<style type="text/css">

#information-container {
	width: 400px;
	margin: 50px auto;
	padding: 20px;
	border: 1px solid #cccccc;
}

.information {
	margin: 0 0 30px 0;
}

.information label {
	display: inline-block;
	vertical-align: middle;
	width: 150px;
	font-weight: 700;
}

.information span {
	display: inline-block;
	vertical-align: middle;
}

.information img {
	display: inline-block;
	vertical-align: middle;
	width: 100px;
}

</style>
</head>

<body>

<div id="information-container">
	<div class="information">
		<label>Name</label><span><?= $user_info['name'] ?></span>
	</div>
	<div class="information">
		<label>ID</label><span><?= $user_info['id'] ?></span>
	</div>
	<div class="information">
		<label>Email</label><span><?= $user_info['email'] ?></span>
	</div>
	<div class="information">
		<label>Email Verified</label><span><?= $user_info['verified_email'] == true ? 'Yes' : 'No' ?></span>
	</div>
	<div class="information">
		<label>Picture</label><img src="<?= $user_info['picture'] ?>" />
	</div>
</div>

</body>
</html>