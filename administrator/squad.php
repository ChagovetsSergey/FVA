<?php
	require "isLogged.inc.php";
	require "../functions/squad.php";
	require "../config.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="cp1251">
		<title>������ � �������</title>
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
		<h1>��������</h1>
	
		<div id="content">
			
			<?php showPlayer("gk"); 
		
			
			showPlayer("df"); 
			
			showPlayer("mf"); 
			
			
			showPlayer("fw"); ?>
			
			<div class="clear"></div>
		</div>
			<hr>
			<form action="addPlayer.php" method="POST">
				�����<input type="text" name="num" /><br>
				�������<select name="pos" size="1">
							<option value="gk">�������</option>
							<option value="df">��������</option>
							<option value="mf">������������</option>
							<option value="fw">����������</option>
					</select><br>
				���<input type="text" name="name" /><br>
				�������<input type="text" name="lname" /><br>
				���� ��������<input type="text" name="date" /><br>
				<input type=submit value="��������" />
			</form>
		</div>

	</body>
</html>