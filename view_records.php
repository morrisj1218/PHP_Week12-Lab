<?php
//  --------------
// -- Programmer:   Jack Morris
// -- Course:       ITSE-1306 (Intro to PHP)
// -- Instructor:   Cesar "Coach" Marrero
// -- Assignment:   Week12-Lab
// -- Description:  This script reads data from records.csv and displays the data in a HTML table
// ---------------

ini_set('auto_detect_line_endings', 1);

$file = 'records.csv';
$file_handler = fopen($file, 'rb');

print '<table>
    <tr><th>Last Name</th>
        <th>First Name</th>
        <th>Salary</th></tr>';

while ($line = fgetcsv($file_handler, 200)) {
    print '<tr>';
    foreach ($line as $item) {
        print '<td>' . $item . '</td>';
    }
    print '</tr>';
}

fclose($file_handler);
?>
