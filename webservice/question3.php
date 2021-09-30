<?php

for ($i = 0; $i < 10; $i++) {
// create & initialize a curl session
    $curl = curl_init();

// set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_URL, "https://geocode.xyz/16 RUE DU BASSIN D AUSTERLITZ+67100+Strasbourg?json=1&auth=101005643693393e15791224x49391");

// return the transfer as a string, also with setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// curl_exec() executes the started curl session
// $output contains the output string
    $output = curl_exec($curl);

    if ($output === false) {
        echo 'Erreur Curl : ' . curl_error($curl);
    }

// close curl resource to free up system resources
// (deletes the variable made by curl_init)
    curl_close($curl);

    $data = json_decode($output, true);

    if (!isset($data["error"])) {
        echo 'Lattitude: ' . $data['latt'] . ', Longitude: ' . $data['longt'];
    } else {
        echo "Limite de 2 requêtes par seconde dépassée";
        ?>
        <pre>
        <?php print_r($data); ?>
    </pre>
        <?php
    }

    sleep(2);
}
