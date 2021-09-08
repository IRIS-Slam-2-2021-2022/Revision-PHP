<?php

// Exercice 1

$i = 7700;

while ($i < 7800) {
    echo $i . ' ';
    $i++;
}

// Exercice 2

for ($line = 1; $line <= 5; $line++)
{
    for ($column = 0; $column < $line; $column++) {
        echo $column;
    }

    echo '<br>';
}

// Exercice 3
for ($i = 0; $i <= 20; $i = $i + 2) {
    if ($i === 10) {
        echo '<strong>' . $i . '</strong><br>';
    } else {
        echo $i . '<br>';
    }
}