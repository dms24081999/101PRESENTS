<?php
session_set_cookie_params(time() + (86400 * 30),'/'); 
$segments = array_slice(explode("/", $_SERVER["PATH_INFO"] ),1);
session_name("session_id_".$segments[0]);
session_start();
$_SESSION['current']="session_id_".$segments[0];
//echo $_SESSION['current'];
session_set_cookie_params(0,'/catib');
setcookie("name", "val", time() + (86400 * 30), "/");
//$CookieInfo = session_get_cookie_params();
//$CookieInfo['name'];


foreach ($_COOKIE as $key=>$val){
  if (preg_match("/(session_id_).\d*$/", $key, $match)){
      echo $key.' is '.$val."<br>\n";
    }
}
?>