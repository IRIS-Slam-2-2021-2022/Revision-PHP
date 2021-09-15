<?php

// create & initialize a curl session
$curl = curl_init();

// set our url with curl_setopt()
curl_setopt($curl, CURLOPT_URL, "https://geocode.xyz/16 RUE DU BASSIN D AUSTERLITZ+67100+Strasbourg?json=1");

// return the transfer as a string, also with setopt()
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

// curl_exec() executes the started curl session
// $output contains the output string
$output = curl_exec($curl);

// close curl resource to free up system resources
// (deletes the variable made by curl_init)
curl_close($curl);

$data = json_decode($output, true);

echo 'Lattitude: ' . $data['latt'] . ', Longitude: ' . $data['longt'];