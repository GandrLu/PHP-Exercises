<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BMI Berechnung</title>
</head>
<body>
<!-- Inhaltsverzeichnis-->
<a href="index.php">Kreisberechnung</a>
<a href="start_bmi.php">BMI Berechnung</a>
<?
// Eingabe BMI Daten beim ersten Aufruf der BMI Berechnung. Zum Verhindern von 
// Anzeigefehlern von der eigentlichen Berechnung getrennt.
//
// Aufforderung
echo '<h3>Bitte Name, Gewicht und Größe eingeben:</h3>';
// Eingabeformular
echo '<form action="bmi.php" method="post">
<input type="text" name="firstname" placeholder="Vorname" required>
<input type="text" name="lastname" placeholder="Nachname" required>
<input type="float" name="height" placeholder="Körpergröße in Metern" required>
<input type="float" name="weight" placeholder="Körpergewicht in kg" required>
<input type="submit" value="Berechnen">
</form>';
?>
</body>
</html>
