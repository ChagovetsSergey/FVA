<?php
	
	include "config.php";



	$sql = "SELECT * FROM news WHERE category='nef' ORDER BY id DESC LIMIT 1";
			$news = mysql_query($sql) or die (mysql_error());
			$raw = mysql_fetch_assoc($news);
			$neftit = $raw['title'];
			$nefdes = $raw['description'];
			$nefid = $raw['id'];
	
	$sql = "SELECT * FROM news WHERE category='obl' ORDER BY id DESC LIMIT 1";
			$news = mysql_query($sql) or die (mysql_error());
			$raw = mysql_fetch_assoc($news);
			$obltit = $raw['title'];
			$obldes = $raw['description'];
			$oblid = $raw['id'];
	
	$sql = "SELECT * FROM news WHERE category='ray' ORDER BY id DESC LIMIT 1";
			$news = mysql_query($sql) or die (mysql_error());
			$raw = mysql_fetch_assoc($news);
			$raytit = $raw['title'];
			$raydes = $raw['description'];
			$rayid = $raw['id'];

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
		<div id="lastNews">
			<table class="main">
				
				<tr>	
					<td><a href="<?php echo "showNews.php?id=$nefid"; ?>"><img class="main" src="images/news/neftyanik.gif" width="110" height="110" align="left" /></a>					</td>
					<td><p><strong><?=$neftit?></strong></br></br><?=$nefdes?><a href="<?php echo "showNews.php?id=$nefid"; ?>">Читать далее </a></p></td>
				</tr>
				
				<tr>	
					<td><a href="<?php echo "showNews.php?id=$oblid"; ?>"><img class="main" src="images/news/ffs.jpg" width="110" height="110" align="left" /></a></td>
					<td><p><strong><?=$obltit?></strong></br></br><?=$obldes?><a href="<?php echo "showNews.php?id=$oblid"; ?>">Читать далее </a></p></td>
				</tr>
		
				<tr>	
					<td><a href="<?php echo "showNews.php?id=$rayid"; ?>"><img class="main" src="images/news/ffor.jpg" width="110" height="110" align="left" /></a></td>
					<td><p><strong><?=$raytit?></strong></br></br><?=$raydes?><a href="<?php echo "showNews.php?id=$rayid"; ?>">Читать далее </a></p></td>
				</tr>
			
				
			</table>
		</div>
		<div class="poster">
			<h3 class="date">13 сентября<h3>
			<h3>Первая лига. 8 тур<h3><br>
			<h1 class="match">Нефтяник<br>-<br>Буковина</h1>
		</div>
				<br>
		
				<div class="clear"></div>
		</div>
		
		<?php
			include "footer.inc.php";
		?>
	</body>
</html>