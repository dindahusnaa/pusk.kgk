<?php

//import mobile detect
use Detection\MobileDetect;

function base_url($path)
{
    return url($path);
}

function device_detect(){
    $detect = new MobileDetect;
    $deviceType = $detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer';

    return $deviceType;
}