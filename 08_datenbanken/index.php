<?php

require_once 'config/init.php';
require_once 'config/database.php';

foreach(glob('models/*.php') as $modelclass)
{
    require_once $modelclass;
}

$newBikes = new Bike('name');
$newBikeTypes = new BikeType('name');
$newCustomers = new Customer('id');

$bikes = [];
$bikeTypes = [];
$customers = [];
$pickedTable = isset($_POST['pick']) ? $_POST['pick'] : null;

$bikeTypes = $newBikeTypes->find('1');
$customers = $newCustomers->find('1');

$bikes ['name'] = isset($_POST['name'])          ?   $_POST['name']  :   '';
$bikes ['type'] = isset($_POST['bikeType'])      ?   $_POST['bikeType']  :   '';
$bikes ['customer'] = isset($_POST['customer'])      ?   $_POST['customer']  :   '';

foreach ($bikes as $key => $value) {
$newBikes->__set($key, $value);
}
$newBikes->save();

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

    <? if(!empty($errors) && $errors !== false) : ?>
        <div class="error">
            <span onclick="{this.parentNode.parentNode.removeChild(this.parentNode);}">
                x
            </span>
            <? foreach($errors as $error) : ?>
                <?=$error?> 
                <br>
            <? endforeach; ?>
        </div>
    <? endif; ?>

</body>
</html>