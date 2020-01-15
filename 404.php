<?php session_set_cookie_params(0, '/101PRESENTS');session_start();?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/db.php');?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/login_middleware.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/head.php'); ?>
    <meta charset="utf-8">
    <title>404 - Page Not Found! | 101PRESENTS</title>
    
    <style type="text/css">
    	body{
			margin: 0;
			padding: 0;
			font-family: "montserrat",sans-serif;
			min-height: 100vh;
			background-image: linear-gradient(125deg,#6a89cc,#b8e994);
		}

		.container{
			width: 100%;
			position: absolute;
			top: 40%;
			transform: translateY(-50%);
			text-align: center;
			color: #343434
		}

		.container h1{
			font-size: 160px;
			margin: 0;
			font-weight: 900;
			letter-spacing: 20px;
			background: url(/101PRESENTS/assets/images/bg.jpg);
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			-webkit-text-fill-color: transparent;
			-webkit-background-clip: text;
			background-clip:text;
		}

		.container a{
			text-decoration: none;
			background: #e55039aa;
			color: #fff;
			padding: 12px 24px;
			display: inline-block;
			border-radius: 25px;
			font-size: 14px;
			text-transform: uppercase;
			transition: 0.4s;
		}

		.container a:hover{
		  	background: #e55039;
		}

    </style>
  </head>
  <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
  
  <body>
  <article>
    <div class="container">
      <h2>Oops! Page not found.</h2>
      <h1>404</h1>
      <p>We can't find the page you're looking for.</p>
      <a href="/101PRESENTS/index.php">Go back home</a>
	</div>
	</article>
	<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/footer.php'); ?>
<?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/notificationbox.php'); ?>
  </body>
</html>
