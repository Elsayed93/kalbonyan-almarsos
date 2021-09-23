<?php

require_once 'PhoneCameraApp.php';
require_once 'EmailShare.php';

class BasicCameraApp extends PhoneCameraApp
{

    public function __construct()
    {
        $this->share = new EmailShare;
    }
    
    public function edit()
    {
        return 'Basic Camera App edit a photo';
    }
}
