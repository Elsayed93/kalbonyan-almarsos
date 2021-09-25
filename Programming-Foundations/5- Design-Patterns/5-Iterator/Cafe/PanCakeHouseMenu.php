<?php

require_once 'MenuIterface.php';
require_once 'PanCakeHouseIterator.php';

class PanCakeHouseMenu implements MenuIterface
{

    public function createIterator($panCakeMenu)
    {
        $panCakeIterator = new PanCakeHouseIterator($panCakeMenu);
        return $panCakeIterator;
    }
}
