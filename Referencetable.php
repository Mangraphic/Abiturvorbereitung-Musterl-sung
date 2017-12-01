<!DOCTYPE html>
<html>
<head>
	<title>Referenztabelle</title>
</head>
<body>
    <table border="1">
      <thead><td>Prüfnummer</td><td>Richtig/Falsch</td></thead>
      <?php
      	include "check.php";

		$arr = array(
		        "Nummer" => array(
		        	"N15000723228",
		        	"A56465464654",
		        	"123"
		        ),
		        "Richtig/Falsch" => array(
		        	"Correct",
		        	"Incorrect",
		        	"Incorrect"
		        )
        );
		    $counter = count($arr) + 1;
		    for ($c=0; $c < $counter ; $c++) {
		      echo "<tr><td>".$arr['Nummer'][$c]."</td><td>";
		       if($func->pruefEUR($arr["Nummer"][$c]) == 1) {
		       	echo "Richtig";
		       } else {
		       	echo "Falsch";
		       }
		       echo "</td></tr>";
		    }
      ?>
    </table>
</body>
</html>