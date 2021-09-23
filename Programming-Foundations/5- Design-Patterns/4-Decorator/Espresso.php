<?php

require_once 'Beverage.php';

class Espresso extends Beverage
{

    public function __construct()
    {
        $this->description = 'Espresso Coffee';
    }

    public function cost()
    {
        return 2.5;
    }
}
