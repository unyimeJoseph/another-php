<?php

	$test = (int) filter_var($_POST['test'], FILTER_SANITIZE_STRING);
	$exam = (int) filter_var($_POST['exam'], FILTER_SANITIZE_STRING);
	// Check if test and exam are numeric values
	if (is_numeric($test) && is_numeric($exam)) {
		// Check if test is within range 0 - 30
		if ($test >= 0 && $test <= 30) {
			// Check if exam is within range 0 - 70
			if ($exam >= 0 && $exam <= 70) {
				// Take sum of test and exam
				$sum = $test + $exam;
				// Determine grade from sum
				if ($sum >= 70) {
					$grade = 'A';
				} elseif ($sum >= 60 && $sum < 70) {
					$grade = 'B';
				} elseif ($sum >= 50 && $sum < 60) {
					$grade = 'C';
				} elseif ($sum >= 45 && $sum < 50) {
					$grade = 'D';
				} elseif ($sum >= 40 && $sum < 45) {
					$grade = 'E';
				} elseif ($sum < 40) {
					$grade = 'F';
				}
				echo 'Your Test Score is ' . $test . '<br />';
				echo 'Your Exam Score is ' . $exam . '<br />';
				echo 'Your Total Score is ' . $sum . '<br />';
				echo 'Your Grade is ' . $grade;
			} else {
				header('Location: resultform.php?error=exam', 302, TRUE);
				exit;
			}
		} else {
			header('Location: resultform.php?error=test', 302, TRUE);
			exit;
		}
	} else {
		header('Location: resultform.php?error=all', 302, TRUE);
		exit;
	}