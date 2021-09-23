<?php

require_once 'classes/Decoy.php';
require_once 'classes/FlyBehavior.php';
require_once 'classes/FlyNoWay.php';
require_once 'classes/FlyWithWings.php';
require_once 'classes/MallerDuck.php';

$canFly = new FlyWithWings;
$canNotFly = new FlyNoWay;

var_dump($canFly);
echo '<hr>';
var_dump($canNotFly);
echo '<hr>';


$decoyDuck = new Decoy;
var_dump($decoyDuck);
echo '<hr>';

$decoyDuck->setFlyBehavior($canNotFly);
var_dump($decoyDuck);
echo '<hr>';

var_dump($decoyDuck->performFly());
echo '<hr>';

$mullarDuck = new MallerDuck;
// $mullarDuck->setFlyBehavior($canNotFly);
var_dump($mullarDuck);
echo '<hr>';

var_dump($mullarDuck->performFly());
var_dump($mullarDuck->performQuack());

// $decoyDuck = new Decoy;
// $decoyDuck->setFly('I can not fly');
// var_dump($decoyDuck->getFly());