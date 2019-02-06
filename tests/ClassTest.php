<?php

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

class Human extends Animal
{

    public function jump()
    {
        return __METHOD__;
    }

    public function see()
    {
        return __METHOD__;
    }
}

class ClassTest extends PHPUnit_Framework_TestCase
{

    public function testExtend()
    {
        $human1 = new Human();

        $this->assertEquals('Human::see', $human1->openEyes());
        $this->assertEquals('Animal::jump', $human1->touchHot());
    }
}
