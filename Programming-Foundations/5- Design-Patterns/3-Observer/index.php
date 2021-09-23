<?php

require_once 'SimpleSubject.php';
require_once 'ConcreteObserverA.php';
require_once 'ConcreteObserverB.php';


$subject = new SimpleSubject();

$o1 = new ConcreteObserverA();

$subject->attach($o1);

echo '<br>';
$o2 = new ConcreteObserverB();
$subject->attach($o2);
echo '<br>';

$subject->someBusinessLogic();
echo '<br>';

$subject->someBusinessLogic();
echo '<br>';

$subject->detach($o2);
echo '<br>';

$subject->someBusinessLogic();
