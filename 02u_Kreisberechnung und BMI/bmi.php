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
// Initialisierung des Körperdaten Array's
$bodydata = array(
    'name' => array('firstname', 'lastname'),
    'height',
    'weight');
// Übergabe der vorher eingegebenen Daten an das Array
    $bodydata['name']['firstname'] = $_POST['firstname'];
    $bodydata['name']['lastname'] = $_POST['lastname'];
    $bodydata['height'] = $_POST['height'];
    $bodydata['weight'] = $_POST['weight'];
// Wiederholte Anzeige des Eingabeformulars, um erneute Eingaben leicht zu ermöglichen
echo '<h3>Bitte Name, Gewicht und Größe eingeben:</h3>';
echo '<form action="bmi.php" method="post">
<input type="text" name="firstname" placeholder="Vorname" required>
<input type="text" name="lastname" placeholder="Nachname" required>
<input type="float" name="height" placeholder="Körpergröße in Metern" required>
<input type="float" name="weight" placeholder="Körpergewicht in kg" required>
<input type="submit" value="Berechnen">
</form>';
// Überprüfung ob Körpergröße korrekt angegeben wurde
if (is_numeric($bodydata['height'])) {
// Berechnung BMI
$bmi = $bodydata['weight'] / ($bodydata['height'] * $bodydata['height']);
echo '<br><br>';
// Ausgabe der Informationen
echo $bodydata['name']['firstname'] . ' ' . $bodydata['name']['lastname'] . ' hat bei einer Körpergröße von ' . 
$bodydata['height'] . ' m und einem Gewicht von ' . $bodydata['weight'] . ' kg einen BMI von: ' . $bmi;
} else {
// Ausgabe Fehlermeldung wenn Körpergröße falsch angegeben wurde
    echo '<h2>Fehler! Wahrscheinlich die Körpergröße falsch eingegeben, Nachkommastellen bitte mit einem Punkt angeben.</h2>';
};
?>
</body>
</html>
