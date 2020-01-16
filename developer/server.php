<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/developer/settings.php');
$dsn      = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
$username = DB_USERNAME;
$password = DB_PASSWORD;

// error reporting (this is a demo, after all!)
ini_set('display_errors',1);error_reporting(E_ALL);

// Autoloading (composer is preferred, but for this example let's just do this)
require_once($_SERVER['DOCUMENT_ROOT'].'/101PRESENTS/lib/oauth2-server-php/src/OAuth2/Autoloader.php');
OAuth2\Autoloader::register();

// $dsn is the Data Source Name for your database, for exmaple "mysql:dbname=my_oauth2_db;host=localhost"
$storage = new OAuth2\Storage\Pdo(array('dsn' => $dsn, 'username' => $username, 'password' => $password));

// Pass a storage object or array of storage objects to the OAuth2 server class
$server = new OAuth2\Server($storage);

// Add the "Client Credentials" grant type (it is the simplest of the grant types)
$server->addGrantType(new OAuth2\GrantType\ClientCredentials($storage));

// Add the "Authorization Code" grant type (this is where the oauth magic happens)
$server->addGrantType(new OAuth2\GrantType\AuthorizationCode($storage));

$server->addGrantType(new OAuth2\GrantType\UserCredentials($storage));
// merge all config values.  These get passed to our controller objects
$config = array(
    'use_jwt_access_tokens'        => false,
    'store_encrypted_token_string' => true,
    'use_openid_connect'       => false,
    'id_lifetime'              => 3600,
    'access_lifetime'          => 86400,
    'www_realm'                => 'Service',
    'token_param_name'         => 'access_token',
    'token_bearer_header_name' => 'Bearer',
    'enforce_state'            => false,
    'require_exact_redirect_uri' => true,
    'allow_implicit'           => true,
    'allow_credentials_in_request_body' => true,
    'allow_public_clients'     => true,
    'always_issue_new_refresh_token' => false,
    'unset_refresh_token_after_use' => true,
);
$server = new OAuth2\Server($storage, $config);

?>