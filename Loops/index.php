<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loops</title>
</head>
<body>
<?php
// Function for finding the least common multiple for a range of two numbers (from $start number to $end number).
function lcmRange($start, $end){
    // Setting the largest number as first value to be checked if it's the multiple of all numbers in the range.
    $checkThis = $end;
    // Infinite loop until a result is found.
    while (true)
    //for loop which runs through the whole range.
    for ($i = $end; $i >= $start; $i--){
        // The to be checked value is divided by the actual number of the range and if its an integer,
        // the for loop counts one down and the next number will be checked.
        if (is_int($checkThis/$i)){
            // If its not an integer, the to be checked value will be increased by one, the for loop starts again with the largest number.
        }else{
            $checkThis++;
            break;
        }
        // When all numbers of the range have the to be checked value as multiple, this value will be returned by the function.
        if ($i==$start){
        return $checkThis;
        }        
    }
}
// The found increasement will be printed through calling the function.
echo lcmRange(1,20);
?>
</body>
</html>