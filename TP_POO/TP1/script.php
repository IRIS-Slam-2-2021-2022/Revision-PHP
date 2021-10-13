<?php


// On inclus le fichier Point.php pour importer la classe Point
require_once ('./Point.php');
require_once ('./TroisPoints.php');

$p1 = new Point(1, 2);
$p2 = new Point (5, 6);
$p3 = new Point (10, 12);

$p3->

echo $p1->calculerDistance($p2), PHP_EOL;

echo $p1->calculerMilieu($p2), PHP_EOL;


$troisPoint = new TroisPoints($p1, $p2, $p3);
