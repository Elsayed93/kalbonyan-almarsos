<?php

require_once 'DuckInterface.php';
require_once 'TurkeyInterface.php';

class TurkeyAdapter implements DuckInterface
{

    protected TurkeyInterface $turkeyDuck;

    public function __construct(TurkeyInterface $turkeyDuck)
    {
        $this->turkeyDuck = $turkeyDuck;
    }
    
    public function quack()
    {
        return $this->turkeyDuck->globble();
    }

    public function fly()
    {
        return $this->turkeyDuck->fly();
    }
}
