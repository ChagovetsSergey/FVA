<?php
	require "isLogged.inc.php";
	require "../functions/squad.php";
	require "../config.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="cp1251">
		<title>Футбол в Ахтырке</title>
		<style>
			.squad {
				float: left;
				margin: 20px;
			}
			.clear {
				clear: both;
			}	
		</style>
	</head>
	<body>
		<h1>Нефтяник</h1>
	
		<div id="content">
			
			<?php showPlayer("gk"); 
		
			
			showPlayer("df"); 
			
			showPlayer("mf"); 
			
			
			showPlayer("fw"); ?>
			
			<div class="clear"></div>
		</div>
			<hr>
			<form action="addPlayer.php" method="POST">
				Номер<input type="text" name="num" /><br>
				Позиция<select name="pos" size="1">
							<option value="gk">Вратарь</option>
							<option value="df">Защитник</option>
							<option value="mf">Полузащитник</option>
							<option value="fw">Нападающий</option>
					</select><br>
				Имя<input type="text" name="name" /><br>
				Фамилия<input type="text" name="lname" /><br>
				Дата рождения<input type="text" name="date" /><br>
				<input type=submit value="Добавить" />
			</form>
		</div>

	</body>
</html>