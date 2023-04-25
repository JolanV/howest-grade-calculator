<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Score Multiplier</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            background: rgb(156, 153, 213);
            background: linear-gradient(90deg, rgba(156, 153, 213, 1) 0%, rgba(68, 200, 245, 1) 74%, rgba(237, 237, 237, 1) 100%);
            text-align: center;
        }

        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: auto;
        }

        h1 {
            font-weight: 400;
            font-size: 3pc;
            color: white;
            margin-top: 20px;
            margin-bottom: 5px;
        }

        p {
            font-size: large;
            font-weight: 500;
            color: white;
            margin-bottom: 50px;
        }

        section {
            display: list-item;
            align-items: center;
        }

        .sem {
            padding: 25px;
            border-radius: 20px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 5px;
            margin-bottom: 15px;
            width: 400px;
            height: fit-content;
            background-color: white;
            font-size: x-large;
        }

        input {
            margin-top: 25px;
            margin-bottom: 25px;
        }

        .buttonprim {
            background-color: #bfe3b4;
            font-size: 16px;
            padding: 15px 32px;
            border-radius: 15px;
            font-weight: 700;
            margin-right: 10px;
        }

        .buttonsec {
            background-color: #F47174;
            font-size: 16px;
            padding: 15px 32px;
            border-radius: 15px;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <img src="https://ima.cdn.dreamapply.com/eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpc3MiOiJkcmVhbS1hcHBseSIsImF1ZCI6ImRyZWFtLWltYWdlIiwicGxkIjp7InBhdGgiOiJkcmVhbS1hcHBseTpzaGFyZDEyNjYvaW5zdGFuY2VfbG9nb3MvMS5xZnByZGIiLCJ0cmFuc2Zvcm1hdGlvbnMiOlt7Im5hbWUiOiJmaXQiLCJwYXJhbXMiOnsid2lkdGgiOiI0MjAiLCJoZWlnaHQiOiIyMDAiLCJxdWFsaXR5IjoiOTUiLCJleHRlbmQiOiIyNTUsMjU1LDI1NSJ9fV0sImNhY2hlIjoibWF4LWFnZT0zMTUzNjAwMCwgcHVibGljIiwib3V0cHV0X2Zvcm1hdCI6InNhbWUiLCJzZGtfdmVyc2lvbiI6IjEuMCJ9fQ.QObW-SdmphPw1VESco5mY0bxq5G1f0U9e3PeDByb-I6rXujQVBAzAQwJUCjHyyv0Z3TCIMZWwltjYQB6j5OPYma_hVlB1XsbhDvtNcPBb5tulmUISIFKUXGH2prWFKC4d3i4MggMejSOdJG1Zd-FW7Dz6S4KxU7UtuB_DoA-_WuoGX0k_Zz4WTdmGn6o4EFirtUpLfJjHMwB_BMvf03IwS64_wjrxaNzCG_R3HpFiZDhPpVDAINRYOy1_JntlPGhT0R404tImscsX_Az5L9vOIjxNpAznpCFOSzsXkrxxmMVX9QwCo8HhtLgsvVVp-nweo9XJ5bXuAx2x2J6aJhLCQ" alt="">
    <p>Enter your scores in the form below to calculate your final grade!</p>
    <form method="POST">
        <section>

            <!-- Semester 1 -->
            <h1>Semester 1</h1>
            <div class="sem">

                <label for="BIT">Basic IT skills:</label>
                <input class="input" type="number" name="BIT" id="BIT" value="<?php echo isset($_POST['BIT']) ? $_POST['BIT'] : ''; ?>" min="0" max="20" required>
                <br>
                <label for="CIB">CI basics:</label>
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
                <label for="WE">Workplace Exploring:</label>
                <input class="input" type="number" name="WE" id="WE" value="<?php echo isset($_POST['WE']) ? $_POST['WE'] : ''; ?>" min="0" max="20" required>
                <br>
            </div>

            <!-- Semester 2 -->
            <h1>Semester 2</h1>
            <div class="sem">

                <label for="CIA">CI advanced:</label>
                <input class="input" type="number" name="CIA" id="CIA" value="<?php echo isset($_POST['CIA']) ? $_POST['CIA'] : ''; ?>" min="0" max="20" required>
                <br>
                <label for="PRE">Programming Expert:</label>
                <input class="input" type="number" name="PRE" id="PRE" value="<?php echo isset($_POST['PRE']) ? $_POST['PRE'] : ''; ?>" min="0" max="20" required>
                <br>
                <label for="WB">Web Backend:</label>
                <input class="input" type="number" name="WB" id="WB" value="<?php echo isset($_POST['WB']) ? $_POST['WB'] : ''; ?>" min="0" max="20" required>
                <br>
                <label for="WFA">Web Frontend Advanced:</label>
                <input class="input" type="number" name="WFA" id="WFA" value="<?php echo isset($_POST['WFA']) ? $_POST['WFA'] : ''; ?>" min="0" max="20" required>
                <br>
                <label for="WSI">Worklplace Simulation:</label>
                <input class="input" type="number" name="WSI" id="WSI" value="<?php echo isset($_POST['WSI']) ? $_POST['WSI'] : ''; ?>" min="0" max="20" required>
                <br>
            </div>

            <!-- Semester 3 -->
            <h1>Semester 3</h1>
            <div class="sem">

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
            </div>

            <!-- Semester 4 -->
            <h1>Semester 4</h1>
            <div class="sem">

                <label for="IP">Innovative Project:</label>
                <input class="input" type="number" name="IP" id="IP" value="<?php echo isset($_POST['IP']) ? $_POST['IP'] : ''; ?>" min="0" max="20" required>
                <br>
                <label for="WE2">Workplace Experience 2:</label>
                <input class="input" type="number" name="WE2" id="WE2" value="<?php echo isset($_POST['WE2']) ? $_POST['WE2'] : ''; ?>" min="0" max="20" required>
                <br>
            </div>
        </section>
        <input class="buttonprim" type="submit" name="submit" value="Calculate">
        <input class="buttonsec" type="submit" name="clear" value="Clear">
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
        $result = "<p id='echo'>Your grade will be: $final_grade</p>";
        echo $result;
	}

    if (isset($_POST['clear'])) {
        // clear the form input fields here
        $_POST = array_map(function($val) {
            return '';
        }, $_POST);
      }

    ?>

</body>

</html>