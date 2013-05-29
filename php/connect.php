<?php
require_once("lib/fb/facebook.php");

  $config = array();
  $config['appId'] = $appId;
  $config['secret'] = $appSecret;
  $config['fileUpload'] = false; // optional

  $facebook = new Facebook($config);

if(isset($_GET["code"])) {
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

	// XML to object
	//$output = simplexml_load_string($output);
}

$connect = mysql_connect($sqlURL, $sqlUser, $sqlPassword) or die ("Could not connect to Database"); ?>