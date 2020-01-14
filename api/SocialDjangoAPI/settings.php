<?php
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$rooturl = $protocol . $_SERVER['HTTP_HOST'];
$fullurl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
define("ROOT_HOST", $rooturl);
define("SOCIAL_OAUTH_HOST", "http://localhost:8000");
define("SOCIAL_AUTHORIZE_HOST", SOCIAL_OAUTH_HOST."/o/authorize");
define("SOCIAL_TOKEN_HOST", SOCIAL_OAUTH_HOST."/o/token/");
define("SOCIAL_RESOURCE_HOST", SOCIAL_OAUTH_HOST."/api/hello/");
define("SOCIAL_CLIENT_ID", "fOlrTP5Hiu6e749ez58MX4ClAhoMNTrkneFStERh");
define("SOCIAL_CLIENT_SECRET", "FFVxzv7z6YdoVEF27Lxck47EWE0lNWaGJnaqvOJVf8NG1CiYHn71uowqk1fDIjQRoZG0a6DM3ClXoGyXaRomnlH23hsgwkRp0XBk6o3TEaqscY2W3AzaCHgrfEuItFlu");
define("SOCIAL_REDIRECT_URI", $rooturl."/101PRESENTS/api/SocialDjangoAPI/o.php");
define("SOCIAL_AUTHORIZE_URL", SOCIAL_AUTHORIZE_HOST."/?response_type=code&client_id=".SOCIAL_CLIENT_ID."&redirect_uri=".SOCIAL_REDIRECT_URI);
//define("SCOPE", "name");

?>