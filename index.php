<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ЛР 4</title>
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid;
            text-align: left;
            padding: 5px;
        }
    </style>
</head>
<body>

<?php

$file = fopen('data.csv', 'r');

if ($file !== false) {
    echo '<table>';
    $header = fgetcsv($file);
    echo '<tr>';
    foreach ($header as $col) {
        echo '<th>' . htmlspecialchars($col) . '</th>';
    }
    echo '</tr>';

    while (($row = fgetcsv($file)) !== false) {
        echo '<tr>';
        foreach ($row as $col) {
            echo '<td>' . htmlspecialchars($col) . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';

    fclose($file);
}
?>

</body>
</html>
