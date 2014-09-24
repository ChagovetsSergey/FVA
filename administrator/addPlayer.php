<?php
	
	include "../config.php";
	
	function clearData($data){
			return  trim(strip_tags($data));	
}
	
	
	$num = clearData($_POST['num']);
	$pos = clearData($_POST['pos']);
	$name = clearData($_POST['name']);	
	$lname = clearData($_POST['lname']);
	$date = clearData($_POST['date']);



	$sql = "INSERT INTO nef_squad(
							num, pos, name, lname, date)
						VALUES 
							($num, '$pos', '$name', '$lname', '$date')";
	mysql_query($sql) or die(mysql_error());
	header("Location: squad.php");
	

?>