<?php
	require "isLogged.inc.php";
	include "../config.php";
	include "classes/team.php";

	$cat = "";
	$table = "";
	if(!empty($_GET['id']) and !empty($_GET['cat'])){
		$id = $_GET['id'];
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
		$sql = "SELECT * FROM $table WHERE id=$id";
		$query = mysql_query($sql) or die(mysql_error());
		$raw = mysql_fetch_assoc($query) or die(mysql_error());
		$team = new Team($raw['id'], $raw['team'], $raw['g'], $raw['w'], $raw['d'], $raw['l'], $raw['gs'], $raw['gp'], $raw['p']);		
	}
	
	
	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Футбол в Ахтырке</title>
		
	</head>
	<body>
		<form action="updateTable.php" method="POST">
			<input type="hidden" name="cat" value="<?=$cat?>">			
			<p>Команда: <input type="text" readonly name="team" value="<?=$team->name?>"></p>
			<p>Игры: <input type="text" name="g" value="<?=$team->games?>"></p>
			<p>Выиграши: <input type="text" name="w" value="<?=$team->wins?>"></p>
			<p>Ничии: <input type="text" name="d" value="<?=$team->draws?>"></p>
			<p>Поражения: <input type="text" name="l" value="<?=$team->looses?>"></p>
			<p>Забито: <input type="text" name="gs" value="<?=$team->goalscored?>"></p>
			<p>Пропущено: <input type="text" name="gp" value="<?=$team->goalpasses?>"></p>
			<p>Очки: <input type="text" name="p" value="<?=$team->points?>"></p>
			<input type="submit" value="Изменить" />
		</form>
	</body>
</html>