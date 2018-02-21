<?php

if(!defined('INTERNAL_CODE')) die('Nope! Hier gibts nichts zu sehen.');

function allUsers()
{
    return json_decode(file_get_contents(DATABASE),true);
}

function user($id)
{
    $users = allUsers();
    return isset($users[$id]) ? $users[$id] : false;
}

function logIn(&$error, $rememberMe = false)
{
    $users    = allUsers();
    $username = isset($_POST['validationName']) ? $_POST['validationName'] : '';
    $password = isset($_POST['validationPassword']) ? $_POST['validationPassword'] : '';

    if($rememberMe === true && empty($_POST['validationName']) && empty($_POST['validationPassword']))
    {
        $userId   = $_COOKIE['userId'];
        $password = $_COOKIE['password'];
    }
    else
    {
        foreach($users as $id => $userData)
        {
            if($userData['email'] === $username || $userData['username'] === $username)
            {
                $userId = $id;
                break;
            }
        }
    }
    

    if(isset($userId))
    {
        if($users[$userId]['password'] === $password)
        {
            $error = false;

            if(isset($_POST['rememberMe']))
            {
                rememberMe($userId, $users[$userId]['password']);
            }
            // vorzeitiges beenden der Funktion
            return $userId;
        }
        else
        {
            $error = 'Ihr Passwort ist falsch!';
        }
    }
    else
    {
        $error = 'Diesen Nutzer gibt es nicht.<br>Überprüfen Sie den Benutzernamen bzw. die E-Mail-Adresse!';
    }

    return false;
}

function rememberMe($id, $password)
{
    echo 'remember me';
    $duration = time() + 3600 * 24 * 30;
    setcookie('userId', $id, $duration,'/');
    setcookie('password', $password, $duration,'/');
}

function logOut()
{
    setcookie('userId', '', -1,'/');
    setcookie('password', '', -1,'/');
    unset($_SESSION['user']);
    session_destroy();
}

function updateData(&$error)
{
    $users = allUsers();
    $user  = &$users[$_SESSION['user']];
    $user['firstName'] = $_POST['fname'];
    $user['lastName']  = $_POST['lname'];
    $user['email']     = $_POST['email'];
    $user['username']  = $_POST['username'];
    if(isset($_POST['changePassword']))
    {
        if(strlen($_POST['newPassword']) >= 6 )
        {
            $user['password'] = $_POST['newPassword'];
        }
        else
        {
            $error = 'Das Passwort muss mindestens 6 Zeichen enthalten';
        }
    }
    file_put_contents(DATABASE,json_encode($users)); 
}

function addNewUser()
{
    if(isset($_SESSION['newUser']))
    {
        $allUsers = allUsers();

        end($allUsers);

        $lastKey = key($allUsers);

        $newLast = "000" . (string)((int)$lastKey + 1);

        $newUserKey = substr($newLast,strlen($newLast) - 4,4);
   
        foreach($_SESSION['newUser'] as $key => $userData)
        {
            echo $key;
            $allUsers[$newUserKey][$key] = $userData;
        }
        file_put_contents(DATABASE,json_encode($allUsers)); 
    }
}