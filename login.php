<?php

	require('loginconn.php');

	if(isset($_POST['submit'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    
    if ($email== '') {
      echo '<div class="alert-danger col-md-4 col-md-offset-4 text-content">You Must Add Your Email</div>';
    }elseif ($password=='') {
      echo '<div class="alert-danger col-md-4 col-md-offset-4 text-content">You Must Add Your Password</div>';
    }elseif (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      echo '<div class="alert-danger col-md-4 col-offset-4 text-content">Your email address is not valid</div>';
    }else {
     $sql = "SELECT id, email, password FROM users Where email = '$email'";
      $result = mysqli_query($conn, $sql);
      var_dump($result);
      if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) { 
        session_start();
        $_SESSION['user_id'] = $row['id'];
        header('location: dashboard.php', TRUE, 302);
        exit;
        }else {
         echo '<div class = "alert alert-danger col-md-4 col-md-offset-4 text-content"><b>log in failed 1<b></div>';
        }
      }
    }
  }
?>	


<!DOCTYPE html>
<html>
<head>
	<title>MY APP</title>
		<meta charset="utf-8">
		<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<style type="text/css">
          body{
                background: fixed;
                background-color: white;/* rgb(230,230, 250);  */
                text-align: center;
                margin-top: 60px;
                color: #444;
              }   
                h3{
                  text-align: center;
                  font-size: 30px;
                /*  color: white; */
                  padding: 10px;
                }
                form{
                  height: 410px;
                  border: 5px ;
                  /* background: #D4DEDF;rgb(220, 125, 153); */
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
                h2{
                  text-decoration: none;
                }
                .container {
                  padding-bottom: 60px;
                  background: #f8f8f8;
                }
                input{
                  margin-top: 15px;
                  padding: 8px;
                }

                .header{
                  height: 40px;
                  /* background: #D4DEDF; */
                  border: 3px /* solid white */;
                  /* box-shadow: 0px 2px 2px 0px; */
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
	<h1>Welcome to this site</h1>
	  <form method="post" name="login form">
	  <div class="header">
	  <h3>Login</h3>
	  </div>
		
			<div class="form-group">
			<input type="email" name="email" id="input_email_username" size="30" value="<?php if (isset($_POST['email'])) echo $_POST['email'] ?>" class="form-control" placeholder="Email/Username"/><br><br>
			 <div class="user-icon"></div>
       </div>
       <div class="form-group">
			<input type="password" name="password" id="input_password" size="30" value="" class="textfield" placeholder="Password"/><br><br>
			<div class="pass-icon"></div>
      </div> 
			       <p class="forgot"><a href="#">forgot password?</a></p>
			     <div class="footer">
        		<input type="submit" value="LOGIN" button class="btn btn-warnning" name="submit"><a href="dashboard.php"></a>
            </div>
            New Here<a href="registration.php">Register</a>
       	  </div>
		    </div>
	</form>
	</div>
			<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
		
</body>
</html>

