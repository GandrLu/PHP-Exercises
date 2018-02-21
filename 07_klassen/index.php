<?php

foreach(glob('core/*.php') as $coreclass)
{
    require_once $coreclass;
}
foreach(glob('models/*.php') as $modelclass)
{
    require_once $modelclass;
}

use \fhe\models\Cat;
use \fhe\models\Creature as Animal;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klassen</title>
</head>
<body>

    <?
        $luzius = new \fhe\models\Human('Luzius', 'Kölling', 'male');
        $luziusCat = new Cat('female');
        $creature = new Animal();
    ?>
    <?=$luzius->speak();?>
    <hr>
    <?=$luziusCat->speak();?>
    <hr>
    <?=$creature->speak();?>

</body>
</html>