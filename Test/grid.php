<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="flex">
    <?
    $amount = $_POST['amount'];
    for ($i=0; $i < $amount; $i++) {
        ?>
        <div class="tile"></div>
        <?
    }
    ?>  
    </div>
    </body>
</html>