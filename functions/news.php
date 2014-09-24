<?php
function showLastNews($cat){
	$sql = "SELECT * FROM news WHERE category='$cat' ORDER BY id DESC LIMIT 1";
			$news = mysql_query($sql) or die (mysql_error());
			$raw = mysql_fetch_assoc($news);
			$result = array('title' => $raw['title'],
					   'desc' => $raw['description'],
					   'id' => $raw['id'],);
			return $result;
	
}
?>