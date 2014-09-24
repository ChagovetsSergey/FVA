<?php
	include "config.php";
	include "functions/calendar.php";
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
			<h1 align="center">Favbet Лига 1</h1></br>
		
			<div class="tourandtable">
			<div class="tour">
				<?php showLastTour(); 
				showNextTour(); ?>
			</div>
		
			<div class="onegroup">

			<?php
				$sql = "SELECT * FROM nef_table order by p desc";
				$table = mysql_query($sql) or die (mysql_error());
			
				$i = 0;

				?>
				
				
				
			<h2>Турнирная таблица</h2>
			<table class="grid" cellspacing="0">
				<tr>
    					<th width=20px>м</th>
        				<th width=130px>команда</th>
        				<th width=25px>и</th>
        				<th width=25px>в</th>
        				<th width=25px>н</th>
        				<th width=25px>п</th>
        				<th width=50px>м</th>
        				<th width=25px>о</th>
    				</tr>
				
				<?php
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
				echo "<tr><td>$i</td><td>$team</td><td>$g</td><td>$w</td><td>$d</td><td>$l</td><td>$gs-$gp</td><td>$p</td></tr>";
				
				}
			?>

			</table>
			</div>
			</div>	
			<div id="news" class="newsline">
				<h2>Лента новостей</h2></br>
				<?php
					$sql = "SELECT * FROM news WHERE category='nef' ORDER BY id DESC";
					$news = mysql_query($sql) or die (mysql_error());
					mysql_close();
					while ($raw = mysql_fetch_assoc($news)){
					echo "<a href=\"http://fva.com.ua/showNews.php?id=" . $raw['id'] . "\">" . $raw['title'] . "</a><br><br>";
					}
				?>
			</div>
					
			<div class="clear"></div>
		
		</div>
		
		<?php
			include "footer.inc.php";
		?>
	</body>
</html>