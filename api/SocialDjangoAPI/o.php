<?php
require_once('settings.php');
include($_SERVER['DOCUMENT_ROOT']."/101PRESENTS/db.php");
session_start();
if(isset($_GET['code'])){
    //create array of data to be posted
    $post_data['grant_type'] = 'authorization_code';
    $post_data['code'] = $_GET['code'];
    $post_data['client_id'] = SOCIAL_CLIENT_ID;
    $post_data['client_secret'] = SOCIAL_CLIENT_SECRET;
    //$post_data['redirect_uri'] = REDIRECT_URI;
    //traverse array and prepare data for posting (key1=value1)
    foreach ( $post_data as $key => $value) {
        $post_items[] = $key . '=' . $value;
    }
    //create the final string to be posted using implode()
    $post_string = implode ('&', $post_items);
    //create cURL connection
    $curl_connection = curl_init(SOCIAL_TOKEN_HOST);
    //set options
    curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($curl_connection, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
    curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
    //set data to be posted
    curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
    //perform our request
    $result = curl_exec($curl_connection);
    //show information regarding the request
    // print_r(curl_getinfo($curl_connection));
    // echo curl_errno($curl_connection) . '-' . curl_error($curl_connection);
    //close the connection
    curl_close($curl_connection);
    echo $result."<br>";
    $jsondata =json_decode($result);
    // echo $jsondata->access_token;
    
    
    if(isset($jsondata->access_token)){
        //create array of data to be posted
        $post_data['access_token'] = $jsondata->access_token;
        //traverse array and prepare data for posting (key1=value1)
        foreach ( $post_data as $key => $value) {
            $post_items[] = $key . '=' . $value;
        }
        //create the final string to be posted using implode()
        $post_string = implode ('&', $post_items);
        //create cURL connection
        $curl_connection = curl_init(SOCIAL_RESOURCE_HOST);
        //set options
        $headers = array(
            'Content-Type: application/json',
            sprintf('Authorization: Bearer %s', $jsondata->access_token)
        );
        curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
        curl_setopt($curl_connection, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
        curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl_connection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
        //set data to be posted
        //curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
        //perform our request
        $result = curl_exec($curl_connection);
        // show information regarding the request
        // print_r(curl_getinfo($curl_connection));
        // echo curl_errno($curl_connection) . '-' . curl_error($curl_connection);
        //close the connection
        curl_close($curl_connection);
        echo $result;
        $result_data =json_decode($result);
        $usernameex=explode('@',$result_data->email);
		$username=$usernameex[0];
        $fname=$result_data->first_name;
        $lname=$result_data->last_name;
		$email=$result_data->email;
		$sql_u = "SELECT * FROM users WHERE email='".$email."';";
		$res_u = mysqli_query($con, $sql_u);
		if (mysqli_num_rows($res_u) > 0) {
			$_SESSION['user_id'] = $username;
            echo "Sorry... username already taken"; 	
            $date = new DateTime();
            $date->modify('+1 month');
            print $date->format('Y-m-d H:i:s');
            $sql = "INSERT INTO sessions (session_id, expired_timestamp, user_id) VALUES ('".session_id()."','".$date->format('Y-m-d H:i:s')."','".$username."')";
            if ($con->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Record already exists";
            }
		}else{
			$sql = "INSERT INTO users (fname,lname,username,email) VALUES ('".$fname."','".$lname."','".$username."','".$email."');";     
        	if ($con->query($sql) === TRUE) {	
                $_SESSION['user_id'] = $username;
                $date = new DateTime();
                $date->modify('+1 month');
                print $date->format('Y-m-d H:i:s');
                $sql = "INSERT INTO sessions (session_id, expired_timestamp, user_id) VALUES ('".session_id()."','".$date->format('Y-m-d H:i:s')."','".$username."')";
                if ($con->query($sql) === TRUE) {
                    echo "New record created successfully";
                } else {
                    echo "Record already exists";
                }
                // if(isset($_GET['redirect'])){
                //         header("Location: ".$_GET['redirect']); 
                // }
				echo "New record created successfully";
			} else {
                
				echo "Error: " . $sql . "<br>" . $con->error;
			}
		}
		$con->close();
		echo "<script type='text/javascript'> document.location = '/101PRESENTS/index.php'; </script>";
		header("location: /101PRESENTS/index.php"); 
    }else{
    
    }
}else{
    
}

?>