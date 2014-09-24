<?php
	
	include "config.php";
	include "functions/news.php";

	$nef = showLastNews('nef');
	$obl = showLastNews('obl');
	$ray = showLastNews('ray');

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
					<td><p><strong><?=$nef['title']?></strong></br></br><?=$nef['desc']?><a href="<?php echo "showNews.php?id={$nef['id']}"; ?>">Читать далее </a></p></td>
				</tr>
				
				<tr>	
					<td><a href="<?php echo "showNews.php?id=$oblid"; ?>"><img class="main" src="images/news/ffs.jpg" width="110" height="110" align="left" /></a></td>
					<td><p><strong><?=$obl['title']?></strong></br></br><?=$obl['desc']?><a href="<?php echo "showNews.php?id={$obl['id']}"; ?>">Читать далее </a></p></td>
				</tr>
		
				<tr>	
					<td><a href="<?php echo "showNews.php?id=$rayid"; ?>"><img class="main" src="images/news/ffor.jpg" width="110" height="110" align="left" /></a></td>
					<td><p><strong><?=$ray['title']?></strong></br></br><?=$ray['desc']?><a href="<?php echo "showNews.php?id={$ray['id']}"; ?>">Читать далее </a></p></td>
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