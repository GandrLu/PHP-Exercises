<?php
session_start();


require_once './core/config.php'; 
require_once './core/functions.php'; 

if(isset($_POST['submitLogin']))
{
    $error = true;
    $user = logIn($error);
}
$loggedIn = false;

$title = 'Login';
$page = isset($_GET['p']) ? $_GET['p'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ROOTPATH.'assets/styles/style.css'?>">
    <title><?=$title?></title>
</head>
<body>

    <?
    if($loggedIn)
    {
        include (VIEWPATH.'site.php');
    }
    else
    {
        include (VIEWPATH.'login.php');
    }
    
    ?>

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