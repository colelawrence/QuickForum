<?php

// Variables $sqlURL, $sqlUser, $sqlPassword, stored in the passwords.php file
$connect = mysql_connect($sqlURL, $sqlUser, $sqlPassword) or die ("Could not connect to Database"); 

// Facebook
require_once("lib/fb/facebook.php");

//Check to see if we are already logged into a session
if(!isset($_SESSION['access_token'])){
	// If we aren't already logged in
	// check to see if we pressed the login button and redirected with a OAuth code
	if(isset($_GET["code"])) {
		// Variables $appId, $appSecret, $appURL, stored in the passwords.php file
		$url="https://graph.facebook.com/oauth/access_token?client_id=".$appId."&redirect_uri=".urlencode($appURL)."&client_secret=".$appSecret."&code=".$_GET["code"];
		
		// Initiate the curl session
		$ch = curl_init();

		// Set the URL
		curl_setopt($ch, CURLOPT_URL, $url);

		// Allow the headers
		curl_setopt($ch, CURLOPT_HEADER, true);

		// Return the output instead of displaying it directly
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// Execute the curl session
		$response = curl_exec($ch);

		// Close the curl session
		curl_close($ch);

		//Take away any parts of the response before the access token is defined.
		$response=explode("access_token=", $response);

		//Check if we have a valid response
		if(!isset( $response[1] )){
			$response = "Invalid login code // Please try logging in again.";
		} else {
			//$response[1] looks like "{access_token}&expires={seconds til expiration}"
			//Remove expiration part to get just the access token.
			$response=explode("&expires=", $response[1]);

			//$response[0] is the access_token
			$response=$response[0];

			//Set the session access_token
			$_SESSION['access_token'] = $response;
			//We are now logged in
			$logged_in = true;
		}
	}
} else {
	// We are logged in
	$logged_in = true;

	// Initiallize facebook
	$config = array();
	// Variables $appId and $appSecret are stored in the passwords.php file
	$config['appId'] = $appId;
	$config['secret'] = $appSecret;
	$config['fileUpload'] = false; // optional
	$facebook = new Facebook($config);

	// Set the access_token for facebook api to use
	$facebook->setAccessToken($_SESSION['access_token']);
}
?>