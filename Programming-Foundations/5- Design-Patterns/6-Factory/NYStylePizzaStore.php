<?php

require_once 'PizzaStore.php';
require_once 'NYStyleCheesePizza.php';
require_once 'NYStyleVeggiePizza.php';

class NYStylePizzaStore extends PizzaStore
{

    public function createPizza($pizzaType)
    {
        if ($pizzaType == "cheese") {
            return new NYStyleCheesePizza;
        } elseif ($pizzaType == "veggie") {
            return new NYStyleVeggiePizza;
        } else {
            return null;
        }
    }
}
