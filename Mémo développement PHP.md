# Mémo développement PHP

## Les Boucles 

```php
$pays = [
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
];
```

## Les Tableaux

#### Initialiser un tableau dans une variable 

```php
// Initialisation d'un tableau vide
$pays = [];

// Initialisation d'un tableau avec des données
// Indéxé par une clef
$pays = [
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
];

// Indéxé par un index entier commençant par 0
$pays = [
    'France',
    'Allemagne',
    'Italie',
];
// Similaire
$pays = [
    0 => 'France',
    1 => 'Allemagne',
    2 => 'Italie',
];
```

#### Obtenir la taille d'un tableau à l'aide de la fonction count();

```php
$pays = [
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
];

// Affiche la taille du tableau
echo count($pays);
// 3
```

#### Parcourir un tableau 

```php
$pays = [
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome',
];

// A l'aide d'un foreach
foreach ($pays as $capital) {
    echo $capital . ' ';
}
// Affiche : Paris Berlin Rome

// OU

foreach ($pays as $nom => $capital) {
    echo $nom . ' => ' . $capital . '<br>';
}
// Affiche :
// France => Paris
// Allemagne => Berlin
// Italie => Rome


```

