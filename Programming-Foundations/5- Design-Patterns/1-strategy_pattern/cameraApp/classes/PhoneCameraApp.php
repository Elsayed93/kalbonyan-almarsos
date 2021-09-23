<?php

require_once 'ShareInterface.php';

abstract class PhoneCameraApp
{

    protected ShareInterface $share;

    //take
    public function take()
    {
        return 'take a photo';
    }

    //share setter and perform
    public function setShare(ShareInterface $sh)
    {
        $this->share = $sh;
    }

    public function performShare()
    {
        return $this->share->share();
    }

    //abstract edit
    public abstract function edit();

    // save
    public function save()
    {
        return 'save a photo';
    }
}
