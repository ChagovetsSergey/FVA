<?php
	session_start();
	if ($_SESSION['id'] != session_id()) {
		header("location: http://fva.com.ua/administrator.php");
	}
?>