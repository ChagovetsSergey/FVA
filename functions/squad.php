<?php
function showPlayer($pos){
	$sql = "SELECT * FROM nef_squad WHERE pos = '$pos'";
					$result = mysql_query($sql) or die (mysql_error());
					switch ($pos) {
							case "gk":
								echo "<h2>Вратари</h2>";
								break;
							case "df":
								echo "<h2>Защитники</h2>";
								break;
							case "mf":
								echo "<h2>Полузащитники</h2>";
								break;
							case "fw":
								echo "<h2>Нападающие</h2>";
								break;
						}
					echo "<table>";
					while ($raw = mysql_fetch_assoc($result)){
						echo "<tr>";
						echo "<td>" . $raw['num'] . "</td><td width=\"180px\">" . $raw['name'] . " " . $raw['lname'] . "</td><td>" . $raw['date'] . "</td>";
						echo "</tr>";
					}	
					echo "</table>";
}	
?>