<?php

require_once 'FlyBehavior.php';

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        return "can't fly";
    }
}
