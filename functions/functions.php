<?php

include_once "config.php";

function showTable($tournament){

			
echo <<<EOT
<h2>��������� �������</h2>
			<table class="grid" cellspacing="0">
				<tr>
    					<th width=20px>�</th>
        				<th width=100px>�������</th>
        				<th width=25px>�</th>
        				<th width=25px>�</th>
        				<th width=25px>�</th>
        				<th width=25px>�</th>
        				<th width=50px>�</th>
        				<th width=25px>�</th>
    				</tr>
EOT;
	
		
			$sql = "SELECT * FROM $tournament order by p desc";
			$table = mysql_query($sql) or die (mysql_error());
			
			$i = 0;
			while ($raw = mysql_fetch_assoc($table)){
			$i++;
			$id = $raw['id'];
			$team = $raw['team'];
			$g = $raw['g'];
			$w = $raw['w'];
			$d = $raw['d'];
			$l = $raw['l'];
			$gs = $raw['gs'];
			$gp = $raw['gp'];
			$p = $raw['p'];
				
				echo "<tr><td>$i</td><td>$team</td><td>$g</td><td>$w</td><td>$d</td><td>$l</td><td>$gs-$gp</td><td>$p</td></tr>";
			
			}
			
		
	
			echo "</table>";
}