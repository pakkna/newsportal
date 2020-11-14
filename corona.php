<?php


$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, 'https://corona-bd.herokuapp.com/stats');
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

$phoneList = curl_exec($cURLConnection);
curl_close($cURLConnection);

file_put_contents('corona.json', $phoneList);
