<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://api.hamrobazaar.com/api/Product?PageSize=10&CategoryId=0e1281ce-7c55-4821-be0a-62c566ccd577&IsHBSelect=false&PageNumber=1');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'ApiKey: 09BECB8F84BCB7A1796AB12B98C1FB9E'
));
$response = curl_exec($ch);
curl_close($ch); // Close the connection
echo $response;