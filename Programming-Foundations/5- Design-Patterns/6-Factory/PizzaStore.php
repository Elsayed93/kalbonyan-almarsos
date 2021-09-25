<?php

abstract class PizzaStore
{
    // abstract creat 
    public abstract function createPizza($pizzaType);

    // order 
    public function order($pizzaType)
    {
        return $pizzaType;
    }
}
