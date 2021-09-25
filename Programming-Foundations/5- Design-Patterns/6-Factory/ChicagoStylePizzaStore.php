<?php

require_once 'PizzaStore.php';
require_once 'ChicagoStyleCheesePizza.php';
require_once 'ChicagoStyleVeggiePizza.php';

class ChicagoStylePizzaStore extends PizzaStore{

    public function createPizza($pizzaType)
    {
        if ($pizzaType == "cheese") {
            return new ChicagoStyleCheesePizza;
        } elseif ($pizzaType == "veggie") {
            return new ChicagoStyleVeggiePizza;
        } else {
            return null;
        }
    }
}