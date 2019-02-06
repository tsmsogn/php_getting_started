<?php

namespace App;

class Foo
{
    public $bar;

    public function __construct($bar = null)
    {
        $this->bar = $bar;
    }
}