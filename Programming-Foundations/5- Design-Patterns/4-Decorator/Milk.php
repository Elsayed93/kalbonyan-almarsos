<?php

require_once 'CondimentDecorator.php';
require_once 'Beverage.php';

class Milk extends CondimentDecorator
{
    public Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() + " ,Milk.";
    }

    public function cost()
    {
        return $this->beverage->cost() + .25;
    }
}
