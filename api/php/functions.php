<?php

		if (isset($_POST['submit'])) {
        
        /*Gets the grade values from the form*/
		$grades = [
			'bit' => $_POST['BIT'],
			'cib' => $_POST['CIB'],
			'db' => $_POST['DB'],
			'pra' => $_POST['PRA'],
			'prb' => $_POST['PRB'],
			'wfb' => $_POST['WFB'],
			'we' => $_POST['WE'],
			'cia' => $_POST['CIA'],
			'pre' => $_POST['PRE'],
			'wb' => $_POST['WB'],
			'wfa' => $_POST['WFA'],
			'wsi' => $_POST['WSI'],
			'ait' => $_POST['AIT'],
			'mde' => $_POST['MDE'],
			'pin' => $_POST['PIN'],
			'pri' => $_POST['PRI'],
			'we1' => $_POST['WE1'],
			'ip' => $_POST['IP'],
			'we2' => $_POST['WE2'],
		];
	
		$study_weight = [
			'bit' => 3,
			'cib' => 3,
			'db' => 6,
			'pra' => 5,
			'prb' => 6,
			'wfb' => 4,
			'we' => 3,
			'cia' => 3,
			'pre' => 6,
			'wb' => 9,
			'wfa' => 6,
			'wsi' => 6,
			'ait' => 3,
			'mde' => 6,
			'pin' => 9,
			'pri' => 6,
			'we1' => 6,
			'ip' => 9,
			'we2' => 21,
		];
		
		/* functions */
        /* Multiply the grades with the study_weight */

		function multiply($grade, $study_weight)
		{
			return $grade * $study_weight;
		}
	
		$scores = array_map('multiply', $grades, $study_weight);
		$final_grade = array_sum($scores) / 120;
	
        echo "<p id='echo'>Your grade will be: $final_grade</p>";
		}
	?>