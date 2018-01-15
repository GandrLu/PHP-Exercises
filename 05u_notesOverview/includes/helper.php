<?
require_once './includes/functions.php'; // functions.php is bound in

const FILEPATH = './includes/marks.txt'; // marks.txt is set as FILEPATH

if(isset($_POST['sendForm'])) // check if the form is submitted
{
    if(!empty($_POST['ename']) // check if every field is filled in
    && !empty($_POST['edate'])
    && !empty($_POST['emark'])
    && !empty($_POST['attempt']))
{
    $examName = htmlspecialchars($_POST['ename']); // forename and lastname are combined to examName
    $examDate = htmlspecialchars($_POST['edate']);// emark is given to var examMark
    $examMark = htmlspecialchars($_POST['emark']);// emark is given to var examMark    
    $attempt = htmlspecialchars($_POST['attempt']); // attempt is given to var attempt

    $check = [',','<','>'];
    if(validateInput($examName, $check)
    && validateInput($examDate, $check)
    && validateInput($examMark, $check)
    && validateInput($attempt, $check))
    {

    $data = $examName . ',' . $examDate . ',' . $examMark . ',' . $attempt; // vars are combined to data var

    $file = fopen(FILEPATH, 'a+'); // file var gets the opened FILEPATH and the pointer is set to the last line with read + write (a+)

    fwrite($file, $data.PHP_EOL); // data is written into last line of file, PHP_EOL = End of line

    fclose($file); // file closed
    }
    else
    {
        $error = 'Your entries are not allowed to have one of these symbols:<br>';
        foreach ($check as $checkValue) {
            $error .= ' ' . $checkValue . ' ';
        }
    }
}
    else // if not all fields are filled in, an error occures
    {
        $error = 'All fields have to be filled!';
    }
}

$content = []; // content array is initialized
$keys = ['name', 'date', 'mark', 'attempt']; // array with key words initialized

$file = fopen(FILEPATH, 'r'); // file var gets opened FILEPATH with read only

while ($line = fgets($file)) { // var line gets lines of data from fgets and the valures are seperated by commas,
                               // if there are no more lines, it gets false
    $content[] = array_combine($keys, explode(',', $line)); // explode seperates the values of line, splitted through commas,
                                                            // and returns them as array. Array_combine returns the values of line
                                                            // in an array with associated index, forwhat keys is used.
                                                            // This returned array is given to content and saved with normal index.
}

fclose($file); // file closed
