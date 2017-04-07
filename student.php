<?php 

$total_credit_unit = 15;
$maths_grade = '';
$english_grade = '';
$ibibio_grade = '';
	$maths = (int) filter_var($_POST['maths'], FILTER_SANITIZE_STRING);
	$english = (int) filter_var($_POST['English'], FILTER_SANITIZE_STRING);
	$ibibio = (int) filter_var($_POST['ibibio'], FILTER_SANITIZE_STRING);
	$name =  filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		// Check if maths, english and ibibio are numeric values
		if (is_numeric($maths) && is_numeric($english) && is_numeric($ibibio)) {

			$total_score = $maths + $english + $ibibio;

				$GPA = $total_score / $total_credit_unit;
			if($maths != 0 && $english != 0 && $ibibio != 0 ){
				
						if ($maths >= 70 ){
						$maths_grade = 'A';
						}						
						if ($english >= 70 ){
						$english_grade = 'A';
						}
						if ($ibibio >= 70 ){
						$ibibio_grade = 'A';
						}


					if ($maths >= 60 && $maths <=69) {  
							$maths_grade = 'B';
					}
					if ($english >= 60 && $english <= 69) {  
							$english_grade = 'B';
					}
					if ($ibibio >= 60 && $ibibio <= 69) {  
							$ibibio_grade = 'B';
					}


					if ($maths >= 50 && $maths <= 59) {  
							$maths_grade = 'C';
					}
					if ($english >= 50 && $english <= 59) {  
							$english_grade = 'C';
					}
					if ($ibibio >= 50 && $ibibio <= 59) {  
							$ibibio_grade = 'C';
					}


					if ($maths >= 45 && $maths <= 49)  {  
							$maths_grade = 'D';
					}
					if ($english >= 45 && $english <= 49) {  
							$english_grade = 'D';
					}
					if ($ibibio >= 45 && $ibibio <= 49) {  
							$ibibio_grade = 'D';
					}
				
			}

					echo 'Your Name is '. $Name. '<br />';
					echo 'Your Maths Score is ' . $maths . '<br />';
					echo 'Your Maths grade is ' . $maths_grade . '<br />';
					echo 'Your English Score is ' . $english . '<br />';
					echo 'Your English grade is ' . $english_grade . '<br />';
					echo 'Your Ibibio Score is ' . $ibibio . '<br />';
					echo 'Your Ibibio grade is ' . $ibibio_grade . '<br />';
					echo 'Your Total Score is ' . $total_score . '<br />';
					echo 'Your GPA is ' . $GPA. '</br>';						
		}
				
			 else {
				header('Location: resultform.php?error=exam', 302, TRUE);
				exit;
			}

?>