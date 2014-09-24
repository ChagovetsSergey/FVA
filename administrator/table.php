<?php
	require "isLogged.inc.php";
	include "../config.php";
	include "adminMenu.inc.php";
	
	$table = "";
	$cat = "";
	if (!empty($_GET['cat'])){
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
			$sql = "SELECT * FROM $table order by p desc";
			$table = mysql_query($sql) or die (mysql_error());
			mysql_close();
			echo "<table>";
			$i = 0;
			while ($raw = mysql_fetch_assoc($table)){
			$i++;
			$id = $raw['id'];
			$team = $raw['team'];
			$g = $raw['g'];
			$w = $raw['w'];
			$d = $raw['d'];
			$l = $raw['l'];
			$gs = $raw['gs'];
			$gp = $raw['gp'];
			$p = $raw['p'];
			echo "<tr><td>$i</td><td>$team</td><td>$g</td><td>$w</td><td>$d</td><td>$l</td><td>$gs-$gp</td><td>$p</td><td><a href=\"editTable.php?cat=" . $cat . "&id=" . $id . "\">Изменить</a></td></tr>";
			
			}
			echo "</table><br>";
		?>
		
		<a href="addTeam.php?cat=<?=$cat?>">Добавить команду</a>

	</body>
</html>