<?php

$dir = 'conversion';
$files = glob("{$dir}/*.json");

foreach ($files as $file) {
    $json = file_get_contents($file);
    $data = json_decode($json, true);

    // Get the name of the JSON file
    $filename = basename($file, '.json');

    // Create a new CSV file with the same name as the JSON file
    $csv = fopen("{$dir}/{$filename}.csv", 'w');

    // Write the header line
    fputcsv($csv, ["Highlight", "Title", "Author", "URL", "Note", "Location", "Date"]);

    // Write the data rows
    foreach ($data['entries'] as $entry) {
        $row = [$entry['text'], $data['title'], $data['author'], "", "", $entry['page'], date('Y-m-d H:i', $entry['time'])];
        fputcsv($csv, $row);
    }

    fclose($csv);
}
