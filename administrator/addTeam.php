<?php
	require "isLogged.inc.php";
	include "../config.php";

	$cat = "";
	$table = "";
	if (!empty($_GET['cat'])){
		$cat = $_GET['cat'];
	}

	if (!empty($_POST['team']) and !empty($_GET['cat'])){
		$cat = $_GET['cat'];
		switch ($cat){
			case 1: 
				$table = "nef_table";
				break;
			case 2: 
				$table = "obl_table";
				break;
			case 3: 
				$table = "rayA_table";
				break;
			case 4: 
				$table = "rayB_table";
				break;
		}
		$team = $_POST['team'];
		$sql = "INSERT INTO $table (team) VALUES ('$team')";
		mysql_query($sql) or die(mysql_error());
		header ("location: http://fva.com.ua/administrator/table.php?cat=$cat");
	}

?>



<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Футбол в Ахтырке</title>
	</head>
	<body>
		<form target="" method="POST">
			<input type="hidden" name="cat" value="<?=$cat?>" />
			<p>Команда: <input type="text" name="team" /></p>
			<input type="submit" value="Добавить" />
		</form>

	</body>
</html>