<?php

$array = [
    'rouge',
    'bleu',
    'jaune',
    'vert',
    'violet',
];

for ($i = 0; $i < count($array); $i++)
{
    $item1 = $array[$i];
    echo $item1 . '<br>';
}

echo '<br><br>';
foreach ($array as $item2) {
    echo $item2 . '<br>';
}


echo '<br><br>';
$j = 0;
while ($j < count($array)) {
    $item3 = $array[$j];
    echo $item3 . '<br>';
    $j++;
}
