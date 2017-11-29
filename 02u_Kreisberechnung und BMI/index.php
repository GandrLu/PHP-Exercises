<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kreisberechnung</title>
</head>
<body>
<!-- Inhaltsverzeichnis -->
<a href="index.php">Kreisberechnung</a>
<a href="start_bmi.php">BMI Berechnung</a>
<?php
// Eingabe Radius beim ersten Aufruf der Kreisberechung. Zum Verhindern von 
// Anzeigefehlern von der eigentlichen Berechnung getrennt.
//
// Aufforderung
echo '<h3>Bitte Radius eingeben:</h3>';
// Eingabeformular
echo '<form action="kreis.php" method="post">
<input type="float" name="Radius" placeholder="In Metern" required>
<input type="submit" value="Berechnen">
</form>';
?>   
</body>
</html>
