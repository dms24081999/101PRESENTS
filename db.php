<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='giftshop1';
$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if($con){
    // echo "<script>console.log('connect');</script>";
}else{
    // echo "<script>console.log('Database failed');</script>";
}
$con->query('set character_set_client=utf8');
$con->query('set character_set_connection=utf8');
$con->query('set character_set_results=utf8');
$con->query('set character_set_server=utf8');
?>