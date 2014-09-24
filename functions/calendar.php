<?php
function showLastTour(){
	$sql = "SELECT * FROM nef_calendar WHERE score != '' ORDER BY id DESC LIMIT 8";
					$result = mysql_query($sql) or die (mysql_error());
					
					while ($raw = mysql_fetch_assoc($result)){
						if (!$t){
							$t = $raw['tour'];	
						}						
						if ($raw['tour'] == $t) {
							echo "<br><h2>$t тур</h2>";
							$t++;
						}
					echo $raw['game'] . " - " . $raw['score'] . "<br>";	
					}	
}

function showNextTour(){
	$sql = "SELECT * FROM nef_calendar WHERE score = '' ORDER BY id LIMIT 8";
					$result = mysql_query($sql) or die (mysql_error());
					
					while ($raw = mysql_fetch_assoc($result)){
						if (!$t){
							$t = $raw['tour'];	
						}						
						if ($raw['tour'] == $t) {
							echo "<br><h2>$t тур</h2>";
							$t++;
						}
					echo $raw['game'] . "<br>";	
					}	
}
?>