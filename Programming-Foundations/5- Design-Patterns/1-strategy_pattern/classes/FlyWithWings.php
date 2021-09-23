<?php

require_once 'FlyBehavior.php';

class FlyWithWings implements FlyBehavior
{
    public function fly()
    {
        return 'fly';
    }
}
