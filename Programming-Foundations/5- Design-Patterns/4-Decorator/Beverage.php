<?php

abstract class Beverage
{
    // desc
    public string $description = 'Unknown Beverage';

    //getter for description
    public function getDescription()
    {
        return $this->description;
    }

    // abstract cost 
    public abstract function cost();
}
