<?php

require_once 'DuckInterface.php';
require_once 'MullerDuck.php';

class DuckSimulator
{

    public function testDuck(DuckInterface $duck)
    {
        $duck->quack();
        $duck->fly();
    }
}

$muller = new MullerDuck;

$duck = new DuckSimulator;
var_dump($muller->quack());
var_dump($duck->testDuck($muller));