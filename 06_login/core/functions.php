<?

function allUsers()
{
    $dbString = file_get_contents(DATABASE);
    $users = json_decode($dbString, true);
    return $users['users'];
}

function logIn(&$error)
{
    $users = allUsers();
    $userRef = isset($_POST['validationName'])      ?
}