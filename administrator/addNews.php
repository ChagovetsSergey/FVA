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
		<title>������ � �������</title>
		<link rel="stylesheet" href="http://localhost/fva.com.ua/style.css">
	</head>
	<body>
	
		<?php  
			include "adminMenu.inc.php";
		?>
	
		<div id="content">
			
			<h1>�������� �������</h1>
		
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

		���������:<br />
		<select name="category" size="1">
			<option value="other">�������� ���������</option>
			<option value="nef">��������</option>
			<option value="obl">�������</option>
			<option value="ray">�����</option>
		</select><br />
		��������:<br />
		<input type="text" name="title" /><br />
		��������:<br />
		<textarea name="description" cols="50" rows="3"></textarea><br />
		�������:<br />
		<textarea name="content" cols="50" rows="20"></textarea><br />
		<br />
		<input type="submit" value="��������!" />

		</form>
		
		</div>

	</body>
</html>