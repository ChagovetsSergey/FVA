<?php
	
	include "../config.php";
	require "isLogged.inc.php";


	if (!empty($_GET['id'])){
		$id = $_GET['id'];
		$sql = "SELECT * FROM news WHERE id='$id'";
		$result = mysql_query($sql) or die(mysql_error());
		$item = mysql_fetch_assoc($result);
		$title = $item['title'];
		$description = $item['description'];
		$content = $item['content'];
	}

if (!empty($_POST['id'])){
	$title = $_POST['title'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$id = $_POST['id'];
	$sql = "UPDATE news SET title='$title', description='$description', content='$content' WHERE id=$id";
	mysql_query($sql) or die(mysql_error());
	header("Location: http://fva.com.ua/administrator/editNews.php");
}
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
			
			<h1>Редактировать новость</h1>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		<input type="hidden" name="id" value="<?php echo $id ?>"/>
		Название:<br />
		<input type="text" name="title" value="<?php echo $title ?>"/><br />
		Описание:<br />
		<textarea name="description" cols="50" rows="3"><?php echo $description ?></textarea><br />
		Контент:<br />
		<textarea name="content" cols="100" rows="20" ><?php echo $content ?></textarea><br />
		<br />
		<input type="submit" value="Изменить!" />

		</form>
		
		</div>

	</body>
</html>