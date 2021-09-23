<?php

require_once 'QuackBehavior.php';

class Quack implements QuackBehavior
{
    public function quack()
    {
        return 'quack';
    }
}
