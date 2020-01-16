<?php
// session_start(); 
include_once($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/developer/db.php'); 
?>

<?php
// include our OAuth2 Server object
require_once($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/developer/server.php');

$request = OAuth2\Request::createFromGlobals();
$response = new OAuth2\Response();

// validate the authorize request
if (!$server->validateAuthorizeRequest($request, $response)) {
    $response->send();
    die;
}


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
// echo $user_id;

$sql = "SELECT * FROM oauth_user_permissions where user_id='".$user_id."' and client_id='".$_GET['client_id']."' and scope='".$_GET['scope']."';";
$result = $conn->query($sql);
if ($result->num_rows ==0) {
  // display an authorization form
  if (empty($_POST)) {
    exit('
  <form style="text-align:center" method="post" class="box">
    <label>Do You want to Authorize this Client?</label><br />
    <input type="submit" name="authorized" value="yes">
    <input type="submit" name="authorized" value="no">
  </form>');
  }
  // print the authorization code if the user has authorized your client
  $is_authorized = ($_POST['authorized'] === 'yes');
  echo $is_authorized;
}else{
  $is_authorized=true;
}


if ($is_authorized) {
  // this is only here so that you get to see your code in the cURL request. Otherwise, we'd redirect back to the client
  $sql = "SELECT * FROM oauth_user_permissions where user_id='".$user_id."' and client_id='".$_GET['client_id']."' and scope='".$_GET['scope']."';";
  $result = $conn->query($sql);
  if ($result->num_rows ==0) {
    // echo "1 results";
    $sql = "INSERT into oauth_user_permissions(user_id,client_id,scope) values('".$user_id."','".$_GET['client_id']."','".$_GET['scope']."')"; 
    $qury = mysqli_query($conn,$sql);
    if(!$qury)
    {
      echo "Failed ".mysqli_error($conn);
    }else{
      echo "Successful";
    }
    
  } else {
    echo "Failed ".mysqli_error($conn);
  }
  $code = substr($response->getHttpHeader('Location'), strpos($response->getHttpHeader('Location'), 'code=')+5, 40);
  echo("SUCCESS! Authorization Code: $code");
  // header("location: '".$_GET['redirect_uri']."'"); 
}
$server->handleAuthorizeRequest($request, $response, $is_authorized,$user_id);
$response->send();

?>


