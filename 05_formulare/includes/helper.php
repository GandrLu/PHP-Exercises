<?
require_once './includes/functions.php'; // functions.php is bound in

const FILEPATH = './includes/persons.txt'; // persons.txt is set as FILEPATH

if(isset($_POST['sendForm'])) // check if the form is submitted
{
    if(!empty($_POST['fname']) // check if every field is filled in
    && !empty($_POST['lname'])
    && !empty($_POST['url'])
    && !empty($_POST['email']))
{
    $fullname = htmlspecialchars($_POST['fname'] . ' ' . $_POST['lname']); // forename and lastname are combined to fullname
    $website = htmlspecialchars($_POST['url']);// url is given to var website
    $eMail = htmlspecialchars($_POST['email']); // email is given to var email

    $check = [',','<','>'];
    if(validateInput($fullname, $check)
    && validateInput($website, $check)
    && validateInput($eMail, $check))
    {

    switch($_POST['salutation'])
    {                             // switch decides for correct salutation
        case 'male':
        $salutation = 'Herr';
        break;
        case 'female':
        $salutation = 'Frau';
        break;
        default:
        $salutation = '-';
        break;
    }
    $data = $salutation . ',' . $fullname . ',' . $website . ',' . $eMail; // vars are combined to data var

    $file = fopen(FILEPATH, 'a+'); // file var gets the opened FILEPATH and the pointer is set to the last line with read + write (a+)

    fwrite($file, $data.PHP_EOL); // data is written into last line of file, PHP_EOL = End of line

    fclose($file); // file closed
    }
    else
    {
        $error = 'Ihre Eingaben dürfen keine der folgenden Sonderzeichen beinhalten:<br>';
        foreach ($check as $checkValue) {
            $error .= ' ' . $checkValue . ' ';
        }
    }
}
    else // if not all fields are filled in, an error occures
    {
        $error = 'Alle Felder müssen ausgefüllt sein!';
    }
}

$content = []; // content array is initialized
$keys = ['salutation', 'name', 'website', 'email']; // array with key words initialized

$file = fopen(FILEPATH, 'r'); // file var gets opened FILEPATH with read only

while ($line = fgets($file)) { // var line gets lines of data from fgets and the valures are seperated by commas,
                               // if there are no more lines, it gets false
    $content[] = array_combine($keys, explode(',', $line)); // explode seperates the values of line, splitted through commas,
                                                            // and returns them as array. Array_combine returns the values of line
                                                            // in an array with associated index, forwhat keys is used.
                                                            // This returned array is given to content and saved with normal index.
}

fclose($file); // file closed

usort($content, 'sortByName'); // sorts content array by nameshtmlspecialchars()

if(isset($_POST['deleteForm']) && isset($_POST['delete']))
{
    $checkboxes = $_POST['delete'];

    $data = '';

    foreach ($checkboxes as $idx) {
        unset($content[$idx]);
    }

    foreach ($content as $line) {
        $data .= implode(',', $line);
    }

    $file = fopen(FILEPATH, 'w');
    fwrite($file, $data);
    fclose($file);
}
