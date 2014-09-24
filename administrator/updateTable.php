<?php
	include "../config.php";
	require "isLogged.inc.php";
	
	$cat = $_POST['cat'];
	$table = "";
	switch ($cat){
			case 1: 
				$table = "nef_table";
				break;
			case 2: 
				$table = "obl_table";
				break;
			case 3: 
				$table = "rayA_table";
				break;
			case 4: 
				$table = "rayB_table";
				break;
		}

	$g = $_POST['g'];
	$t = $_POST['team'];
	$w = $_POST['w'];
	$d = $_POST['d'];
	$l = $_POST['l'];
	$gs = $_POST['gs'];
	$gp = $_POST['gp'];
	$p = $_POST['p'];

	
	$sql = "UPDATE $table SET g=$g, w=$w, d=$d, l=$l, gs=$gs, gp=$gp, p=$p WHERE team='$t'";
	mysql_query($sql) or die(mysql_error());
	header("Location: http://fva.com.ua/administrator/table.php?cat=$cat");
?>