<?php
	require "isLogged.inc.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="cp1251">
		<title>������ � �������</title>
	</head>
	<body>
		<h1>�������������</h1>
	
		<div id="content">
			<ul>
				
				<li><a href="addNews.php">�������� �������</a></li>
				<li><a href="editNews.php">������������� �������</a></li>
				<li>������������� ���������</li>
					<ul>
						<li><a href="editCalendar.php?cat=1">��������</a></li>
						<li><a href="editCalendar.php?cat=2">�������</a></li>
						<li><a href="editCalendar.php?cat=3">�����</a></li>
					</ul>
				<li>������������� �������</li>
					<ul>
						<li><a href="table.php?cat=1">��������</a></li>
						<li><a href="table.php?cat=2">�������</a></li>
						<li><a href="table.php?cat=3">����� ������ �</a></li>
						<li><a href="table.php?cat=4">����� ������ �</a></li>
					</ul>
				<li>������� ������</li>
					<ul>
						<li><a href="squad.php">��������</a></li>
					</ul>
			</ul>
		</div>

	</body>
</html>