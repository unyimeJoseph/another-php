<?php
session_start();

if(!isset($_SESSION['user_id'])) { 
	header('location: login.php'. TRUE, 302);
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MY APP</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="pull-right"><a href="logout.php"></a>
			</div>
			<div class="col-md-6 col-md-offset-6">
				<h2>WELCOME</h2><<br><br>
				<h4>You are successfully logged in</h4>
			</div>	
		</div>
	</div>
</body>
</html>