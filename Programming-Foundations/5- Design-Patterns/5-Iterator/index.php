<?php

require_once 'Cafe.php';
require_once 'IteratorInterface.php';

require_once 'DinnerMenu.php';
require_once 'DinnerIterator.php';

require_once 'PanCakeHouseMenu.php';
require_once 'PanCakeHouseIterator.php';

$dinnerIte = new DinnerIterator(['dinner1,dinner2,dinner3']);
$dinnerMenu  = new DinnerMenu();

$panCakeIter = new PanCakeHouseIterator([
    'item1' => 'panCak1',
    'item2' => 'panCak2',
    'item3' => 'panCak3',
]);
$panCakeMenu = new PanCakeHouseMenu;

$myCafe = new Cafe($dinnerMenu, $panCakeMenu);


var_dump($myCafe);
echo '<hr>';
echo '<hr>';
var_dump($myCafe->printItems($dinnerIte));
echo '<hr>';
echo '<hr>';
var_dump($myCafe->printItems($panCakeIter));