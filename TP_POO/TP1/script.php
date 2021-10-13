<?php


// On inclus le fichier Point.php pour importer la classe Point
require_once ('./Point.php');
require_once ('./TroisPoints.php');

$p1 = new Point(1, 2);
$p2 = new Point (5, 6);
$p3 = new Point (10, 12);

echo $p1->calculerDistance($p2), PHP_EOL;

echo $p1->calculerMilieu($p2), PHP_EOL;

$p1a = new Point(5, 1);
$p2a = new Point(5, 10);
$p3a = new Point(5, 20);

$troisPoint = new TroisPoints($p1a, $p2a, $p3a);
var_dump($troisPoint->sontAlignes());
