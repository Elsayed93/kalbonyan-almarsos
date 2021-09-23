<?php

require_once 'FlyBehavior.php';
require_once 'QuackBehavior.php';

abstract class Duck
{

    private FlyBehavior $flyBehavior;  // Duck has a FlyBehavior >>> Has A relationship
    private QuackBehavior $quackBehavior; // Duck has a QuackBehavior >>> Has A relationship


    // setter for FlyBehavior and QuackBehavior
    public function setFlyBehavior(FlyBehavior $fly)
    {
        $this->flyBehavior = $fly;
    }

    public function setQuackBehavior(Quack $quack)
    {
        $this->quackBehavior = $quack;
    }

    //quack 
    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    // fly 
    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    // swim 
    public function swim()
    {
        return 'I can swim';
    }

    // abstract display
    public abstract function display();
}
