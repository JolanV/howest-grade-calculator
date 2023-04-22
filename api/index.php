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
		<input type="number" name="BIT" id="BIT" value="<?php echo isset($_POST['BIT']) ? $_POST['BIT'] : ''; ?>">
		<br>
		<label for="CIB">Continues integration basics:</label>
		<input type="number" name="CIB" id="CIB" value="<?php echo isset($_POST['CIB']) ? $_POST['CIB'] : ''; ?>">
		<br>
		<label for="DB">Databases:</label>
		<input type="number" name="DB" id="DB" value="<?php echo isset($_POST['DB']) ? $_POST['DB'] : ''; ?>">
		<br>
		<label for="PRA">Programming Advanced:</label>
		<input type="number" name="PRA" id="PRA" value="<?php echo isset($_POST['PRA']) ? $_POST['PRA'] : ''; ?>">
		<br>
		<label for="PRB">Programming Basics:</label>
		<input type="number" name="PRB" id="PRB" value="<?php echo isset($_POST['PRB']) ? $_POST['PRB'] : ''; ?>">
		<br>
		<label for="WFB">Web Frontend Basics:</label>
		<input type="number" name="WFB" id="WFB" value="<?php echo isset($_POST['WFB']) ? $_POST['WFB'] : ''; ?>">
		<br>
		<label for="WE">Worklplace Exploring</label>
		<input type="number" name="WE" id="WE" value="<?php echo isset($_POST['WE']) ? $_POST['WE'] : ''; ?>">
		<br>

	 <!-- Semester 2 -->

	 	<label for="CIA">Continuous integration advanced:</label>
        <input type="number" name="CIA" id="CIA" value="<?php echo isset($_POST['CIA']) ? $_POST['CIA'] : ''; ?>">
        <br>
        <label for="PRE">Programming Expert:</label>
        <input type="number" name="PRE" id="PRE" value="<?php echo isset($_POST['PRE']) ? $_POST['PRE'] : ''; ?>">
        <br>
        <label for="WB">Web Backend:</label>
        <input type="number" name="WB" id="WB" value="<?php echo isset($_POST['WB']) ? $_POST['WB'] : ''; ?>">
        <br>
        <label for="WFA">Web Frontend Advanced:</label>
        <input type="number" min = 0, max = 20 name="WFA" id="WFA" value="<?php echo isset($_POST['WFA']) ? $_POST['WFA'] : ''; ?>">
        <br>
        <label for="WSI">Worklplace Simulation:</label>
        <input type="number" name="WSI" id="WSI" value="<?php echo isset($_POST['WSI']) ? $_POST['WSI'] : ''; ?>">
        <br>
	<!-- Semester 3 -->

		<label for="AIT">Advanced IT skills:</label>
        <input type="number" name="AIT" id="AIT" value="<?php echo isset($_POST['AIT']) ? $_POST['AIT'] : ''; ?>">
        <br>
        <label for="MDE">Mobile Development:</label>
        <input type="number" name="MDE" id="MDE" value="<?php echo isset($_POST['MDE']) ? $_POST['MDE'] : ''; ?>">
        <br>
        <label for="PIN">Programming Innovation:</label>
        <input type="number" name="PIN" id="PIN" value="<?php echo isset($_POST['PIN']) ? $_POST['PIN'] : ''; ?>">
        <br>
        <label for="PRI">Programming Integration:</label>
        <input type="number" name="PRI" id="PRI" value="<?php echo isset($_POST['PRI']) ? $_POST['PRI'] : ''; ?>">
        <br>
        <label for="WE1">Workplace Experience 1:</label>
        <input type="number" name="WE1" id="WE1" value="<?php echo isset($_POST['WE1']) ? $_POST['WE1'] : ''; ?>">
        <br>

    <!-- Semester 4 -->

        <label for="IP">Innovative Project:</label>
        <input type="number" name="IP" id="IP" value="<?php echo isset($_POST['IP']) ? $_POST['IP'] : ''; ?>">
        <br>
        <label for="WE2">Workplace Experience 2:</label>
        <input type="number" name="WE2" id="WE2" value="<?php echo isset($_POST['WE2']) ? $_POST['WE2'] : ''; ?>">
        <br>
		
		<input type="submit" name="submit" value="Calculate">
		<input type="button" name="clear" value="Clear" onclick="clearForm()">

	</form>
	
	<?php

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