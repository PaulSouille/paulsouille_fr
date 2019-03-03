<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
header('Content-Type: application/json');

session_start();
require_once("twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
 
$twitteruser = "avecle6";
$notweets = 30;
$consumerkey = "W6SWTUuj1rZTNCNY1nD7AT9AF";
$consumersecret = "sbFsqFrydSNsOFLJk3XAntQFqwd5Ada1xtdRTNp9BcO7vFEcT2";
$accesstoken = "4567573125-VPXL2ur0x0bkbTcpKQHEJxjWPTG22bSNWM7mJx0";
$accesstokensecret = "nymJJR0FrzTx6i8BZ1MXjzKIgpuwxmz45gAOFvjRjGrjw";
 
function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}
 
$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
 
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);
 
echo json_encode($tweets);

