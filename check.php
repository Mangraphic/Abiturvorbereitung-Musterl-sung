<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Prüfen Sie Ihren Euroschein</title>
  </head>
  <body>
    <form action="index.html">
      <input type="submit" value="Zurück">      
    </form>
    <?php
    include "pruefEUR.php";
    $func = new Pruefer;

    $table = "Checked.csv";
    $file = fopen($table,"a",",");

    if (isset($_POST["Pruefnummer"])) {

      if ($func->pruefEUR($_POST["Pruefnummer"]) == 1) {
        echo "Die Prüfnummer " . $_POST["Pruefnummer"] . " ist richtig!"."<br>";
        fputcsv($file,[$_POST["Pruefnummer"],"Correct"]);
      } else {
        echo "Die Prüfnummer " . $_POST["Pruefnummer"] . " ist leider falsch, bedaure."."<br>";
        fputcsv($file,[$_POST["Pruefnummer"],"Incorrect"]);
      }
      fclose($file);
    }
    ?>
  </body>
</html>
