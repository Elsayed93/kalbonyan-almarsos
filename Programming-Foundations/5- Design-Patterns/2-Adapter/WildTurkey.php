<?php

require_once 'TurkeyInterface.php';

class WildTurkey implements TurkeyInterface
{
    public function globble()
    {
        return 'Wild Turky Globble';
    }

    public function fly()
    {
        return 'Wild Turky Fly';
    }
}
