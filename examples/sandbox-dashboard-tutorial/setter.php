<?php 
//Start a session with the client
session_start();

//If the script is being requested with a post variable with key 'at' then set the access token to the session
if (isset($_POST['at'])){
	$_SESSION["at"] = $_POST['at'];
	echo 'success';
	exit;
}
//If the script is being requested with a post variable with key 'location' then set the access token to the session
if (isset($_POST['location'])){
	$_SESSION["location"] = $_POST['location'];
	echo 'success';
	exit;
}
//If neither variable is being set, something must be wrong
echo "failure";
?>