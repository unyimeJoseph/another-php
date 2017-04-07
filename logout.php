<?php
//start the session if not previously started
if(session_start() == PHP_SESSION_NONE) {
	session_start();
}
//set the session array to an empty array
$_SESSION = array();

if(ini_get("session.use_cookies")) { 
	$params = session_get_cookie_params();
	setcookie(session_name(), ',' time() - 42000),
		$params["path"], $params["domain"],
		$params["secure"], $params["httponly"]
	};
}

//Destory session
session_destroy();

//Redirect to login
header('location: login.php', TRUE, 302);	