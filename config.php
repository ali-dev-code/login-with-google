<?php
	session_start();
	require_once "API/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("665993630963-c84lb2ilsoh8737bg3t99pruodj007ga.apps.googleusercontent.com");
	$gClient->setClientSecret("DHiiFKV_702XGvcx2fkT6y_1");
	$gClient->setApplicationName("ali dev code");
	$gClient->setRedirectUri("http://localhost/google/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
	$con = new mysqli('localhost', 'root','' ,'google');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
