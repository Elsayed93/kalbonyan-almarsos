<?php

require_once 'PhoneCameraApp.php';
require_once 'SocialMediaShare.php';


class CameraPlusApp extends PhoneCameraApp
{

    public function __construct()
    {
        // make cameraPlus app default share  behavior >>> social media share
        $this->share = new SocialMediaShare;
    }

    public function edit()
    {
        return 'camera plus app edit a photo';
    }
}
