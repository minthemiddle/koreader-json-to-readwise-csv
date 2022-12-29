<?php

$dir = 'conversion';
$files = glob("{$dir}/*.json");

if (! empty($files)) {
    $json = file_get_contents($files[0]);
    // Process the JSON data
}

$data = json_decode($json, true);

$csv = fopen("{$dir}/output.csv", 'w');

// Write the header line
// fputcsv($csv, ['author', 'title', 'text', 'time']);
fputcsv($csv, ["Highlight", "Title", "Author", "URL", "Note", "Location", "Date"]);

// Write the data rows
foreach ($data['entries'] as $entry) {
    $row = [$entry['text'], $data['title'], $data['author'], "", "", $entry['page'], date('Y-m-d H:i', $entry['time'])];
    fputcsv($csv, $row);
}

fclose($csv);
