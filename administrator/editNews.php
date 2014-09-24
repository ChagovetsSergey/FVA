<?php
	
	include "../config.php";
	require "isLogged.inc.php";

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="cp1251">
		<title>Футбол в Ахтырке</title>
	</head>
	<body>
		
		<?php  
			include "adminMenu.inc.php";
		?>
	
		<div id="content">
		<?php
			$sql = "SELECT * FROM news ORDER BY id DESC";
			$news = mysql_query($sql) or die (mysql_error());
			mysql_close();
			while ($raw = mysql_fetch_assoc($news)){
				echo $raw['title'] . " <a href=\"updateNews.php?id=" . $raw[id] . "\">Редактировать</a><br>";
			}
		?>
		
		</div>
		
		<?php
			include "footer.inc.php";
		?>
	</body>
</html>