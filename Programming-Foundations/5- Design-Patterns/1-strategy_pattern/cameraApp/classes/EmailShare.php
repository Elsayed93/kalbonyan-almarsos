<?php

require_once 'ShareInterface.php';

class EmailShare implements ShareInterface
{
    public function share()
    {
        return 'Email Photo Share';
    }
}
