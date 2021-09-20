<?php

declare(strict_types=1);

class Queue
{
    public array $queueArray = [];

    // enqueue 
    public function enqueue(string $item)
    {
        array_push($this->queueArray, $item);
    }

    // dequeue from the beginning
    public function dequeue()
    {
        return array_shift($this->queueArray);
    }

    // peek
    public function peek()
    {
        if ($this->queueArray) {
            return $this->queueArray[0];
        } else {
            return null;
        }
    }
}

$myQueue = new Queue;
var_dump($myQueue);
echo '<hr>';
$myQueue->enqueue("first item");

var_dump($myQueue);
echo '<hr>';

$myQueue->enqueue("second item");
var_dump($myQueue);
echo '<hr>';
echo 'first item: ' .  $myQueue->peek();
echo '<hr>';

echo $myQueue->dequeue();
echo '<hr>';
var_dump($myQueue);

echo '<hr>';
echo $myQueue->peek();
