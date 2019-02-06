<?php

namespace App\Test;

use App\Foo;
use PHPUnit_Framework_TestCase;

class OperatorTest extends PHPUnit_Framework_TestCase
{

    public function testComparision()
    {
        $foo1 = new Foo(1);
        $foo2 = new Foo();
        $foo3 = new Foo();

        $this->assertFalse($foo1 == $foo2);
        $this->assertFalse($foo1 == $foo2);
        $this->assertFalse($foo1 === $foo2);
        $this->assertTrue($foo2 == $foo3);
    }

    public function testReference()
    {
        $a =& $c;
        $b = $c;
        $c = 1;

        $this->assertEquals(1, $a);
        $this->assertEquals(null, $b);
        $this->assertEquals(1, $c);
    }
}
