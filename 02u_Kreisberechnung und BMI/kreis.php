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
<?
// Wiederholte Anzeige des Eingabeformulars, um erneute Eingaben leicht zu ermöglichen
echo '<h3>Bitte Radius eingeben:</h3>';
echo '<form action="kreis.php" method="post">
<input type="float" name="Radius" placeholder="In Metern" required>
<input type="submit" value="Berechnen">
</form>';
// Übergabe des eingegebenen Radius an Variable
$Radius = $_POST['Radius'];
// Berechnung der einzelnen Kreiseigenschaften
$Durchmesser = $Radius * 2;
$Umfang = ($Radius * 2) * M_PI;
$Kreisflaeche = ($Radius * $Radius) * M_PI;
// Ausgabe der Berechnung
echo "<h4>Radius: $Radius m</h4>";
echo "Durchmesser: $Durchmesser m";
echo '<br>';
echo "Umfang: $Umfang m";
echo '<br>';
echo "Kreisfläche: $Kreisflaeche m²";
echo '<br>';
?>  
</body>
</html>
