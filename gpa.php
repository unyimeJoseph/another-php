<?php

$maths = ' ,';
$english = ', ';
$ibibio = ', ';
	if (settype($maths, 'integer' ) &&
		settype($english,'integer') &&
			settype($ibibio, 'integer')) {
		if ($maths >= 0 && $maths <= 100) && ($english >= 0 && $english <= 100)) {
			$maths_grade = grade($maths);
			$english_grade = grade($english);
			$ibibio_grade = grade($ibibio);

			$maths_cu = 3;
			$english_cu = 3;
			$ibibio_cu = 3;

			$maths_points = $maths_cu * $maths_grade[values];
			$total_points = $maths_points + $englis_points + $ibibio_points;
			gp = $total_points / 3;
		}
		
	}