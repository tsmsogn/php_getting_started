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

    public function test_self_vs_static()
    {
        $this->assertInstanceOf('App\Animal', Human::get_self());
        $this->assertInstanceOf('App\Human', Human::get_static());
    }
}
