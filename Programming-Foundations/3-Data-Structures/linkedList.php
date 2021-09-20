<?php

// node class >> data and pointer
class Node
{
    public $data;
    public $pointer;
}

// Linked List class >>> an empty Linked List
class LinkedList
{
    public $head;

    //constructor to create an empty LinkedList
    public function __construct()
    {
        $this->head = null;
    }
}

// create an empty LinkedList 
$myList1 = new LinkedList;
var_dump($myList1);

// 1st node 
$myFirstNode = new Node;
$myFirstNode->data = 'First Node';
$myFirstNode->pointer = null;

// make 1st node the head
$myList1->head = $myFirstNode;

echo '<hr>';
var_dump($myList1);
echo '<hr>';
var_dump($myFirstNode);

// 2nd node 
$secondNode = new Node;
$secondNode->data = 'second Node';
$secondNode->pointer = $myFirstNode;

// update the head
$myList1->head = $secondNode;
echo '<hr>';

var_dump($myList1);
echo '<hr>';
var_dump($secondNode);
echo '<hr>';
var_dump($myFirstNode);
