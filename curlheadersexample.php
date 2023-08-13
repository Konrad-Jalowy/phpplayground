<?php

$ch = curl_init();
// JUST AN EXAMPLE FOR FUTURE REFERENCE - WONT WORK WITHOUT PROPER KEY :)
$headers = [
    "Authorization: Client-ID YOUR_ACCESS_KEY"
];

curl_setopt_array($ch, [
    CURLOPT_URL => "https://api.unsplash.com/photos/random",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers
]);

$response = curl_exec($ch);

$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

curl_close($ch);

echo $status_code, "\n";

echo $response, "\n";