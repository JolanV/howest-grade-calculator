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
		<input type="number" name="BIT" id="BIT">
        <br>
		<label for="CIB">Continues integration basics:</label>
		<input type="number" name="CIB" id="CIB">
		<br>
		<label for="DB">Databases:</label>
		<input type="number" name="DB" id="DB">
		<br>
		<label for="PRA">Programming Advanced:</label>
		<input type="number" name="PRA" id="PRA" >
		<br>
		<label for="PRB">Programming Basics:</label>
		<input type="number" name="PRB" id="PRB">
		<br>
		<label for="WFB">Web Frontend Basics:</label>
		<input type="number" name="WFB" id="WFB">
		<br>
		<label for="WE">Worklplace Exploring</label>
		<input type="number" name="WE" id="WE">
		<br>

	<!-- Semester 2 -->

	    <label for="CIA">Continuous integration advanced:</label>
		<input type="number" name="CIA" id="CIA">
		<br>
		<label for="PRE">Programming Expert:</label>
		<input type="number" name="PRE" id="PRE">
		<br>
		<label for="WB">Web Backend:</label>
		<input type="number" name="WB" id="WB">
		<br>
		<label for="WFA">Web Frontend Advanced:</label>
		<input type="number" min = 0, max = 20 name="WFA" id="WFA">
		<br>
		<label for="WSI">Worklplace Simulation:</label>
		<input type="number" name="WSI" id="WSI">
		<br>

	<!-- Semester 3 -->

	    <label for="AIT">Advanced IT skills:</label>
		<input type="number" name="AIT" id="AIT">
		<br>
		<label for="MDE">Mobile Development:</label>
		<input type="number" name="MDE" id="MDE">
		<br>
		<label for="PIN">Programming Innovation:</label>
		<input type="number" name="PIN" id="PIN">
		<br>
		<label for="PRI">Programming Integration:</label>
		<input type="number" name="PRI" id="PRI">
		<br>
		<label for="WE1">Workplace Experience 1:</label>
		<input type="number" name="WE1" id="WE1">
		<br>

	<!-- Semester 4 -->

	    <label for="IP">Innovative Project:</label>
		<input type="number" name="IP" id="IP">
		<br>
		<label for="WE2">Workplace Experience 2:</label>
		<input type="number" name="WE2" id="WE2">
		<br>
		
		<input type="submit" name="submit" value="Calculate">

	</form>
	
	<?php declare(strict_types = 1);

	    phpinfo();

		if (isset($_POST['submit'])) {
        
        /*Gets the grade values from the form*/

			$bit = $_POST['BIT'];
			$cib = $_POST['CIB'];
			$db = $_POST['DB'];
			$pra = $_POST['PRA'];
			$prb = $_POST['PRB'];
			$wfb = $_POST['WFB'];
			$we = $_POST['WE'];

			$cia = $_POST['CIA'];
			$pre = $_POST['PRE'];
			$wb = $_POST['WB'];
			$wfa = $_POST['WFA'];
			$wsi = $_POST['WSI'];

			$ait = $_POST['AIT'];
			$mde = $_POST['MDE'];
			$pin = $_POST['PIN'];
			$pri = $_POST['PRI'];
			$we1 = $_POST['WE1'];

			$ip = $_POST['IP'];
			$we2 = $_POST['WE2'];

		
        /* Multiply the grades with the studiepunten */

			$new_BIT_score = $bit * 3;
			$new_CIB_score = $cib * 3;
			$new_DB_score = $db * 6;
			$new_PRA_score = $pra * 5;	
			$new_PRB_score = $prb * 6;					
			$new_WFB_score = $wfb * 4;
			$new_WE_score = $we * 3;

			$new_CIA_score = $cia * 3;
			$new_PRE_score = $pre * 6;
			$new_WB_score = $wb * 9;	
			$new_WFA_score = $wfa * 6;
			$new_WSI_score = $wsi * 6;

			$new_AIT_score = $ait * 3;
			$new_MDE_score = $mde * 6;
			$new_PIN_score = $pin * 9;		
			$new_PRI_score = $pri * 6;
			$new_WE1_score = $we1 * 6;

			$new_IP_score = $ip * 9;
			$new_WE2_score = $we2 * 21;

		/*Creates a sum of the score and divide that by the total amount of studiepunten (120 in this case) */	
			
		    $sum_semester1 = $new_PRB_score + $new_PRA_score + $new_BIT_score + $new_WFB_score + $new_WE_score + $new_CIB_score + $new_DB_score;
			$sum_semester2 = $new_CIA_score + $new_PRE_score + $new_WB_score + $new_WFA_score + $new_WSI_score;
			$sum_semester3 = $new_AIT_score + $new_MDE_score + $new_PIN_score + $new_PRI_score + $new_WE1_score;
			$sum_semester4 = $new_IP_score + $new_WE2_score;

			$sum_semesters = $sum_semester1 + $sum_semester2 + $sum_semester3 + $sum_semester4;
			$final_grade = $sum_semesters / 120;

			echo "<p>Your grade will be: $final_grade</p>";

		}
	?>
</body>
</html>