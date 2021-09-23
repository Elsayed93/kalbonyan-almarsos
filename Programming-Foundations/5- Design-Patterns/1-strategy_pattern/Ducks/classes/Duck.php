<?php

require_once 'FlyBehavior.php';
require_once 'QuackBehavior.php';

abstract class Duck
{

    protected FlyBehavior $flyBehavior;  // Duck has a FlyBehavior >>> Has A relationship
    protected QuackBehavior $quackBehavior; // Duck has a QuackBehavior >>> Has A relationship

    // setter for FlyBehavior
    public function setFlyBehavior(FlyBehavior $fly)
    {
        $this->flyBehavior = $fly;
    }

    // fly 
    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    // setter for QuackBehavior
    public function setQuackBehavior(Quack $quack)
    {
        $this->quackBehavior = $quack;
    }

    //quack 
    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    // swim 
    public function swim()
    {
        return 'I can swim';
    }

    // abstract display
    public abstract function display();
}
