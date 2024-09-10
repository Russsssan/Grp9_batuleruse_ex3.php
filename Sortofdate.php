<?php
$filename = 'dates.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Read the content of the file into an array
    $datesArray = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Sort the array of dates
    sort($datesArray);

    // Save the sorted dates back to the file
    file_put_contents($filename, implode(PHP_EOL, $datesArray));

    echo "Dates have been sorted and saved to the file successfully.";
} else {
    echo "File does not exist.";
}
?>
