<?php
class Animal {

    function touchHot() {
        self::jump(); 
    }

    function jump() {
        echo __METHOD__;
    }

    function openEyes() {
        $this->see();
    }

    function see() {
        echo __METHOD__;
    }

}

class Human extends Animal {

    function jump() {
        echo __METHOD__;
    }

    function see() {
        echo __METHOD__; 
    }

}

$human1 = new Human();
$human1->openEyes(); # => Human::see
$human1->touchHot(); # => Animal::jump
