<?php
	include "config.php";
	include "functions/functions.php";
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
			<h1 align="center">Чемпионат Ахтырского района по футболу 2014</h1></br>
		
			<div id="info">
				
				<table><tr><td width="400px">
					<h2>1-8 места</h2></br>

					
			<?php showTable('rayA_table'); ?>
			</br>
            <h3>10 тур. 28 сентября</h3>            
					<p>Метеор - Лидер</br>
					Ташань - Чупаховка</br>
					Кириковка - Гусынка</br>
					Нива - Куземин</br></br>
					</p>           
			 
        
			</td>

		

			<td>
			<h2>9-16 места</h2></br>
			
			<?php showTable('rayB_table'); ?>

			</br>

			<h3>10 тур. 27 сентября</h3>            
			<p>Зенит - Олимп</br>
			Автомобилист - ФК Метеор</br>
			Вокзал - София</br>
			Луч - Ворскла</br></br>
			</p>

				</td></tr></table>
                        </br>
			</div>
			<div id="news">
				<h2>Лента новостей</h2></br>
				<?php
					$sql = "SELECT * FROM news WHERE category='ray' ORDER BY id DESC";
					$news = mysql_query($sql) or die (mysql_error());
					
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