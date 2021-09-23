<?php

require_once 'classes/CameraPlusApp.php';
require_once 'classes/BasicCameraApp.php';


$cameraPlusApp = new CameraPlusApp;
var_dump($cameraPlusApp);


echo '<hr>';
var_dump($cameraPlusApp->performShare());
echo '<hr>';

var_dump($cameraPlusApp->edit());
echo '<hr>';

var_dump($cameraPlusApp->save());

echo '<br>';
echo '<br>';

echo '<hr>';
echo '<hr>';
echo '<hr>';

echo '<br>';

$basicApp = new BasicCameraApp;

var_dump($basicApp);
echo '<hr>';
var_dump($basicApp->performShare());
echo '<hr>';

var_dump($basicApp->edit());
echo '<hr>';

var_dump($basicApp->save());