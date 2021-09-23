<?php

require_once 'DuckInterface.php';

class MullerDuck implements DuckInterface
{
    public function quack()
    {
        return 'Muller Duck quack';
    }

    public function fly()
    {
        return 'Muller Duck fly';
    }
}
