<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$rooturl = $protocol . $_SERVER['HTTP_HOST'];
$fullurl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
define("ROOT_HOST", $rooturl);
define("SOCIAL_OAUTH_HOST", "http://localhost:8000");
define("SOCIAL_AUTHORIZE_HOST", SOCIAL_OAUTH_HOST."/o/authorize");
define("SOCIAL_TOKEN_HOST", SOCIAL_OAUTH_HOST."/o/token/");
define("SOCIAL_RESOURCE_HOST", SOCIAL_OAUTH_HOST."/api/hello/");
define("SOCIAL_CLIENT_ID", "uKp2PPscBk47VIjqOUVqQDJ2DzzCs7diIbvW5cbm");
define("SOCIAL_CLIENT_SECRET", "xsy4667wqTWLO75rOKIfdei3oIiwmMYsEed9ZJLdsq39XTv2f2YrwRsVPp0KPSQ8e0yTajanmkCfSw1ZegvPociAAZsqW1RabUTbGcmW0HyOuoScV8yRnf4wkDZQR7D0");
define("SOCIAL_REDIRECT_URI", $rooturl."/101PRESENTS/api/SocialDjangoAPI/o.php");
define("SOCIAL_AUTHORIZE_URL", SOCIAL_AUTHORIZE_HOST."/?response_type=code&client_id=".SOCIAL_CLIENT_ID."&redirect_uri=".SOCIAL_REDIRECT_URI);
//define("SCOPE", "name");

?>