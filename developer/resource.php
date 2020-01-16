<?php
// include our OAuth2 Server object
require_once __DIR__.'/server.php';
include_once("db.php"); 
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


$sql = "SELECT * FROM oauth_users where username='".$post_user_id."';";
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

// $product_category_sql = 'SELECT category_title,id FROM product_category';
// $product_category_result = mysqli_query($conn, $product_category_sql);
// if (mysqli_num_rows($product_category_result) > 0) {
//    while($product_category_row = mysqli_fetch_assoc($product_category_result)) {
//       // echo "<input type='checkbox' name='category[]' id='category' value=".$row['category_title'].">".$row['category_title']."<br>";
//       if (!$server->verifyResourceRequest($request, $response, $product_category_row['category_title'])) {
//         // if the scope required is different from what the token allows, this will send a "401 insufficient_scope" error
//       // $response->send();
//       }else{
//         $marketplace_products_sql = "SELECT * FROM marketplace_products where cat_id=".$product_category_row['id'];
//         $marketplace_products_result = mysqli_query($conn, $marketplace_products_sql);
//         $marketplace_products_result1=array();
//         if (mysqli_num_rows($marketplace_products_result) > 0) {
//           while($marketplace_products_row = mysqli_fetch_assoc($marketplace_products_result)) {
//             $marketplace_products_result1[] = $marketplace_products_row;
//           }
//         } 
//         $basic=json_encode($marketplace_products_result1);
//         $send_response[$product_category_row['category_title']]=$basic;
//       }
//    }
// } 


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