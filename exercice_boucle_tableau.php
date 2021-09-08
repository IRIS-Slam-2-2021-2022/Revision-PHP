<?php

$m_vehicules = [
    [
        'marque' => 'Peugeot',
        'modele' => '208',
        'vehicule_par_defaut' => false,
    ],
    [
        'marque' => 'Renault',
        'modele' => 'Mégane',
        'vehicule_par_defaut' => false,
    ],
    [
        'marque' => 'Toyota',
        'modele' => 'Yaris',
        'vehicule_par_defaut' => true,
    ],
    [
        'marque' => 'Tesla',
        'modele' => 'Model 3',
        'vehicule_par_defaut' => false,
    ],
];

/**
 * Renvoie le véhicule par défaut du tableau passé en paramètre
 *
 * @param $vehicules
 */
function getVehiculeParDefaut($vehicules) {
    foreach ($vehicules as $v) {
        if ($v['vehicule_par_defaut']) {
            return $v;
        }
    }
}

function displayVehiculeParDefaut($vehicules) {
    $vehicule = getVehiculeParDefaut($vehicules);
    echo $vehicule['marque'];
}

displayVehiculeParDefaut($m_vehicules);

print_r(getVehiculeParDefaut($m_vehicules));