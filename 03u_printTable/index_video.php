<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Uebung</title>
</head>
<body>
<?
echo '<h4>Schleifen</h4><hr>';

$shoppingList = ['Äpfel', 'Schokolade', '67 Zoll Plasma-TV'];
$shoppingCart = [];
$storeItems = ['67 Zoll LED-TV', 'Birnen', 'Schokolade', 'Stifte', 'Äpfel'];

echo 'Meine Einkaufsliste:<br>';
for ($index = 0; $index < count($shoppingList); ++$index) {
    echo $index < count($shoppingList) - 1 ? $shoppingList[$index] . ', ' : $shoppingList[$index];
}

echo '<br><br>';

for ($index = 0, $length = count($storeItems); $index < $length; ++$index) {
    if (in_array($storeItems[$index], $shoppingList)) {
        $shoppingCart[] = $storeItems[$index];
    }

    if (count($shoppingCart) == count($shoppingList)) {
        break;
    }
}


$notInStore = [];

foreach ($shoppingList as $position => $item) {
    if (!in_array($item, $shoppingCart)) {
        $notInStore[] = ['position' => $position + 1, 'item' => $item];
    }
}

?>
<table border="1">
    <tr>
        <th>Laden</th>
        <th>Einkaufskorb</th>
        <th>Nicht Vorhanden</th>
    </tr>
    <tr>
        <td>
            <ul>
            <? foreach ($storeItems as $item) : ?>

                <li><?=$item?></li>

            <? endforeach; ?>
            </ul>
        </td>
        <td>
            <ul>
            <? foreach($shoppingCart as $item) : ?>

                <li><?=$item?></li>

            <? endforeach; ?>
            </ul>
        </td>
        <td>
            <ul>
            <? foreach ($notInStore as $item) : ?>

                <li>
                <?
                    echo $item['item'].' (Position auf der Liste: '.$item['position'].')';
                    ?>
                    </li>

            <? endforeach; ?>
            </ul>
        </td>
    </tr>
</table>

<br><br>

<?php

// while, do-while und continue;

$counter = 0;
while($counter != 10)
{
    echo ++$counter;

    if($counter >= 7)
    {
        echo '<br>';
        continue;
    }

    echo ', damit ist $counter kleiner als 7<br>';
}

// Globale/Lokale Variablen


$var1 = 'Hier ist der globale Bereich';

function printVar () {
    $var1 = 'Hier ist der lokale Bereich';
    echo $var1;
}

echo '<h4>printVar</h4>';

echo $var1 . '<br>';
printVar();

echo '<hr>';

function testGlobal()
{
    global $var1, $var2;
    $var2 = 'Diese Variable wurde in einer Funktion globalisiert';
}

echo '<h4>testGlobal</h4>';
testGlobal();
echo $var2;

echo '<hr>';

function testGlobal_2()
{
    $var1 = 'Hier ist der lokale Bereich';
    echo $var1 . '<br>';
    echo $GLOBALS['var1'];
}

echo '<h4>testGlobal_2</h4>';
echo '<br><br>';

testGlobal_2();
echo '<hr>';

// Statische Variablen

function testStatic()
{
    $a = 0;
    echo $a.'<br>';
    $a++;
}

function testStatic_2()
{
    static $a = 0;
    echo $a.'<br>';
    $a++;
}

echo '<h4>ohne statische Variable</h4>';
testStatic();
testStatic();
testStatic();
testStatic();
echo '<h4>mit statischer Variable</h4>';
testStatic_2();
testStatic_2();
testStatic_2();
testStatic_2();
echo '<hr>';

// Eigene Funktion mit Parametern

function printTable($content, $rows = 3, $cols = 3, $borderIsVisible = true)
{
    $border = $borderIsVisible ? 'border="1"' : '';
    $html = '<table ' . $border . '>';
    for($row = 0; $row < $rows; ++$row){
        $html .= '<tr>';
        for($col = 0; $col < $cols; ++$col)
        {
            $html .= '<td>';
            $html .= isset($content[$row][$col]) ? $content[$row][$col] : '---';
            $html .= '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
    echo $html;
}

$myArray = array(
    array('Name','Alter','Ort'),
    array('Kristof','???','Erfurt'),
    array('Julian',21,'Weimar'),
    array('Julia',26,'Berlin')
);

echo '<h4>Eigene Funktion printTable</h4>';
printTable($myArray,4,3);
?>
</body>
</html>
