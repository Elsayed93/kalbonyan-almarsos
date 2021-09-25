<?php


class DinnerIterator implements IteratorInterface
{

    public $position = 0;
    public $menuItems = [];

    public function __construct($dinnerMenu)
    {
        $this->menuItems = $dinnerMenu; // items here is an array, but it can be any other aggregate object
    }

    public function hasNext()
    {
        return isset($this->menuItems[$this->position]);
    }

    public function nextItem()
    {
        $this->position += 1;
    }
}
