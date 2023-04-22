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
		<input type="number" name="BIT" id="BIT"  value="<?php echo isset($_POST['BIT']) ? $_POST['BIT'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="CIB">Continues integration basics:</label>
		<input type="number" name="CIB" id="CIB" value="<?php echo isset($_POST['CIB']) ? $_POST['CIB'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="DB">Databases:</label>
		<input type="number" name="DB" id="DB" value="<?php echo isset($_POST['DB']) ? $_POST['DB'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="PRA">Programming Advanced:</label>
		<input type="number" name="PRA" id="PRA" value="<?php echo isset($_POST['PRA']) ? $_POST['PRA'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="PRB">Programming Basics:</label>
		<input type="number" name="PRB" id="PRB" value="<?php echo isset($_POST['PRB']) ? $_POST['PRB'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="WFB">Web Frontend Basics:</label>
		<input type="number" name="WFB" id="WFB" value="<?php echo isset($_POST['WFB']) ? $_POST['WFB'] : ''; ?>" min="0" max="20" required>
		<br>
		<label for="WE">Worklplace Exploring</label>
		<input type="number" name="WE" id="WE" value="<?php echo isset($_POST['WE']) ? $_POST['WE'] : ''; ?>" min="0" max="20" required>
		<br>

	 <!-- Semester 2 -->

	 	<label for="CIA">Continuous integration advanced:</label>
        <input type="number" name="CIA" id="CIA" value="<?php echo isset($_POST['CIA']) ? $_POST['CIA'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="PRE">Programming Expert:</label>
        <input type="number" name="PRE" id="PRE" value="<?php echo isset($_POST['PRE']) ? $_POST['PRE'] : ''; ?>" min="0" max="20" required> 
        <br>
        <label for="WB">Web Backend:</label>
        <input type="number" name="WB" id="WB" value="<?php echo isset($_POST['WB']) ? $_POST['WB'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="WFA">Web Frontend Advanced:</label>
        <input type="number" min = 0, max = 20 name="WFA" id="WFA" value="<?php echo isset($_POST['WFA']) ? $_POST['WFA'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="WSI">Worklplace Simulation:</label>
        <input type="number" name="WSI" id="WSI" value="<?php echo isset($_POST['WSI']) ? $_POST['WSI'] : ''; ?>" min="0" max="20" required>
        <br>
	<!-- Semester 3 -->

		<label for="AIT">Advanced IT skills:</label>
        <input type="number" name="AIT" id="AIT" value="<?php echo isset($_POST['AIT']) ? $_POST['AIT'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="MDE">Mobile Development:</label>
        <input type="number" name="MDE" id="MDE" value="<?php echo isset($_POST['MDE']) ? $_POST['MDE'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="PIN">Programming Innovation:</label>
        <input type="number" name="PIN" id="PIN" value="<?php echo isset($_POST['PIN']) ? $_POST['PIN'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="PRI">Programming Integration:</label>
        <input type="number" name="PRI" id="PRI" value="<?php echo isset($_POST['PRI']) ? $_POST['PRI'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="WE1">Workplace Experience 1:</label>
        <input type="number" name="WE1" id="WE1" value="<?php echo isset($_POST['WE1']) ? $_POST['WE1'] : ''; ?>" min="0" max="20" required>
        <br>

    <!-- Semester 4 -->

        <label for="IP">Innovative Project:</label>
        <input type="number" name="IP" id="IP" value="<?php echo isset($_POST['IP']) ? $_POST['IP'] : ''; ?>" min="0" max="20" required>
        <br>
        <label for="WE2">Workplace Experience 2:</label>
        <input type="number" name="WE2" id="WE2" value="<?php echo isset($_POST['WE2']) ? $_POST['WE2'] : ''; ?>" min="0" max="20" required>
        <br>
		
		<input type="submit" name="submit" value="Calculate">
		<input type="button" name="clear" value="Clear" onclick="clearForm()">

	</form>
	
	<?php

		if (isset($_POST['submit'])) {
        
        /*Gets the grade values from the form*/
		$grades = [
			$bit => $_POST['BIT'],
			$cib => $_POST['CIB'],
			$db => $_POST['DB'],
			$pra => $_POST['PRA'],
			$prb => $_POST['PRB'],
			$wfb => $_POST['WFB'],
			$we => $_POST['WE'],
	
			$cia => $_POST['CIA'],
			$pre => $_POST['PRE'],
			$wb => $_POST['WB'],
			$wfa => $_POST['WFA'],
			$wsi => $_POST['WSI'],
	
			$ait => $_POST['AIT'],
			$mde => $_POST['MDE'],
			$pin => $_POST['PIN'],
			$pri => $_POST['PRI'],
			$we1 => $_POST['WE1'],
	
			$ip => $_POST['IP'],
			$we2 => $_POST['WE2'],

		]
		$study_weight = [
			'BIT' => 3,
			'CIB' => 3,
			'DB' => 6,
			'PRA' => 5,
			'PRB' => 6,
			'WFB' => 4,
			'WE' => 3,
			'CIA' => 3,
			'PRE' => 6,
			'WB' => 9,
			'WFA' => 6,
			'WSI' => 6,
			'AIT' => 3,
			'MDE' => 6,
			'PIN' => 9,
			'PRI' => 6,
			'WE1' => 6,
			'IP' => 9,
			'WE2' => 21
		]
		
        /* Multiply the grades with the studiepunten */

		/* functions */

		public int multiply($grade, $study_weight) {
			return $grade * $studiepunten;
		}
		/* functions end */

		//creates sum of all grades and divides by 120
		$scores = (array.map('multiply', $grades, $study_weight)/120);

			echo "<p>Your grade will be: $scores</p>";

		}
	?>

	<script>
        function clearForm() {
            document.getElementById("BIT").value = "";
            document.getElementById("CIB").value = "";
            document.getElementById("DB").value = "";
            document.getElementById("PRA").value = "";
            document.getElementById("PRB").value = "";
            document.getElementById("WFB").value = "";
            document.getElementById("WE").value = "";
            document.getElementById("CIA").value = "";
            document.getElementById("PRE").value = "";
            document.getElementById("WB").value = "";
            document.getElementById("WFA").value = "";
            document.getElementById("WSI").value = "";
            document.getElementById("AIT").value = "";
            document.getElementById("MDE").value = "";
            document.getElementById("PIN").value = "";
            document.getElementById("PRI").value = "";
            document.getElementById("WE1").value = "";
            document.getElementById("IP").value = "";
            document.getElementById("WE2").value = "";
        }
    </script>
	
</body>
</html>