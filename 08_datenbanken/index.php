<?php

require_once 'config/init.php';
require_once 'database.php';

foreach(glob('models/*.php') as $modelclass)
{
    require_once $modelclass;
}

$bikes = [];
$bikeTypes = [];
$customers = [];
$pickedTable = isset($_POST['pick']) ? $_POST['pick'] : null;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/styles/style.css">
    <title>PHP und Datenbanken</title>
</head>
<body>
    
    <div class="left">
        <?
            include_once VIEWPATH.'addBike.php';
            include_once VIEWPATH.'addCustomer.php';
        ?>
    </div>
    <div class="right">
        <?
            include_once VIEWPATH.'tables.php';
        ?>
    </div>

    <? if(isset($error) && $error !== false) : ?>
        <div class="error">
            <span onclick="{this.parentNode.parentNode.removeChild(this.parentNode);}">
                x
            </span>
            <?=$error?>
        </div>
    <? endif; ?>

</body>
</html>