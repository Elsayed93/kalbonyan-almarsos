<?php

require_once 'Beverage.php';
require_once 'CondimentDecorator.php';

class Mocha extends CondimentDecorator
{
    public Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() + " ,Mocha.";
    }

    public function cost()
    {
        return $this->beverage->cost() + .35;
    }
}
