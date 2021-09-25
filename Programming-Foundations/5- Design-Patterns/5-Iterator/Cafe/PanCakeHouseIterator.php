<?php


class PanCakeHouseIterator implements IteratorInterface
{
    public $panCakeMenu;
    public $position;

    public function __construct($panCakeMenu)
    {
        $this->panCakeMenu = $panCakeMenu;
    }

    public function hasNext()
    {
        // check if there item in menu
        return isset($this->panCakeMenu[$this->position]);
    }

    public function nextItem()
    {
        $this->position += 1;
    }
}
