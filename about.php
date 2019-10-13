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
    <title>About | 101PRESENTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <style type="text/css">
    body {
        background-image: linear-gradient(rgba(255, 0, 0, 0.3), rgba(0, 255, 0, 0.3), rgba(0, 0, 255, 0.3)), url("assets/images/bg.jpg");
    }
    </style>
</head>

<body>

    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/headernav.php'); ?>
    <div class="main  body-top">
        <article>
            <div style="text-align: center;color: white;">
                <h1 style="color: white;font-size: 35px">ABOUT US</h1>
                <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/aboutowner.php'); ?> 
            </div>
            <div style="text-align: center;width:100%;display: block;margin: auto;color: white;margin: 0;padding: 0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.225922988196!2d72.87706631531505!3d19.272539050772377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b0610316c48f%3A0xb8e22a61f7eaafff!2sDominic+Michael+Silveira!5e0!3m2!1sen!2sin!4v1566406794388!5m2!1sen!2sin"  width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </article>
    </div>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/footer.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/notificationbox.php'); ?>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/loading.php'); ?>
    <script src="/101PRESENTS/assets/js/jquery-3.4.1.min.js"></script>
    <script src="/101PRESENTS/assets/js/script.js"></script>
    <script src="/101PRESENTS/assets/js/navbar.js"></script>
    <script src="/101PRESENTS/assets/js/notificationbox.js"></script>
    <script type="text/javascript">
        <?php include($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/include/jscode.php'); ?> 
    //     if('serviceWorker' in navigator) {
    //     navigator.serviceWorker
    //        .register('/101PRESENTS/sw.js')
    //        .then(function() { console.log("Service Worker Registered"); });
    // }  
    </script>
</body>

</html>