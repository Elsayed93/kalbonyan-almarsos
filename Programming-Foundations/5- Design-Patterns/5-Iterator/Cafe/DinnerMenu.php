<?php

require_once 'MenuIterface.php';
require_once 'DinnerIterator.php';

class DinnerMenu implements MenuIterface
{

    // private $dinnerMenu = [
    //     'dinner1',
    //     'dinner2',
    //     'dinner3',
    // ];

    public function createIterator($dinnerMenu)
    {
        $dinnerIterator = new DinnerIterator($dinnerMenu);
        return $dinnerIterator;
    }
}
