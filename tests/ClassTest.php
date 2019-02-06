<?php

namespace App\Test;

use App\Human;
use PHPUnit_Framework_TestCase;

class ClassTest extends PHPUnit_Framework_TestCase
{

    public function testExtend()
    {
        $human1 = new Human();

        $this->assertEquals('App\Human::see', $human1->openEyes());
        $this->assertEquals('App\Animal::jump', $human1->touchHot());
    }
}
