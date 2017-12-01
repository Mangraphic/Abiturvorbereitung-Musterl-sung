<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Geprüfte Nummern</title>
</head>
<body>
	<form action="index.html">
      <input type="submit" value="Zurück">      
    </form>
    
	<table border="1">
		<thead>
			<td>Nummer</td>
			<td>Richtig/Falsch</td>
		</thead>
			<?php
				$f = fopen("Checked.csv", "r");
				while (($line = fgetcsv($f)) !== false) {
				        echo "<tr>";
				        foreach ($line as $cell) {
				                echo "<td>$cell</td>";
				        }
		        echo "</tr>\n";
				}
				fclose($f);
			 ?>
	</table>
</body>
</html>