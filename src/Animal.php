<?php

namespace App;

class Animal
{

    public function touchHot()
    {
        return self::jump();
    }

    public function jump()
    {
        return __METHOD__;
    }

    public function openEyes()
    {
        return $this->see();
    }

    public function see()
    {
        return __METHOD__;
    }
}