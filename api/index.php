<!DOCTYPE html>
<html>
<head>
	<title>Score Multiplier</title>
</head>
<body>
	<h1>Howest Grading Tool</h1>
	<p>Enter your scores in the form below to calculate your final grade!</p>
	<form method="POST">

	<!-- Semester 1 -->
		<label for="BIT">Basic IT skills:</label>
		<input class="input" type="number" name="BIT" id="BIT"  value="<?php echo isset($_POST['BIT']) ? $_POST['BIT'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="CIB">Continues integration basics:</label>
		<input class="input" type="number" name="CIB" id="CIB" value="<?php echo isset($_POST['CIB']) ? $_POST['CIB'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="DB">Databases:</label>
		<input class="input" type="number" name="DB" id="DB" value="<?php echo isset($_POST['DB']) ? $_POST['DB'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="PRA">Programming Advanced:</label>
		<input class="input" type="number" name="PRA" id="PRA" value="<?php echo isset($_POST['PRA']) ? $_POST['PRA'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="PRB">Programming Basics:</label>
		<input class="input" type="number" name="PRB" id="PRB" value="<?php echo isset($_POST['PRB']) ? $_POST['PRB'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="WFB">Web Frontend Basics:</label>
		<input class="input" type="number" name="WFB" id="WFB" value="<?php echo isset($_POST['WFB']) ? $_POST['WFB'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="WE">Worklplace Exploring</label>
		<input class="input" type="number" name="WE" id="WE" value="<?php echo isset($_POST['WE']) ? $_POST['WE'] : ''; ?>" min="0" max="20" required>
		<br>

	 <!-- Semester 2 -->

	 	<label for="CIA">Continuous integration advanced:</label>
        <input class="input" type="number" name="CIA" id="CIA" value="<?php echo isset($_POST['CIA']) ? $_POST['CIA'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="PRE">Programming Expert:</label>
        <input class="input" type="number" name="PRE" id="PRE" value="<?php echo isset($_POST['PRE']) ? $_POST['PRE'] : ''; ?>" min="0" max="20" required> 
        <br>
        <label for="WB">Web Backend:</label>
        <input class="input" type="number" name="WB" id="WB" value="<?php echo isset($_POST['WB']) ? $_POST['WB'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="WFA">Web Frontend Advanced:</label>
        <input class="input" type="number" min = 0, max = 20 name="WFA" id="WFA" value="<?php echo isset($_POST['WFA']) ? $_POST['WFA'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="WSI">Worklplace Simulation:</label>
        <input class="input" type="number" name="WSI" id="WSI" value="<?php echo isset($_POST['WSI']) ? $_POST['WSI'] : ''; ?>" min="0" max="20" required>
        <br>
	<!-- Semester 3 -->

		<label for="AIT">Advanced IT skills:</label>
        <input class="input" type="number" name="AIT" id="AIT" value="<?php echo isset($_POST['AIT']) ? $_POST['AIT'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="MDE">Mobile Development:</label>
        <input class="input" type="number" name="MDE" id="MDE" value="<?php echo isset($_POST['MDE']) ? $_POST['MDE'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="PIN">Programming Innovation:</label>
        <input class="input" type="number" name="PIN" id="PIN" value="<?php echo isset($_POST['PIN']) ? $_POST['PIN'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="PRI">Programming Integration:</label>
        <input class="input" type="number" name="PRI" id="PRI" value="<?php echo isset($_POST['PRI']) ? $_POST['PRI'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="WE1">Workplace Experience 1:</label>
        <input class="input" type="number" name="WE1" id="WE1" value="<?php echo isset($_POST['WE1']) ? $_POST['WE1'] : ''; ?>" min="0" max="20" required>
        <br>

    <!-- Semester 4 -->

        <label for="IP">Innovative Project:</label>
        <input class="input" type="number" name="IP" id="IP" value="<?php echo isset($_POST['IP']) ? $_POST['IP'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="WE2">Workplace Experience 2:</label>
        <input class="input" type="number" name="WE2" id="WE2" value="<?php echo isset($_POST['WE2']) ? $_POST['WE2'] : ''; ?>" min="0" max="20" required>
        <br>
		
		<input type="submit" name="submit" value="Calculate">
		<input type="button" name="clear" value="Clear" onclick="clearForm()">

	</form>
	
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

	<script>
        function clearForm() {
			var inputs = document.getElementsByClassName('input');
			for (var i = 0; i < inputs.length; i++) {
				inputs[i].value = '';
			}
			document.getElementById("echo").innerHTML = "";
        }
    </script>
	
</body>
</html>