<?php
	include "config.php";

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="cp1251">
		<title>Футбол в Ахтырке</title>
		<link rel="stylesheet" href="http://fva.com.ua/style.css">
	</head>
	<body>
		
		<?php  
			include "header.inc.php";
			include "nav.inc.php";
		?>
	
		<div id="content">
			<h1 align="center">Новости</h1>
		<?php
			$sql = "SELECT * FROM news ORDER BY id DESC";
			$news = mysql_query($sql) or die (mysql_error());
			//mysql_close();
			while ($raw = mysql_fetch_assoc($news)){
			echo "<a href=\"http://fva.com.ua/showNews.php?id=" . $raw['id'] . "\">" . $raw['title'] . "</a><br><br>";
			}
		?>
		
		</div>
		
		<?php
			include "footer.inc.php";
		?>
	</body>
</html>