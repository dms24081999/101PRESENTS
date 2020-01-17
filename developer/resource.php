<?php
// include our OAuth2 Server object
require_once __DIR__.'/server.php';
include_once($_SERVER["DOCUMENT_ROOT"]."/101PRESENTS/developer/db.php"); 
include($_SERVER["DOCUMENT_ROOT"]."/101PRESENTS/db.php");
$request = OAuth2\Request::createFromGlobals();
$response = new OAuth2\Response();

$send_response=[];




$date = new DateTime();
$user_id=$post_user_id=null;
$sql = "SELECT user_id FROM oauth_access_tokens where access_token='".$_POST['access_token']."' and expires > '".$date->format('Y-m-d H:i:s')."';";
$result = $conn->query($sql);
if ($result->num_rows >0) {
  // echo "1 results";
  $user_session = $result->fetch_assoc();
  $post_user_id=$user_session['user_id'];
} else {
  
}
// echo "<br>Hello".$post_user_id;


$sql = "SELECT * FROM users where username='".$post_user_id."';";
$result = $conn->query($sql);
if ($result->num_rows >0) {
  // echo "1 results";
  $user_data = $result->fetch_assoc();
  $user_id=$user_data['username'];
} else {
  
}
// echo "Hi".$user_id;
// print_r($user_data);

if (!$server->verifyResourceRequest($request, $response, 'name')) {
  // if the scope required is different from what the token allows, this will send a "401 insufficient_scope" error
  // $response->send();
}else{
  $name=json_encode(array('first_name' => $user_data['first_name'],'last_name' => $user_data['last_name']));
  $send_response['name']=$name;
}

if (!$server->verifyResourceRequest($request, $response, 'basic')) {
    // if the scope required is different from what the token allows, this will send a "401 insufficient_scope" error
  // $response->send();
}else{
  $basic=json_encode(array('username' => $user_data['username'],'email' => $user_data['email']));
  $send_response['basic']=$basic;
}

if (!$server->verifyResourceRequest($request, $response, 'products')) {
  // if the scope required is different from what the token allows, this will send a "401 insufficient_scope" error
  // $response->send();
}else{
  $query = "select * from products;";
  $result = mysqli_query($con,$query);
  // $value = mysqli_fetch_array($result,MYSQLI_ASSOC);
// echo $value["name"];
  $result1=array();
  while($product=mysqli_fetch_assoc($result)){
    $result1[] = $product;
  }
  foreach($result1 as $key => $value){
    
    $img=$result1[$key]['img1'];
    // $result1[$key]['img1'] = base64_encode($img);
    $result1[$key]['img1'] = '';
    $img=$result1[$key]['img2'];
    // $result1[$key]['img2'] = base64_encode($img);
    $result1[$key]['img2'] = '';
    $img=$result1[$key]['img3'];
    // $result1[$key]['img3'] = base64_encode($img);
    $result1[$key]['img3'] = '';
  }
  // echo json_encode($result1);
  $send_response['products']=json_encode($result1);
}



// // Handle a request to a resource and authenticate the access token
// if (!$server->verifyResourceRequest(OAuth2\Request::createFromGlobals())) {
//     $server->getResponse()->send();
//     die;
// }
if(empty($result)){
  $response->send();
}else{
  echo json_encode($send_response);
}
?>