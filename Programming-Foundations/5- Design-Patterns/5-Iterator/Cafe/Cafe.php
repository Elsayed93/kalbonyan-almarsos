<?php

require_once 'MenuIterface.php';
require_once 'IteratorInterface.php';

class Cafe
{
    protected MenuIterface $dinnerMenu;
    protected MenuIterface $panCakeMenu;
    protected IteratorInterface $iterator;

    public function __construct(MenuIterface $dinnerMenu, MenuIterface $panCakeMenu)
    {
        $this->dinnerMenu = $dinnerMenu;
        $this->panCakeMenu = $panCakeMenu;
        // $this->iterator = $iterator;
    }

    // print items in the menu
    public function printItems(IteratorInterface $iterator)
    {

        var_dump($iterator->menuItems);
        // var_dump($iterator->panCakeMenu);
        die;

        while ($iterator->hasNext()) {
            return $iterator->nextItem();
        }
    }
}
