<?php

namespace App\Test;

use PHPUnit_Framework_TestCase;

class ArrayTest extends PHPUnit_Framework_TestCase
{

    public function test_in_array()
    {
        $this->assertTrue(in_array(0, array('foo'))); // o.O

        $this->assertFalse(in_array(0, array(1)));
        $this->assertFalse(in_array(0, array('foo'), true));
    }
}