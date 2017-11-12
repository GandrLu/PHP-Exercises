<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>printTable</title>
</head>
<body>
<?
function printTable($content, $rows = 3, $cols = 3, $borderIsVisible = true)    //Funktion um Tabelle auszugeben.
{
    
    function checkTable($myArray)   // Funktion welche prüft ob das für die Tabelle übergebene Array korrekt geformt ist.
    {
        $allFine=true;
        for ($i=0, $arrayRows=count($myArray), $arrayCols=count($myArray[1]); $i < $arrayRows; $i++) { //   Dimensionen des Arrays werden gespeichert.
            if (count($myArray[$i])==$arrayCols) {  // Es wird geprüft ob alle Zeilen soviele Spalten haben wie die Kopfzeile.
            } else {
                $allFine=false; // Falls nicht, wird $allFine auf false gesetzt, falls ja, bleibt $allFine true.
            }
        }
        return $allFine;    // Funktion gibt zurück ob Array richtig geformt ist (true).
    }

    $allFine=checkTable($content);  // Funktion wird aufgerufen.

    if ($allFine) { // Wenn Funktion checkTable alles als korrekt erkannt hat, wird die Tabelle erstellt und ausgegeben.
        $border = $borderIsVisible ? 'border="1"' : '';
        $html = '<table ' . $border . '>';
        for ($row = 0; $row < $rows; ++$row) {
            $html .= '<tr>';
            for ($col = 0; $col < $cols; ++$col) {
                $html .= '<td>';
                $html .= isset($content[$row][$col]) ? $content[$row][$col] : '---';
                $html .= '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        echo $html;
    } else {    // Falls das Array nicht korrekt geformt ist, wird folgende Fehlermeldung ausgegeben.
        echo '<b>Fehler:</b> Tabelle konnte nicht ausgegeben werden, da die Tabelle nicht ordentlich geformt ist 
    (Zu viele oder zu wenige Spalten in mindestens einer Reihe).';
    }
}

$myArray = array(
    array('Name','Alter','Ort'),
    array('Kristof','???','Erfurt'),
    array('Julian',21,'Weimar'),
    array('Julia',26,'Berlin')
);

echo '<h4>Eigene Funktion printTable</h4>';

printTable($myArray, count($myArray), count($myArray[1]));
?>    
</body>
</html>
