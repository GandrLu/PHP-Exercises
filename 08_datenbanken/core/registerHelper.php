<?php

    if(isset($_POST['submitFirst']))
    {
        $fname = $_POST['newUserFname'];
        $lname = $_POST['newUserLname'];
        $email = $_POST['newUserEmail'];

        $_SESSION['newUser']['firstName'] = $fname;
        $_SESSION['newUser']['lastName']  = $lname;
        $_SESSION['newUser']['email']     = $email;

        if(!empty($fname) && !empty($lname) && !empty($email))
        {
            include VIEWPATH . 'registerPages/second.php';
        }
        else
        {
            $_SESSION['registerError'] = 'Bitte füllen Sie alle Felder aus!';
            include VIEWPATH . 'registerPages/first.php';
        }
    }
    else if (isset($_POST['submitSecondNext']))
    {
        $username = $_POST['newUserUsername'];
        $pw       = $_POST['newUserPassword'];
        $pwCheck  = $_POST['newUserPasswordCheck'];

        $_SESSION['newUser']['username'] = $username;
        if(!empty($username) && !empty($pw) && !empty($pwCheck))
        {
            if($pw === $pwCheck)
            {
                $_SESSION['newUser']['password'] = $pw;
                include VIEWPATH . 'registerPages/check.php';
            }
            else
            {
                $_SESSION['registerError'] = 'Die Passwörter stimmen nicht überein';
                include VIEWPATH . 'registerPages/second.php';
            }
        }
        else
        {
            $_SESSION['registerError'] = 'Bitte füllen Sie alle Felder aus!';
            include VIEWPATH . 'registerPages/second.php';
        }
    }
    else if (isset($_POST['submitSecondPrev']))
    {
        $username = $_POST['newUserUsername'];

        $_SESSION['newUser']['username'] = $username;
        
        include VIEWPATH . 'registerPages/first.php';
    
    }
    else if(isset($_POST['submitRegisterComplete']))
    {
        addNewUser();
    }
    else
    {
        include VIEWPATH . 'registerPages/first.php';
    }

// else
// {
//     header('Location: ' . INDEXPATH . 'index.php');
// }
