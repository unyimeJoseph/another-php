<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
<?php
			if (isset($_GET['error'])) {
				if ($_GET['error'] == 'test') {
					echo '<div class="alert alert-danger">Only Numeric Value Allowed For Test</div>';
				} elseif ($_GET['error'] == 'exam') {
					echo '<div class=\'alert alert-danger\'>Only Numeric Value Allowed For Exam</div>';
				} elseif ($_GET['error'] == 'all') {
					echo '<div class=\'alert alert-danger\'>Only Numeric Value Allowed</div>';
				}
			}
		?> 
		<form action="student.php" method="POST" role="form" class="container center">
			<legend>Student Result</legend>
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" placeholder="Name" name="name">
			</div>
			<div class="form-group">
				<label for="Registration no.">Registration no.</label>
				<input type="text" class="form-control" id="exam" placeholder="Registration no." name="registration no." >
			</div>
		
			<div class="form-group">
				<label for="maths">Maths</label>
				<input type="text" class="form-control" id="maths" placeholder="Maths" name="maths"><br>
				<label for="English">English</label>
				<input type="text" class="form-control" id="English" placeholder="english" name="english"><br>			
				<label for="ibibio">Ibibio</label>
				<input type="text" class="form-control" id="ibibio" placeholder="ibibio" name="ibibio">
			</div>							
			<button type="submit" class="btn btn-primary center">Submit Result</button>
		</form>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>