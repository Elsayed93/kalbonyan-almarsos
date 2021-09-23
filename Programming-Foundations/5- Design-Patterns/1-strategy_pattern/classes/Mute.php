<?php

require_once 'QuackBehavior.php';

class Mute implements QuackBehavior
{
    public function quack()
    {
        return 'Mute';
    }
}
