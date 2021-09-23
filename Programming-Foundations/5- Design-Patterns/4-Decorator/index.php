<?php

require_once 'Beverage.php';
require_once 'Espresso.php';
require_once 'Mocha.php';

$beverage = new Espresso();
var_dump($beverage);

// $condiment = new Mocha($beverage);
// var_dump($condiment);