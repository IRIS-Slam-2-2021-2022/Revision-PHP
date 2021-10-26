<?php


// On inclus le fichier Point.php pour importer la classe Point
require_once ('./Point.php');
require_once ('./TroisPoints.php');

$p1 = new Point(1, 2);
$p2 = new Point (5, 6);
$p3 = new Point (10, 12);

echo 'Distance entre $p1 et $p2 : ', $p1->calculerDistance($p2), PHP_EOL;

echo 'Milieu du segment [$p1:$p2] : ', $p1->calculerMilieu($p2), PHP_EOL;

$p1a = new Point(0, 5);
$p2a = new Point(5, 10);
$p3a = new Point(0, 10);

$troisPoint = new TroisPoints($p1a, $p2a, $p3a);
if ($troisPoint->sontAlignes()) {
    echo 'Les trois points sont alignés !', PHP_EOL;
} else {
    echo 'Les trois points ne sont pas alignés !', PHP_EOL;
}

if ($troisPoint->estIsocele()) {
    echo "Le triangle est isocèle", PHP_EOL;
} else {
    echo "Le triangle n'est pas isocèle", PHP_EOL;
}

if ($troisPoint->estEquilateral()) {
    echo 'Le triangle est equilatéral', PHP_EOL;
} else {
    echo 'Le triangle n\'est pas equilatéral', PHP_EOL;
}
