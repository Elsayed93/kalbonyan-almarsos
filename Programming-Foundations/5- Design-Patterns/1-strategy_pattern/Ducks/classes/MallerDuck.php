<?php

require_once 'Duck.php';
require_once 'FlyWithWings.php';
require_once 'Quack.php';

class MallerDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings;
        $this->quackBehavior = new Quack;
    }
    
    public  function display()
    {
        return 'I am a Maller Duck';
    }
}
