<?php

if($loggedIn)
{
    ob_start();
    {
        switch($page)
        {
            case 'user':
            $title = 'Konto';
            $user = user($_SESSION['user']);
            include (VIEWPATH.'/pages/user.php');
            break;
            case 'page1':
            $title = 'Beispielseite 1';
            include (VIEWPATH.'/pages/page1.php');
            break;
            case 'page2':
            $title = 'Beispielseite 2';
            include (VIEWPATH.'/pages/page2.php');
            break;
            case 'page3':
            $title = 'Beispielseite 3';
            include (VIEWPATH.'/pages/page3.php');
            break;
            default:
            $title = 'Konto';
            include (VIEWPATH.'/pages/user.php');
            break;
        }
        $main = ob_get_contents();
    }
    ob_end_clean();
}

ob_start();
{
    if($loggedIn)
    {
       include (VIEWPATH.'layout.php');
    }
    else
    {
        switch($page)
        {
            case 'register':
                $title = 'Registrieren';
                ob_start();
                {
                    include './core/registerHelper.php';
                    $registerContent = ob_get_contents();
                }
                ob_end_clean();
                include (VIEWPATH.'register.php');
            break;
            default:
                $title = 'Login';
                include (VIEWPATH.'login.php');
            break;
        }
    }
    $body = ob_get_contents();
}
ob_end_clean();
