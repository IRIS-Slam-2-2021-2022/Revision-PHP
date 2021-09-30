<?php

function replaceSpaceWithPlus($string) {
    return str_replace(' ', '+', $string);
}

// 1) Initialiser la BDD

$db = new PDO('mysql:host=db;dbname=employee', 'root', 'root');

// 2) Faire une requete sur la table `locations`

$stmt = $db->prepare('SELECT * FROM locations');
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 3) Parcours des résultats à l'aide d'un foreach

foreach ($results as $result) {
    // 4) On concatène les informations de l'adresse dans une variable
    $param = replaceSpaceWithPlus($result['street_address']) . '+' .
        replaceSpaceWithPlus($result['postal_code']) . '+' .
        replaceSpaceWithPlus($result['city']);

    // 5) Initialiser CURL avec les bons paramètres et l'url construite à partir des infos de 4)
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://geocode.xyz/$param?json=1&auth=101005643693393e15791224x49391");

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

    // 6) On fait l'appel webservice
    $output = curl_exec($curl);

    if ($output === false) {
        echo 'Erreur Curl : ' . curl_error($curl);
    }

    curl_close($curl);

    $data = json_decode($output, true);

    if (!isset($data["error"])) {
        // 7) On met à jour la ligne courante avec la lattitude et la longitude en BDD

        $sql = "UPDATE locations SET lat = :lat, lng = :lng WHERE location_id = :location_id";
        $updStmt = $db->prepare($sql);
        $updStmt->bindValue('lat', $data['latt']);
        $updStmt->bindValue('lng', $data['longt']);
        $updStmt->bindValue('location_id', $result['location_id']);

        $updStmt->execute();

        echo 'Lattitude: ' . $data['latt'] . ', Longitude: ' . $data['longt'];
    } else {
        print_r($data) . PHP_EOL;
    }

    sleep(rand(1, 10));
}

