<?php

declare(strict_types=1);

class Stack
{
    // 
    public array $myStack = [];


    // push 
    public function push(string $item)
    {
                    array_push($this->myStack, $item);
                  
    }

    // pop
    public function pop(): ?string
    {
        if ($this->myStack) {
            $popedElement = array_pop($this->myStack);
            return $popedElement;
        } else {
            return null; // stack is empty
        }
    }

    // peek
    public function peek(): ?string
    {
        if ($this->myStack) {
            // return the last item
            $lastElement = $this->myStack[count($this->myStack) - 1];
            return $lastElement;
        } else {
            return null;
        }
    }
}

$stack1 = new Stack;

var_dump($stack1);
echo '<hr>';

$stack1->push('first');
var_dump($stack1);
echo '<hr>';

$stack1->push('second');
var_dump($stack1);
echo '<hr>';

var_dump("the last Item: {$stack1->peek()}");
echo '<hr>';

var_dump($stack1->pop());
echo '<hr>';
var_dump($stack1);
echo '<hr>';
var_dump($stack1->peek());
echo '<hr>';


var_dump($stack1->pop());
echo '<hr>';
var_dump($stack1);
echo '<hr>';
var_dump($stack1->peek());