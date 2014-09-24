<?php
	
	include "../config.php";
	require "isLogged.inc.php";
	
	function clearData($data){
			return  trim(strip_tags($data));	
}
	
	if(!empty($_POST['category']) and !empty($_POST['title']) and !empty($_POST['description']) and !empty($_POST['content'])){
	$cat = clearData($_POST['category']);
	$tit = clearData($_POST['title']);
	$desc = clearData($_POST['description']);	
	$cont = $_POST['content'];
	$sql = "INSERT INTO news(
							category, title, description, content)
						VALUES 
							('$cat', '$tit', '$desc', '$cont')";
	mysql_query($sql) or die(mysql_error());
	//header("Location: index.php");
	//exit;
} 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="cp1251">
		<title>Футбол в Ахтырке</title>
		<link rel="stylesheet" href="http://localhost/fva.com.ua/style.css">
	</head>
	<body>
	
		<?php  
			include "adminMenu.inc.php";
		?>
	
		<div id="content">
			
			<h1>Добавить новость</h1>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		Категория:<br />
		<select name="category" size="1">
			<option value="other">Выберите категорию</option>
			<option value="nef">Нефтяник</option>
			<option value="obl">Область</option>
			<option value="ray">Район</option>
		</select><br />
		Название:<br />
		<input type="text" name="title" /><br />
		Описание:<br />
		<textarea name="description" cols="50" rows="3"></textarea><br />
		Контент:<br />
		<textarea name="content" cols="50" rows="20"></textarea><br />
		<br />
		<input type="submit" value="Добавить!" />

		</form>
		
		</div>

	</body>
</html>