<?php
session_get_cookie_params(0)
setcookie("name", "", time() - (86400 * 30), "/cat");
setcookie("PHPSESSID", "", time() - (86400 * 30), "/");

?>