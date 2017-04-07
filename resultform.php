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
		<form action="result.php" method="POST" role="form" class="container center">
			<legend>Student Result</legend>
			<div class="form-group">
				<label for="test">Test Score</label>
				<input type="text" class="form-control" id="test" placeholder="test score" name="test" >
			</div>
			<div class="form-group">
				<label for="exam">Exam Score</label>
				<input type="text" class="form-control" id="exam" placeholder="exam score" name="exam" >
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