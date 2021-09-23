<?php

require_once 'ShareInterface.php';

class TextShare implements ShareInterface
{
    public function share()
    {
        return 'Text Photo Share';
    }
}
