<?php

require_once 'Duck.php';

class Decoy extends Duck
{
    public function display()
    {
        return 'I am a Decoy Duck';
    }
}
