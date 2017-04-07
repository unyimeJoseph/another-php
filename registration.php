<?php

	require('loginconn.php');

	if(isset($_POST['submit'])) {
	    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
	    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
	    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
	    $confirm_password = filter_var($_POST['confirm_password'], FILTER_SANITIZE_STRING);
	    if ($name =='') {
	      echo '<div class="alert-danger col-md-4 col-md-offset-4 text-content"><b>You Must Add Your Name</div>';
	    } elseif ($email='') {
	      echo '<div class="alert-danger">You Must Add Your Email</div>';
	    } elseif ($username='') {
	      echo '<div class="alert-danger">You Must Add Your Username</div>';
	    } elseif ($password='') {
	      echo '<div class="alert-danger">You Must Add Your Password</div>';
	    } elseif ($confirm_password='') {
	      echo '<div class="alert-danger">You Must Add Your Password_confirmation</div>';
	    } elseif ($password != $confirm_password) {
	      echo '<div class="alert-danger">Your password do not match </div>';
	    } elseif (! filter_var($_POST('email'), FILTER_VALIDATE_EMAIL)) {
	      echo '<div class="alert-danger">Your email address is not valid</div>';
	    } else {
	    	$hash_password = password_hash($password, PASSWORD_DEFAULT);
		    $sql = "INSERT INTO users(id, name, username, email, password) VALUES (NULL, $name, $username, $email, $hash_password)";
		    $result = mysqli_query($conn, $sql);
		    if ($result) { 
		    	session_start();
		        $_SESSION['user_id'] = mysqli_insert_id($conn);
		        header('location: Dashboard.php', TRUE, 302);
		        exit;
		    } else {
		       echo '<div class = "alert alert-danger col-md-4 col-md-offset-4 text-content"><b>There was an Error Creating Your Account:'. $name.' and the error is: <br>'.mysqli_error($conn) .'<br></div>';
		    }
		} 
    }
?> 
<!DOCTYPE html>
<html>
<head>
	<title>My App</title>
	<meta charset="utf-8">
</head>
		<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
<style type="text/css">
		body{
			background: fixed;
			background-color: white;/* rgb(230,230, 250);	 */
			text-align: center;
			margin-top: 60px;
			color: #444;
		}		
			h3{
				text-align: center;
				font-size: 30px;
			/* 	color: white; */
				padding: 10px;
			}
			form{
				height: 410px;
				border: 5px ;
				background: #D4DEDF;/* rgb(220, 125, 153); */
				max-height: 450px;
				box-shadow: 0px 4px 10px 4px;
				max-width: 350px;
				padding: 10px;
				margin-bottom: 80px;
				position: relative;
				margin-left: 450px;

			}
			.button{
				height: 200px;
				background: #3f9db8;
			}
			h4{
				/* color: white; */
				font-size: 15px;
			}
			.container {
				padding-bottom: 60px;
				background: #f8f8f8;
			}
			input{
				margin-top: 10px;
				padding: 8px;
			}

			.header{
				height: 40px;
				background: #D4DEDF;
				border: 3px /* solid white */;
				box-shadow: 0px 2px 2px 0px;
				border-top: 1px;
			}
				.footer {
				position: relative;
				bottom: -1px;
				height: 45px;
				padding: 15px 10px 20px 20px;
				margin-bottom: 100px;
				background: #D4DEDF;
				border: 5px /* solid white */;
				
				/* box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
				-moz-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75);
				-webkit-box-shadow: inset 0 1px 6px rgba(256,256,256,0.75); */
			}
		</style>	
<body>
			<div class="container">
			    <!-- <h1>Welcome to this site</h1> -->
			</div>
			    <form action="<?php $_SERVER['PHP_SELF']; ?>" method ="POST" class="form-horizontal">
		  	<div class = "header">
				<!-- <h4>Register Here</h4> -->
	    	</div>
	    	<div class="form-group">	
				<!-- <input type="text" name="name" id="input_name" value="<?php if (isset($_POST['name'])) echo $_POST['name'] ?>" size="30" class="textfield" placeholder="name"> -->
			</div>
			<div class="form-group">
				<!-- <input type="email" name="username" id="input_username" value="<?php if (isset($_POST['username'])) echo $_POST['username'] ?>" size="30" class="textfield" placeholder="username"/> -->
			</div>
			<div class="form-group">
				<input type="text" name="email" id="input_email" value="" size="30" class="textfield" placeholder="Email"/>
			</div>
			<div class="form-group">
				<!-- <input type="password" name="password" id="input_password" value="" size="30" class="textfield" placeholder="Password"/> -->
			</div>
			<div class="form-group">
				<input type="password" name="confirm_password" id="input_confirm_password" value="" size="30" class="textfield" placeholder="Confirm Password"/><br><br>
			</div>
			<input type="submit" value="REGISTER" name="submit"><a href="dashboard.php"></a>
				      
		</form>
	<center><p>already registered?<a href="login.php">Click here to login</a></p>
	</div>
		
</body>
</html>

