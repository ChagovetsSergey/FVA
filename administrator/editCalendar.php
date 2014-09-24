<?php
	include "../config.php";
	require "isLogged.inc.php";

	$cat = "";

	if (!empty($_GET['cat'])){
		switch ($_GET['cat']){
			case 1:
				$cat = "nef_calendar";
				break;
			case 2:
				$cat = "obl_calendar";
				break;
			case 3:
				$cat = "ray_calendar";
				break;
		}
			
	}

	if (!empty($_POST['tour']) and !empty($_POST['game'])){
		$tour = $_POST['tour'];
		$game = $_POST['game'];
		$score = $_POST['score'];
		$cat = $_POST['cat'];
		$sql = "INSERT INTO $cat (tour, game, score) VALUES ($tour, '$game', '$score')";
		mysql_query($sql) or die(mysql_error());
	}

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Футбол в Ахтырке</title>
	</head>
	<body>
		<?php  
			include "adminMenu.inc.php";
		?>
		<form target="" method="POST">
			<input type="hidden" name="cat" value="<?=$cat?>">
			<p>Тур: <input type="text" name="tour" /></p>
			
			<p>Игра: <input type="text" name="game" /></p>
			<p>Счет: <input type="text" name="score" /></p>
			<input type="submit" value="Добавить" />
		</form>

		<?php 
			$sql = "SELECT * FROM $cat";
			$result = mysql_query($sql) or die (mysql_error());
			$t = 1;
			while ($raw = mysql_fetch_assoc($result)){
				if ($raw['tour'] == $t) {
					echo "<h2>$t тур</h2>";
					$t++;
				}
				echo $raw['game'] . " - " . $raw['score'] . "<br>";	
			}
		?>
	</body>
</html>