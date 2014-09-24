<?php
	require "isLogged.inc.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="cp1251">
		<title>Футбол в Ахтырке</title>
	</head>
	<body>
		<h1>Администратор</h1>
	
		<div id="content">
			<ul>
				
				<li><a href="addNews.php">Добавить новость</a></li>
				<li><a href="editNews.php">Редактировать новость</a></li>
				<li>Редактировать календарь</li>
					<ul>
						<li><a href="editCalendar.php?cat=1">Нефтяник</a></li>
						<li><a href="editCalendar.php?cat=2">Область</a></li>
						<li><a href="editCalendar.php?cat=3">Район</a></li>
					</ul>
				<li>Редактировать таблицу</li>
					<ul>
						<li><a href="table.php?cat=1">Нефтяник</a></li>
						<li><a href="table.php?cat=2">Область</a></li>
						<li><a href="table.php?cat=3">Район группа А</a></li>
						<li><a href="table.php?cat=4">Район группа Б</a></li>
					</ul>
				<li>Составы команд</li>
					<ul>
						<li><a href="squad.php">Нефтяник</a></li>
					</ul>
			</ul>
		</div>

	</body>
</html>