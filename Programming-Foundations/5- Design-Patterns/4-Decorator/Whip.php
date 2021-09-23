<?php

require_once 'Beverage.php';
require_once 'CondimentDecorator.php';

class Whip extends CondimentDecorator
{
    public Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription()
    {
        return $this->beverage->getDescription() + " ,Whip.";
    }

    public function cost()
    {
        return $this->beverage->cost() + .75;
    }
}
