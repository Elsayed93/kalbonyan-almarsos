<?php

/**
 * Iterator interface
 * 
 * has hasNext() and next() methods
 */

interface IteratorInterface
{
    public function hasNext();
    public function nextItem();
}
